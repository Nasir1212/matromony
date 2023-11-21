<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register;
use App\Models\primary_info;
use App\Models\iom_info;
use App\Models\general_info;
use App\Models\address;
use App\Models\education_info;
use App\Models\family_info;
use App\Models\personal_info;
use App\Models\marriage_info;
use App\Models\other_info;
use App\Models\spouse_expect;
use App\Models\ask_authorities;
use App\Models\communication;
use App\Models\session_Id;
use App\Models\visitor;
use App\Models\favorite;
class NoAuth extends Controller
{
     public function save_favorite(Request $req){
        if($req->session()->get('is_login') != true ){
         return   json_encode(['condition'=>false,'message'=>'অনুগ্রহে করে আপনি লগইন করুন ']);
        }else if ($req->session()->get('is_login') == true){
            $auth =  Register::where(['mail'=>session()->get('email')])->get()[0]; 
           if(favorite::where(['favoriter'=>$auth->id])->where(['favorited'=>$req->id])->count() == 0){
            $result =  favorite::insert(['favoriter'=>$auth->id,'favorited'=>$req->id]);
            if( $result){
            return   json_encode(['condition'=>true,'message'=>'পছন্দের তালিকায় যোগ করা হয়েছে ।']);
            }
           }else{
           return json_encode(['condition'=>false,'message'=>'আপনার পছন্দের তালিকায় রয়েছে ।']);
           }
        }
       
      }

      public function package_connection_buy(Request $req){

         if(\session()->get('is_login') == true ){
           
            if($req->connection == 3){
            \Session()->put('money', 270);
            \Session()->put('connection', 3);
            }else if($req->connection == 5){
            \Session()->put('money', 430);
            \Session()->put('connection', 5);
            }
            else if($req->connection == 10){
            \Session()->put('money', 800);
            \Session()->put('connection', 10);
            }
          
            
        //  return redirect ("/package_connection_callback_url?paymentID=TR0011ON1565154754797&status=success");
          return   $this->create_payment("package_connection_callback_url");
          }else{
          return redirect ("/login")->with('message','অনুগ্রহ করে আপনি লগইন করুন ');
       }

      }
      

     

           public function bkash_create($id){

            if(\session()->get('is_login') == true ){
              \Session()->put('purchased_id', $id);
              \Session()->put('money', 100);
              
           // return redirect ("/success_callback_url?paymentID=TR0011ON1565154754797&status=success");
            return   $this->create_payment("success_callback_url");
            }else{
            return redirect ("/login")->with('message','অনুগ্রহ করে আপনি লগইন করুন ');
         }
        }

         public function create_payment($c_url){

            $response = json_decode($this->token_grant());
            // return $response->id_token;
            // $auth = null;
            
            $callbackURL="https://ordhangini.com/$c_url";
            
            $requestbody = array(
                'mode' => '0011',
                'amount' => \Session()->get('money'),
                'currency' => 'BDT',
                'intent' => 'sale',
                'payerReference' => '01',
                'merchantInvoiceNumber' => uniqid(),
                'callbackURL' => $callbackURL
            );
            $url = curl_init('https://tokenized.pay.bka.sh/v1.2.0-beta/tokenized/checkout/create');  
            $requestbodyJson = json_encode($requestbody);
            
            $header = array(
            'Content-Type:application/json',
            'Authorization:' . $response->id_token,
            'X-APP-Key:ye5xaQtmhyRvDM0rjDE1LInftc'
                );

            curl_setopt($url, CURLOPT_HTTPHEADER, $header);
            curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
            curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
            $resultdata = curl_exec($url);
            curl_close($url);
            echo json_decode($resultdata)->bkashURL;
            return redirect(json_decode($resultdata)->bkashURL);

           
         }

         public function token_grant(){
            $request_data = array(
               'app_key'=>'ye5xaQtmhyRvDM0rjDE1LInftc',
               'app_secret'=>'25mMaTSUzuHSndUPnCUrkKvWmT5SBX7weFeHB3rXiU5niQedAtQ0'
               );	
        $url = curl_init('https://tokenized.pay.bka.sh/v1.2.0-beta/tokenized/checkout/token/grant');
        $request_data_json=json_encode($request_data);
        $header = array(
              'Content-Type:application/json',
              'username:01568706310',			
              'password:v5oXk*iP1!.'
              );				
        curl_setopt($url,CURLOPT_HTTPHEADER, $header);
        curl_setopt($url,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url,CURLOPT_POSTFIELDS, $request_data_json);
        curl_setopt($url,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        
        $result_data =  curl_exec($url);
        curl_close($url);
        return  $result_data;
      //  return $response = json_decode($result_data, true);
         }

         public function login_google(){

           return $this->GetAccessToken("518234325458-hpos79g4gv4e3mu8guplhg227cq0ltnr.apps.googleusercontent.com", "http://127.0.0.1:8080/login_google_redirect", "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", "mail");

         }

         public function GetAccessToken($client_id, $redirect_uri, $client_secret, $code) {	
            $url = 'https://accounts.google.com/o/oauth2/v2/auth';			
         
            $curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code';
            $ch = curl_init();		
            curl_setopt($ch, CURLOPT_URL, $url);		
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
            curl_setopt($ch, CURLOPT_POST, 1);		
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);	
            $data = json_decode(curl_exec($ch), true);
            $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);		
            if($http_code != 200) {
               echo 'Error : Failed to receieve access token';
            }
            return $data;
         }

       
}
