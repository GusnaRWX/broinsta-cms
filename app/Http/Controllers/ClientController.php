<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;

class ClientController extends Controller
{
    public function Update (Request $request, $id){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();

        $members = Client::findOrFail($id);
        $members->email = $request->get('email');
        $members->phone = $request->get('phone');
        $members->withdraw = $request->get('withdraw');
        $members->no_rek = $request->get('no_rek');
        $members->pemilik_rek = $request->get('pemilik_rek');
        $members->rebate = $request->get('rebate');
        $members->rebate_rek = $request->get('rebate_rek');
        $members->pemilik_rek_rebate = $request->get('pemilik_rek_rebate');
        $members->ktp_penerima = $request->get('ktp_penerima');
        $members->save();

        return view('content.validation-success', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);

    }
}
