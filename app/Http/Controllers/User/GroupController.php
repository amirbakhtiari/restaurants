<?php

namespace App\Http\Controllers\User;

use App\Model\Favorite;
use App\Model\GeneralGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GeneralGroup::where('iTableID', FAVORITE)->where('iRecordID', (int)session()->get('customer_id'))->get();
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
        if(!session()->has('customer_login') && session()->get('customer_id') != 1)
            return response(['error' => 'لطفا ابتدا وارد شود'], 422);
        
        GeneralGroup::create([
            'sName' => $request->folderName,
            'iTableID' => FAVORITE,
            'iRecordID' => session()->get('customer_id'),
            'date' => (new \DateTime()),
        ]);
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
        return GeneralGroup::findOrFail($id);
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
        $generanGroup = GeneralGroup::findOrFail($id);
        $generanGroup->sName = $request->name;
        $generanGroup->sDesc = $request->description;
        $generanGroup->iTableID = $request->table;
        $generanGroup->iRecordID = $request->record;
        $generanGroup->date = (new \DateTime());
        if($generanGroup->save())
            return response(['status' => 'save']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generalGroup = GeneralGroup::findOrFail($id);
        $generalGroup->delete();
        Favorite::where('iUserID', (int)session()->get('customer')['iID'])->where('iGroupID', $generalGroup->iID)->delete();
    }
}
