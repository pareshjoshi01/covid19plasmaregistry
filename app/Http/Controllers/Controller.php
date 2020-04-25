<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Crypt;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send_mobile_authentication_msg($mobile_number)
    {
        //sms gatway code
        //$otp_code = "123456";

        $otp_code = mt_rand(100000, 999999);
        $message = "Your Covidplasma verification code is ".$otp_code.". Please do not share it with anyone.";

        $sid    = env( 'TWILIO_ID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );
        $res = $client->messages->create($mobile_number,['from' => env( 'TWILIO_FROM' ), 'body' => $message]);

        $arr_data = array("status" => true, "otp_code" => $otp_code);
        return $arr_data;
    }

    public function maskPhoneNumber($number){
        $mask_number =  str_repeat("*", strlen($number)-4) . substr($number, -4);
        return $mask_number;
    }

    public function encryptString($text=""){
        if($text)
        {
            $text =  Crypt::encryptString($text);
        }
        return $text;
    }

    public function decryptString($text=""){
        if($text)
        {
          $text =  Crypt::decryptString($text);
        }
        return $text;
    }

}
