<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('areti.administration.dashboard');
    }

    public function whitelist(){
        return view("areti.administration.whitelist");
    }

    public function onboarding(Request $request){
        $code=$request->input("code");
        if($code!=null){
            return view("areti.onboarding.onboarding")->with('code',$code);
        }
        return view("areti.onboarding.onboarding")->with('code',null);
    }
}
