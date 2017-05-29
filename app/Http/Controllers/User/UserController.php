<?php

namespace App\Http\Controllers\User;

use App\Model\Address;
use App\Model\Complaint;
use App\Model\Factor;
use App\Model\FactorStuff;
use App\Model\Favorite;
use App\Model\GeneralGroup;
use App\Model\History;
use App\Model\Stuff;
use App\Utility\SMS;
use App\Utility\Utility;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Person;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\Facades\jDateTime;
use Morilog\Jalali\jDate;

class UserController extends Controller
{
    /**
     * show login page
     */
    public function showLogin() {
        if(session()->has('customer_login') && session()->get('customer_login') == 1)
            return redirect()->route('show.user.profile');
        return view('user.login');
    }

    /**
     * @param Requests\LoginRequest $loginRequest
     * @return mixed
     */
    public function login(Requests\LoginRequest $loginRequest) {

        if(!Utility::checkCaptcha($loginRequest->captcha))
            return response([['کد امنیتی را اشتباه وارد کرده اید.']], 422);

        $login = Person::login($loginRequest->username, $loginRequest->password);

        if($login ==! false) {
            Session::put('customer_login', 1);
            Session::put('customer', $login);
            Session::put('customer_id', $login->iID);
            $name = $login->sName . ' ' . $login->sFamily;
            Session::put('customer_name', $name);
            History::log($login->iID);
            if(session()->has('restaurant_name') && !empty(session()->get('restaurant_name')))
                return response()->json(['status' => 'redirect', 'redirect' => 'checkout']);

            return response(['status' => 'login'], 200);
        }
        return response([['نام کاربری یا رمز وارده شده اشتباه است.']], 422);
    }

    /**
     * @param Requests\RegisterRequest $registerRequest
     * @return mixed
     */
    public function register(Requests\RegisterRequest $registerRequest) {

        if(!Utility::checkCaptcha($registerRequest->captcha))
            return response()->json([['کد امنیتی را اشتباه وارد کرده اید.']], 422);

        if(!empty($registerRequest->username) && Utility::just_english($registerRequest->username))
            return response()->json([['نام کاربری را بصورت لاتین وارد نمایید.']], 422);

        if(strcmp($registerRequest->password, $registerRequest->rePassword) !== 0)
            return response()->json([['لطفا رمز ها را یکسان وارد نمایید.']], 422);

        if(Person::has(['field' => 'sWebUsername', 'value' => $registerRequest->username], CUSTOMER))
            return response()->json([['نام کاربری وارده شده تکراری میباشد.']], 422);

        if(!empty($registerRequest->email) && Person::has(['field' => 'sEmail', 'value' => $registerRequest->email], CUSTOMER))
            return response()->json([['ایمیل وارد شده تکراری میباشد.']], 422);

        if(Person::has(['field' => 'sTel1',  'value' => $registerRequest->phone], CUSTOMER))
            return response()->json([['شماره تلفن وارد شده تکراری میباشد.']], 422);

        if(Person::has(['field' => 'sMobile1' , 'value' => $registerRequest->mobile], CUSTOMER))
            return response()->json([['شماره موبایل وارد شده تکراری میباشد.']], 422);

        $id = Person::register($registerRequest, CUSTOMER);

        if($id > 0) {
            $person = Person::find($id);
            $activateCode = rand(765, 1001) + $person->sWebActiveCode;
            $message = $registerRequest->name . ' ' . $registerRequest->family . ' عزیز به های پرس خوش آمدی. کد فعال سازی شما : ' . $activateCode . ' میباشد.';
            $person->sWebActiveCode = $activateCode;
            $person->save();
            try {
                SMS::getInstance()->setRecipient($registerRequest->mobile, $message)->send();
            } catch(Exception $e) {}
            return response()->json(['msg' => 'ثبت نام شما با موفقیت انجام شد.', 'code' => $activateCode], 200);
        }


        return response()->json(['در رود ثبت نام مشکلی به وجود آمده لطفا بعدا امتحان کنید.'], 405);
    }

