<?php

namespace App\Http\Controllers\Restaurant;

use App\Model\Complaint;
use App\Model\Factor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Facade;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Complaint::where('iPersonID', (integer)session()->get('customer_id'))->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer_id = (int)session()->get('customer_id');

        $count = Complaint::where('iProductID', (int)$request->input('product_id'))->where('iComplainterID', $customer_id)->count();
        if($count > 0)
            return response()->json(['شما برای این سفارش قبلا درخواست ثبت کرده اید.'], 406);

        if(Factor::find($request->factor_id)->iData1 == 0)
            return response()->json(['در صورت تایید سفارش  قادر به ارسال درخواست میباشید.'], 406);

        $complaint = Complaint::create([
            'iPersonID'        => $request->input('person_id'),
            'iComplainterType' => 2,
            'iComplainterID'   => session()->get('customer_id'),
            'iProductID'       => $request->input('product_id'),
            'sTitle'           => $request->input('title'),
            'sDesc'            => $request->input('body'),
            'dPercent'         => (int)$request->input('score'),
            'iCode'            => Complaint::max('iCode') + 1,
            'dateCreate'       => (new \DateTime())
        ]);
        return ($complaint->iID > 0) ? response(['status' => 'created'], 201) : response(['status' => 'error'], 422);
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
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();
    }
}
