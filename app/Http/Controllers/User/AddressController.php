<?php

namespace App\Http\Controllers\User;

use App\Model\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
            return Address::where('iPersonID', (int)Session::get('customer')['iID'])->get();
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     * @param Address $address
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Address $address)
    {
        if($request->ajax()) {
            $address->create([
                'iPersonID' => (int)Session::get('customer')['iID'],
                'sCity' => $request->sCity,
                'sAddress' => $request->sAddress,
                'sTel1' => $request->sTel1,
                'date' => (new \DateTime())
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Address::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->ajax())
            return Address::find($id);
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
        if($request->ajax()) {
            $address = Address::find($id);
            $address->iPersonID = Session::get('customer')['iID'];
            $address->sCity = $request->sCity;
            $address->sAddress = $request->sAddress;
            $address->sTel1 = $request->sTel1;
            $address->date = (new \DateTime());
            if($address->save())
                return json_encode(['status' => 'saved']);
        }
        return json_encode(['status' => 'error']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax()) {
            $address = Address::findOrFail($id);
            $address->delete();
            return json_encode(['status' => 'ok']);
        }
        return json_encode(['status' => 'error']);
    }
}
