<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){
        return view('front-end.signup.sign-up',[
            'categories' => Category::where('publication_status', '1')->get()
        ]);
    }
}
