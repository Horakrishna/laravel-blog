<?php

namespace App;
use Session;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable =['first_name','last_name','email_address','user_pass','phone_number','address'];

    public static function saveVisitorInfo($request){

        $visitor =new Visitor();
        $visitor->first_name        = $request->first_name;
        $visitor->last_name         = $request->last_name;
        $visitor->email_address     = $request->email_address;
        $visitor->user_pass         = bcrypt($request->user_pass);
        $visitor->phone_number      = $request->phone_number;
        $visitor->address           = $request->address;
        $visitor->save();
        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);
    }
}
