<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function aboutView(){
        return view('front-end.home.about');
    }

    public function serviceView(){
        return view('front-end.home.service');
    }
    public function contactView(){
        return view('front-end.home.contact');
    }
}
