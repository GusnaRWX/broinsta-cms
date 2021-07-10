<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;

class PembukaanAkunController extends Controller
{
    public function getIndex(){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        return view('content.pembukaan-akun', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials]);
    }

}
