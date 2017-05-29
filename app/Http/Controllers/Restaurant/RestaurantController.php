<?php

namespace App\Http\Controllers\Restaurant;

use App\Jobs\SendActivationCode;
use App\Model\Address;
use App\Model\CustomFieldItems;
use App\Model\CustomFields;
use App\Model\Factor;
use App\Model\FactorStuff;
use App\Model\GeneralGroup;
use App\Model\Person;
use App\Model\ProductStuff;
use App\Utility\SMS;
use App\Utility\Utility;
use Cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class RestaurantController extends Controller
{
    public function __construct() {
    }
    /**
     * show
     */
    public function showLogin() {
    }

    /**
     * show register page
     */
    public function showRegister() {
        return view('restaurants.register');
    }

    /**
     * @param Requests\LoginRequest $loginRequest
     */
    public function login(Requests\LoginRequest $loginRequest) {}

    /**
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'username'          => 'required',
            'password'          => 'required',
            'passwordconfirm'   => 'required',
            'address'           => 'required',
            'restaurantName'    => 'required',
            'restaurantEnName'  => 'required',
            'landlinePhone'     => 'required',
            'security_code'     => 'required',
        ]);

        if($request->latitude == 0 or $request->longitude == 0)
            return response([['لطفا موقعیت خود را برروی نقشه مشخص کنید.' ]], 422);

        if (!Utility::checkCaptcha((string)$request->security_code))
            return response([['کد امنیتی را صحیح وارد نکرده اید.' ]], 422);

        if(strcmp($request->password, $request->passwordconfirm) !== 0)
            return response([['لطفا رمزها را یکسان وارد نمایید.' ]], 422);

        if(Utility::just_number($request->username))
            return response([['نام کاربری باید شامل اعداد باشد.']], 422);

        if (Person::has(['field' => 'sWebUserName', 'value' => $request->username]))
            return response([['نام کاربری وارد شده تکراری میباشد.']], 422);

        if (!empty($request->restaurantEnName) && Person::has(['field' => 'sCompany', 'value' => $request->restaurantEnName]))
            return response([['نام رستوران(انگلیسی) وارد شده تکراری میباشد.']], 422);

        if (!empty($request->restaurantEnName) && Utility::just_english($request->restaurantEnName))
            return response([['نام رستوران(انگلیسی) فقط باید شامل حروف انگلیسی باشد.']], 422);

        if (!empty($request->restaurantName) && Person::has(['field' => 'sName', 'value' => $request->restaurantName]))
            return response([['نام رستوران وارد شده تکراری میباشد.']], 422);

        if (!empty($request->email) && Person::has(['field' => 'sEmail', 'value' => $request->email]))
            return response([['ایمیل وارده شده تکراری میباشد.']], 422);


        if (!empty($request->landlinePhone) && Person::has(['field' => 'sTel1', 'value' => $request->landlinePhone]))
            return response([['شماره تلفن وارده شده تکراری میباشد.']], 422);

        $seller = Person::register($request);

        /*$cellPhone = strval($requests->username);
        $message = "رستوران " . $requests->restaurantName . " به های پرس خوش آمدید - ثبت نام شما به موفقیت انجام شد.";
        $status = SMS::getInstance()->setRecipient($cellPhone, $message)->send()->status();*/

        if($seller > 0)
            return response([
                'message' => 'ثبت نام شما با موفقیت انجام شد.',
                'code' => Person::find($seller)->sWebActiveCode
            ], 200);
    }
    /**نمایش رستورانها
     * @param Request $request
     * @return mixed
     */
    public function listOfRestaurant(Request $request) {

        $res = [];
        $query = "SELECT p.iID, p.sName, p.sCompany, p.sAddress, p.oPicture, p.sWebUserName, p.iImportanceID FROM persons p";

        //-> boolean field
        if($request->has('check')) {
            $query .= ", customfieldrecords cfr WHERE p.iID=cfr.iRecordID AND cfr.iType=4 AND (";
            foreach($request->get('check') as $key => $check) {
                $query .= "(cfr.iFieldID={$key} AND cfr.iValue={$check}) OR ";
            }
            $query = rtrim($query, " OR ");
            $query .= ")";
        }
        $query .= " GROUP BY p.iID";

        dd($query);

        $restaurants = Person::restaurant()->select([ 'iID', 'oPicture', 'sAddress', 'sWebUserName', 'sCompany', 'iImportanceID', 'sName' ])
            ->orderBy('iImportanceID', 'DESC')->paginate(COUNT_ITEMS_PER_PAGE);

        foreach ($restaurants as $restaurant) {
            $res[] = [
                'id' => $restaurant->iID,
                'picture' => base64_encode($restaurant->oPicture),
                'address' => $restaurant->sAddress,
                'username' => $restaurant->sWebUserName,
                'name' => $restaurant->sName,
                'company' => $restaurant->sCompany,
                'iImportanceID' => $restaurant->iImportanceID
//                'cfr' => $restaurant->iValue
            ];
        }

        if($request->ajax()) :

            return json_encode([
                'restautants' => $res,
                'pages' => [
                    'total_items' => $restaurants->total(),
                    'cur_page' => $restaurants->currentPage(),
                    'per_page' => $restaurants->perPage(),
                    'last_page' => $restaurants->lastPage(),
                ]
            ]);
        endif;
    }

    public function showAllRestaurant() {
        return view('restaurants.lists');
    }

    /**
     * @param $name
     */
    public function showRestaurant($name) {
        $restaurants = Person::where('sWebUserName', $name)->first();
        return view('restaurants.restaurant', compact('restaurants'));
    }

    /**
     * @param $name
     * @param Person $person
     * @return mixed
     */
    public function showRestaurantPage($name, Person $person) {
        $restaurant = $person->select('iID', 'sName', 'sAddress', 'oPicture', 'sDesc', 'dGPSx', 'dGPSy')->where('sCompany', $name)->where('iWebState', ACTIVE_STATE)->first();
        if($restaurant != null)
            $generalGroup = GeneralGroup::where('iRecordID', $restaurant->iID)->get();

//        $stuffs = $stuff->select('iID', 'sName', 'oPicture', 'iFirstClassID', 'dSellPrice')->where('iWebPersonID', $restaurant->iID)
//            ->where('iStatus', INACTIVE_STATE)->where('iKind', 2)->get();
        session()->put('restaurant_name', $name);

        return view('restaurants.menu', compact('restaurant', 'stuffs', 'generalGroup'));
    }

    public function loadFilter(Request $request) {
        if(!$request->ajax())
            return abort(404, "page not found");

        $fields = ['iID', 'iType', 'sName', 'iOrder'];
        if(!Cache::has('cf_lists') && !Cache::has('cf_items')) {
            Cache::put('cf_lists', CustomFields::select($fields)->orderBy('iOrder')->get(), 120);
            Cache::put('cf_items', CustomFieldItems::all(), 120);
        }
        $cf_lists = Cache::get('cf_lists');
        $cf_items = Cache::get('cf_items');
        return response()->json(
            [
                'cf_lists'   => $cf_lists,
                'cf_items'   => $cf_items
            ]
        );
    }

    public function checkout() {
        $addresses = Address::where('iPersonID', (int)Session::get('customer')['iID'])->get();
        return view('restaurants.checkout', ['carts' => Cart::content(), 'addresses' => $addresses]);
    }

    public function factorRegister(Request $request) {
        if(Cart::count() <= 0)
            return redirect()->back()->withErrors(['error' => '.سفارشی ندارید']);
        if(!session()->has('customer_login') && session()->get('customer_login') != 1)
            return redirect()->route('user.login.page')->withErrors(['message_factor_register' => 'برای ثبت سفارش ثبت نام کنید یا وارد شوید']);
        if($request->address == 0)
            return redirect()->back()->withErrors(['error' => 'لطفا آدرس خود را انتخاب کنید.']);
        $address = Address::find($request->address);

        $max_num = Factor::where('iType', 12)->max('iNum') + 1;

        DB::beginTransaction();
        Factor::create([
            'iPersonID' => (int)Session::get('customer')['iID'],
            'iPersonID2' => Person::select('iID')->where('sCompany', session()->get('restaurant_name'))->first()->iID,
            'iPersonnelID' => 0,
            'sPerson' => Session::get('customer_name'),
            'sPersonAddress' => $address->sAddress,
            'sPersonTel' => $address->sTel1,
            'iNum' => $max_num,
            'date' => (new \DateTime()),
            'dateDelivery' => (new \DateTime()),
            'sDesc' => $request->description,
            'dSum' => Cart::total(0, "", ""),
            'dSumAll' => Cart::total(0, "", ""),
            'dProfit' => 0,
            'dStuffsCost' => 0,
            'iType' => 12,
            'iStoreID' => 1,
//            'iUserID' => (new Setting())->section()->entry('userTypeDefault')->read()[0],
            'iSituation' => 0,
            'dSumCount' => Cart::count(),
            'iRowsCount' => Cart::content()->count(),
            'iProfitType' => -1,
            'iNumOrg' => 0,
            'dDiscountPercent' => 0,
            'dDiscount' => 0,
            'bFromWeb' => 1,
            'iDepartmentID' => 1, //شعبه
//            'iTasviehType' => $request->tasviehtype,
//            'iFactorType' => $request->factorType == null ? 1 : $request->factorType,
            'dGPSx' => 0,
            'dGPSy' => 0,
            'dGPSz' => 8
        ]);
        foreach(Cart::content() as $cart) {
            FactorStuff::create([
                'iStuffID' => $cart->id,
                'dCount' => $cart->qty,
                'dPrice' => $cart->price,
                'dDiscount' => 0,
                'iFactorNum' => $max_num,
                'iType' => 12,
                'date' => (new \DateTime()),
                'dAmount'          => 0,
                'dProfit'          => 0,
                'dAvgBuyPrice'     => 0,
                'dBuyPrice'        => 0,
                'dMainStuffFactor' => 0
            ]);
        }
        DB::commit();
        Cart::destroy();
        return redirect()->back()->with('message', 'سفارش شما ثبت شد');
    }

    public function activation(Request $request) {
        $restaurant = Person::where('iKind', SELLER)->where('sWebUserName', $request->from)->where('sWebActiveCode', $request->message)
            ->update(['iWebState' => 1]);
        if($restaurant > 0)
            return response(['رستوران شما فعال شد'] , 200);
        return response(['سیستم با مشکل مواجه شده لطفا بعدا امتحان کنید'] , 404);
    }

    public function findRestaurants(Request $request) {
        $lat = $request->lat;
        $lng = $request->lng;
        $query = "SELECT dGPSx latitude, dGPSy longitude FROM persons WHERE iKind=1 AND (dGPSx<={$lng} AND dGPSy>={$lng}) OR (dGPSx<={$lat} AND dGPSy>={$lat}) OR (dGPSx>={$lat} AND dGPSy<={$lng});";
        return response()->json(DB::select($query), 200);
    }
}
