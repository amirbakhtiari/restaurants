<?php

namespace App\Http\Controllers\Seller;

use App\Model\Person;
use App\Utility\Utility;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    public function index() {
        return view('seller.login');
    }
    public function login(Requests\SellerRequest $sellerRequest) {
        $login = false;
        if(!Utility::checkCaptcha($sellerRequest->security_code))
            return redirect()->back()->withInput()->withErrors(['captcha_incorrect' => 'عبارت امنیتی را اشتباه وارد کرده اید.']);
        $login = Person::login($sellerRequest->username, $sellerRequest->password, SELLER);
        if($login === false)
            return redirect()->back()->withErrors(['login_incorrect' => 'نام کاربری و یا رمز را اشتباه وارده کرده اید.']);
        session(['login_seller' => 1]);
        return redirect()->route('seller.dashboard');
    }
    public function logout() {
        session()->forget('login_seller');
        return redirect()->route('seller.login.show');
    }
    public function main() {
        return view('seller.main');
    }
}