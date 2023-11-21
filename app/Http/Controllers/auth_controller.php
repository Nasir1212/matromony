<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\OTP;
use App\Mail\SendOTP;
use Mail;

class auth_controller extends Controller
{
    public function signup_user(Request $req){
            
        $result = Register::insert([
            'mail'=>$req->email,
            'name'=>$req->name,
            'password'=>md5($req->password),
            'gender'=>$req->gender,
        ]);

        if($result){
            $req->session()->put('is_login', true);
            $req->session()->put('email', $req->email);
           return json_encode(['condition'=>true,'message'=>'Sign Up Successfully']);
        }else{
           return json_encode(['condition'=>false,'message'=>'Sign Up failed']);
        }


    }

    public function user_login(Request $req){
   
        $result = Register::where(['mail'=>$req->email,'password'=>md5($req->password)])->count();

        if($result==1){
            $req->session()->put('is_login', true);
            $req->session()->put('email', $req->email);
           return json_encode(['condition'=>true,'message'=>'Login Successfully']);
        }else{
            return json_encode(['condition'=>false,'message'=>'Email or Password not matched']);
        }
    }

    public function send_otp(Request $req){
       if( Register::where(['mail'=>$req->email])->count() > 0){

        
    $otp  =  rand(100000,999999);
    $send_otp  =  Mail::to(trim($req->email))->send(new SendOTP($otp));
        
        if($send_otp){
            $req->session()->put('otp_email', $req->email);
          $saving_otp =  OTP::insert([
              'otp'=>$otp,
              'date'=>date("Y-m-d H:i:s")
            
            ]);
            if($saving_otp){
                return view("pages.otp_view");
            }
              
        }
       }else{
        return redirect("/reset_password")->with('message','Email not found');
       }

    }

    public function checking_otp(Request $req){
        $result = \DB::select("SELECT  `otp` FROM `otp` WHERE  `otp` = '$req->otp' AND NOW() <= DATE_ADD(date, INTERVAL 24 HOUR)");
         if(count($result)>0){
        
         OTP::where(['otp'=>$req->otp])->delete();
         return redirect("/change_password");
        //  return view("pages.change_password");
    
         }
       }
    
       public function handle_change_password(Request $req){
    
        if($req->password == $req->confirm_password){
            Register::where(['mail'=> $req->session()->get('otp_email')])->update([
                'password'=>md5($req->password),
          ]); 
          \Session()->flush();
          return redirect("/login")->with(['condition'=>true,'message'=>'Changed Password ']);
        }else{
            return redirect("/change_password")->with(['message'=>'Password and Confirm Password not match']);
        }
    }    

   
}
