<?php

namespace App\Http\Controllers\Cart;

use App\Model\Stuff;
use Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(session()->has('current_url') && $request->current_url != session()->get('current_url'))
            Cart::destroy();

        if(!$request->ajax())
            return abort(404, 'صفحه درخواستی شما پیدا نشد.');

        return json_encode([
            'cart' =>Cart::content(),
            'total' => Cart::total(),
            'count' => Cart::content()->count()
        ]);
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
        if(!session()->has('current_url'))
            session()->put('current_url', $request->current_url);
        if(Session()->has('current_url') && session()->get('current_url') != $request->current_url) {
            session()->forget('current_url');
            session()->put('current_url', $request->current_url);
            Cart::destroy();
        }

        if(!$request->ajax())
            return abort(404, "صفحه درخواستی شما پیدا نشد");
        Cart::add(['id' => $request->data['iID'], 'name' => $request->data['sName'], 'price' => $request->data['dSellPrice'], 'qty' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        Cart::update($id, $request->count); // Will update the quantity
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if(!$request->ajax())
            return abort(404, "صفحه درخواستی شما پیدا نشد");

        Cart::remove($id);
    }
}