    public function showProfile(Request $request) {
        if(!session()->has('customer_login') && session()->get('customer_login') != 1)
            return redirect()->route('user.login.page');
        return view('user.profile');
    }

    public function profile(Request $request) {
        if(!Session::has('customer_login'))
            return json_encode(['status' => 'error']);

        $user_id = (int)Session::get('customer')['iID'];
        if($request->ajax()) {
            $pic = Person::select('oPicture')->where('iID', $user_id)->first();
            $factors = Factor::select('iID', 'iNum', 'sPersonTel', 'sPersonAddress', 'date', 'sDesc', 'dSum', 'iPersonID2', 'iPersonID', 'iData1')
                ->where('iPersonID', (int)session()->get('customer_id'))->get();

            $complain = Complaint::where('iComplainterID', (integer)session()->get('customer_id'))->get();
            $complains = array();
            foreach($complain as $com):
                $complains[] = [
                    'id' => $com->iID,
                    'restaurantName' => Person::find($com->iPersonID)->sCompany,
                    'factorNumber' => Factor::where('iNum', $com->iProductID)->first()->iNum,
                    'title' => $com->sTitle,
                    'description' => $com->sDesc,
                    'result' => $com->sResult,
                    'dateRegister' => jDate::forge($com->dateCreate)->format('date')
                ];
            endforeach;

            //gets list of favorites
            $favorite = Favorite::where('iUserID', $user_id)->get();
            $favorites = array();
            foreach($favorite as $fav):
                $favorites[] = [
                    'id' => $fav->iID,
                    'restaurant' => Person::select('iID', 'sName', 'sCompany')->find($fav->iPersonID),
                    'group_id' => $fav->iGroupID,
                    'description' => $fav->sDec
                ];
            endforeach;

            //gets list of orders
            $fact = [];
            foreach($factors as $fac) {
                $fact[] = [
                    'id' => $fac->iID,
                    'num' => $fac->iNum,
                    'tel' => $fac->sPersonTel,
                    'person_id' => $fac->iPersonID,
                    'person_id2' => $fac->iPersonID2,
                    'status' => $fac->iData1,
                    'address' => $fac->sPersonAddress,
                    'date' => jDate::forge($fac->date)->format('date'),
                    'time' => jDate::forge($fac->date)->format('time'),
                    'desc' => $fac->sDesc,
                    'sum'  => $fac->dSum,
                ];
            }
            return json_encode([
                'data' => Session::get('customer'),
                'pic' => base64_encode($pic->oPicture),
                'factors' => $fact,
                'favorites' => $favorites,
                'groups' => (new GroupController())->index(),
                'complains' => $complains
            ]);
        }
    }

