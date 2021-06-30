<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;

class IndexController extends Controller
{
    //
    public function getIndex(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.konten', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }

    public function store(Request $request){
        $deposit = new Deposit;
        $deposit->account_number = $request->get('account_number');
        $deposit->deposit = $request->get('deposit');
        $deposit->transfer = $request->get('transfer');
        $deposit->email = $request->get('email');
        $deposit->phone = $request->get('phone');
        $deposit->bank_transfer = $request->get('bank_transfer');
        $deposit->bank = $request->get('bank');
        $deposit->no_rek = $request->get('no_rek');
        $deposit->name_rek = $request->get('name_rek');

        if($request->file('file')){
            $image_path = $request->file('file')->store('assets/deposit', 'public');
        }
        $deposit->file = $image_path;
        $deposit->save();

        return redirect()->view('content.konten');

    }

    public function getValidasi(Request $request)
    {
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();

        $login = $request->get('no_akun');
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
            return view('content.konten-success', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
        }else{
            return redirect()->back()->with('errors', 'yah ! akun anda tidak ada di partner kami');
        }
        curl_close($ch);
        //$new_result = json_decode($result, true);
        //echo $result;
        //echo $result;
        //No acc : 50751202
        //Paswd : nosade12
    }

    public function getAccount(Request $request){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();

        $login = $request->get('no_akun');
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
        dd($result);
        curl_close($ch);
    }
}
