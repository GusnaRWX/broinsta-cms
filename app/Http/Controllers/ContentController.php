<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;

class ContentController extends Controller
{
    //
    public function getInstaforex(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.instaforex', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }

    public function getValidasiAkun(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.validasi-akun', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }
    public function getVerifikasi(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.verifikasi-akun', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }
    public function getWithdraw(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.withdrawal', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }
    public function getDisclaimer(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.disclaimer', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }
}
