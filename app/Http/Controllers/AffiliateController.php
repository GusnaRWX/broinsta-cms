<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;

class AffiliateController extends Controller
{
    //
    public function showAffiliate(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        $flashes = Post::all();
        return view('content.affiliate', ['kurses' => $kurses, 'flashes' => $flashes,'supports' => $supports, 'testimonials' => $testimonials]);
    }

    public function checkAffiliate(Request $request){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        $flashes = Post::all();

        $login = $request->get('login');
        $password = $request->get('password');
        $data = array("Login" => $login, "Password" => $password);
        $data_string = json_encode($data);

        $apiAuthenticationMethod = 'api/Authentication/RequestPartnerApiToken';
        $ch = curl_init('http://client-api.instaforex.com/'.$apiAuthenticationMethod);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));

        $token = curl_exec($ch);
        curl_close($ch);

        $apiMethodUrl = 'partner/CheckReferral/50751202/'; //Must be Changed
        $parameters = $login;
        $ch = curl_init('http://client-api.instaforex.com/'.$apiMethodUrl.$parameters); #possibly Must be Changed part with [$Login]. Depends on the method param
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('passkey: '.$token));
        $result = curl_exec($ch);
        if($result == "true"){
            return view('content.affiliate-success', ['kurses' => $kurses, 'flashes' => $flashes, 'supports' => $supports, 'testimonials' => $testimonials]);
        }else{
            return redirect()->back()->with('errors', 'yah ! akun anda tidak terdaftar di partner kami');
        }
        dd($result);
        curl_close($ch);
    }
}
