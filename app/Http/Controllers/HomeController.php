<?php

namespace App\Http\Controllers;

use App\Model\Person;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        $restaurants = Person::restaurant()->select([ 'iID', 'oPicture', 'sAddress', 'sWebUserName', 'sCompany', 'iImportanceID', 'sName' ])->orderBy('iImportanceID', 'DESC')->paginate(6);
        return view('home.index', compact('restaurants'));
    }

    public function about() {
        return view('home.about');
    }

    public function contact() {
        return view('home.contact');
    }

    public function rules() {
        return view('restaurants.rules');
    }
}


