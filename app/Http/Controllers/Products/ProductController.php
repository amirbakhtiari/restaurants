<?php

namespace App\Http\Controllers\Products;

use App\Model\Stuff;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return Stuff::select('sName', 'iCode', 'dBuyPrice', 'dSellPrice')->get();
    }
}
