<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Input;

class PayController extends Controller{
    public function shop(){
        return view('pay');
    }

    public function pay(Request $request)
    {
      $customer= new Customer;
      
      $fname=$request->input('fname');
      $lname=$request->input('lname');
      $email=$request->input('email');
      $phone=$request->input('phone');
      $password=$request->input('password');

      $customer->fname=$fname;
      $customer->lname=$lname;
      $customer->email= $email;
      $customer->phone= $phone;
      $customer->password= $password;

      
      $customer->save();

      return view('login');
    }

    public function retrieve(Request $request)
    {
      $email=$request->input('email');
      $password=$request->input('password');
      $customer=Customer::where('email',$email)->where('password', $password)->first();
      $phone=$customer->phone;
      $email=$customer->email;
      if($customer)
      {
        $fields = array(
          "live"=> "0",
          "oid"=> "112",
          "inv"=> "112020102292999",
          "ttl"=> "150",
          "tel"=>$phone, 
          "eml"=>$email ,
          "vid"=> "demo",
          "curr"=> "KES",
          "cbk"=> "http://127.0.0.1:8000/paid",
          "cst"=> "1",
          "crl"=> "0"
  
        );
        $datastring = $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['cbk'].$fields['cst'].$fields['crl'];
        $hashkey="demoCHANGED";
        $generated_hash = hash_hmac('sha1',$datastring , $hashkey);
        return view('welcome1')->with('generated_hash',$generated_hash)->with('fields',$fields);
      }
      else
      {
        return view('login');
      }
    }


    public function paid()
    {
      $val="2";

       $id=Input::get('id');
       $ivm=Input::get('ivm');
       $qwh=Input::get('qwh');
       $afd=Input::get('afd');
       $poi=Input::get('poi');
       $uyt=Input::get('uyt');
       $ifd=Input::get('ifd');
       $ipnurl = "https://www.ipayafrica.com/ipn/?vendor=".$val."&id=".$id."&ivm=".
$ivm."&qwh=".$qwh."&afd=".$afd."&poi=".$poi."&uyt=".$uyt."&ifd=".$ifd;
$fp = fopen($ipnurl, "rb");
$status = stream_get_contents($fp, -1, -1);
fclose($fp);
      return view('paid');
    }
}