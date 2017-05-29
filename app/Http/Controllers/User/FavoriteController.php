<?php

namespace App\Http\Controllers\User;

use App\Model\Person;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Favorite;
class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = array();
        foreach(Favorite::where('iUserID', session()->get('customer_id'))->get() as $favorite):
            $favorites[] = [
                'id' => $favorite->iID,
                'restaurant' => Person::select('iID', 'sName', 'sCompany', 'oPicture')->find($favorite->iPersonID),
                'group_id' => $favorite->iGroupID,
                'description' => $favorite->sDec
            ];
        endforeach;
        return $favorites;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!session()->has('customer_login') && session()->get('customer_id') != 1)
            return response(['error' => 'لطفا ابتدا وارد حساب کاربری خود شوید.'], 422);
        $find = Favorite::where('iPersonID', $request->person_id)->count();
        if($find > 0)
            return response(['message' => 'این رستوران در لیست علاقه مندی های شما میباشد.'], 200);
        if(0 == (int)$request->folder)
            return response(['error' => 'لطفا  پوشه خود را انتخاب کنید.'], 422);

        Favorite::create([
            'iPersonID' => $request->person_id,
            'iUserID' => session()->get('customer_id'),
            'iGroupID' => (int)$request->folder,
            'dateCreate' => (new \DateTime()),
            'sDesc' => $request->description
        ]);
        return response(['message' => 'رستوران مورد نظر به علاقه مندی شما افزودن شد.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorite = Favorite::find($id);
        $favorite->delete();
    }
}