<?php

namespace App\Http\Controllers;
use App\Category;
use App\Visitor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){
        return view('front-end.signup.sign-up',[
            'categories' => Category::where('publication_status', '1')->get()
        ]);
    }
    public function newSignUp(Request $request){

        Visitor::saveVisitorInfo($request);
        return redirect('/');
    }
    public function visitorLogout(Request $request){
        Session::forget('visitorId');
        Session::forget('visitorName');

        return redirect('/');
    }
    public function visitorLogin(){
        return view('front-end.signup.sign-in',[
            'categories' => Category::where('publication_status', '1')->get()
        ]);
    }
    public function visitorSignin(Request $request){
        //return $request->all();
        $visitor= Visitor::where('email_address', $request->email_address)->first();
        if($visitor){
            if (password_verify($request->user_pass, $visitor->user_pass)) {;

                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);
                return redirect('/');
            } else {
                return redirect('/visitor-login')->with('message','Password is not valid');
            }
        }else{
            return redirect('/visitor-login')->with('message','Email Address is not valid');
        }


    }

    public function emailCheck($email){

      $visitor = Visitor::where('email_address', $email)->first();
      if($visitor){
          echo 'Email adress Exit';
      }else{
          echo 'Email address available';
      }
    }
}