    public function showDetailOrder($num) {
        $query = sprintf("SELECT s.sName, s.iCode, fs.dCount, fs.dPrice, (fs.dCount * fs.dPrice) SumAll, f.iNum, f.sPerson 
                          FROM stuffs s, factorstuffs fs, factors f
                          WHERE f.iNum=fs.iFactorNum AND s.iID=fs.iStuffID AND f.iType=12 AND f.bFromWeb=1 AND f.iNum=%d;", $num);
        return DB::select($query);

    }
    public function updateProfile(Request $request, Person $person) {
        $this->validate($request, [
            'name'      => 'required',
            'family'    => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'cellphone' => 'required'
        ], [
            'name.required' => 'لطفا نام خود را وارد نمایید.'
        ]);

        $per = $person->select('iID', 'sName', 'sFamily', 'sWebUSerName', 'sEmail', 'sTel1', 'sMobile1', 'iMr', 'sDesc')->find((int)Session::get('customer_id'));
        $jDateBirth = $request->birthdate;
        $dateBirth = jDatetime::createDatetimeFromFormat('d/m/Y', $jDateBirth);
        $per->sName         = $request->name;
        $per->sFamily       = $request->family;
        $per->sWebUserName  = $request->username;
        $per->sEmail        = $request->email;
        $per->sTel1         = $request->landline;
        $per->sMobile1      = $request->cellphone;
        $per->sDesc         = $request->about;
        $per->iMr           = $request->sex;
        $per->dateBirth     = $dateBirth;
        if($per->save())
            return response(['update' => 'ok']);
        return response(['update' => 'err'], 500);
    }

    public function logout() {
        if(!session()->has('customer_login') && session()->get('customer_login') != 1) {
            abort(404);
        }

        Session::forget('customer_login');
        Session::forget('customer');
        Session::forget('customer_name');
        Session::forget('customer_id');
        Session::forget('restaurant_name');
        return redirect('/');
    }

    public function uploadImageProfile(Request $request) {
        if(!$request->ajax())
            return abort(404);
        if(!session()->has('customer_login') && 1 != (int)session()->get('customer_login'))
            return abort(404);
        $userId = (int)session()->get('customer_id');
        $user = Person::find($userId);

        if($request->param == 'delete') {
            $user->oPicture = null;
            $user->save();
            return response(['success' => ['تصویر با موفقیت حذف شد.']]);
        }
        $this->validate($request, [
            'profileimage' => 'required|image|mimes:png,jpg,jpeg,bmp|max:1024',
        ], [
            'required' => 'لطفا تصویر پروفایل خود را انتخاب کنید.',
            'image' => 'لطفا یک فایل تصویری انتخاب کنید.',
            'mimes' => 'فایل تصویری شما باید از نوع png,jpg,jpeg,bmp باشد. ',
            'max' => 'تصویر پروفایل نباید بیشتر از 1MB باشد.',
        ]);
        $image = $request->file('profileimage');
        $user->oPicture = file_get_contents($image->path());
        $user->save();
        return response(['success' => ['تصویر با موفقیت ذخیره شد.']]);
    }

    public function changepassword(Request $request) {
        if(!$request->ajax())
            return abort(404);
        $this->validate($request, [
            'old' => 'required',
            'new' => 'required|min:5',
            'confirm' => 'required|min:5'
        ], [],
            [
                'old' => 'قبلی',
                'new' => 'جدید',
                'confirm' => 'تایید '
            ]);

        if(!session()->has('customer_login') && session()->get('customer_login') != 1) {
            return response()->json([ 'لطفا ابتدا وارد شوید.' ]);
        }
        if(strcmp($request->new, $request->confirm) !== 0) {
            return response()->json(['equals_incorrect' => ['لطفا رمز جدید و تکرار را یکسان وارد نمایید.']], 422);
        }

        $person = Person::select('sWebPassword')->where('iID', (int)session()->get('customer_id'))->where('sWebUserName', session()->get('customer')['sWebUserName'])->where('sWebPassword', md5($request->old))->first();

        if(is_null($person)) {
            return response()->json(['incorrect_old' => ['رمز قبلی را اشتباه وارد کرده اید.']], 404);
        }
        $person = Person::select('sWebPassword')->where('iID', (int)session()->get('customer_id'))->where('sWebUserName', session()->get('customer')['sWebUserName'])
            ->where('sWebPassword', md5($request->old))->update(['sWebPassword' => md5($request->new)]);

        if($person)
            return response()->json(['success' => 'رمز شما با موفقیت تغییر کرد.'], 200);

    }

    public function suggestionRestaurant(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'tel' => 'required',
        ], [], [
            'tel' => 'شماره تلفن'
        ]);

        $person = new Person();
        $person->sName     = $request->name;
        $person->sAddress  = $request->address;
        $person->sTel1     = $request->tel;
        $person->sCity     = $request->city;
        $person->sState    = $request->state;
        $person->sDesc     = $request->description;
        $person->iWebState = 0;
        $person->iKind     = SELLER;
        $person->bLikely   = 1;
        /*$person->iHesabTafsilyCode  = Person::max('iHesabTafsilyCode') + 1;
        $person->iHesabTafsilyCode2 = Person::max('iHesabTafsilyCode2') + 1;*/
        if($person->save())
            return response()->json(['با تشکر از پیشنهاد شما'], 200);

    }
}
