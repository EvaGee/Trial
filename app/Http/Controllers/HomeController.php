<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class HomeController extends Controller
{
    public function home(){
        return view('home1');
    }
    public function login(Request $request){

        $username=$request->input('username');

        
        $detail=new Detail;
        $detail->username=$username;
        $detail->password=$request->input('password');
        $detail->save();

        return view('home1');
        
    }
    public function retrieve(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $detail=Detail::where('username',$username)->where('password',$password)->first();
        if($detail)
        {
            return view('home')->with('detail',$detail);
        }
        else{
         return view('home1');
        }     
    }
    public function allfields(){
        $details=Detail::all();
        return view('home2',compact('details'));
    }
}
