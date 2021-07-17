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
        $flashes = Post::all();
        return view('content.pembukaan-akun', ['kurses' => $kurses, 'flashes' => $flashes,'supports' => $supports, 'testimonials' => $testimonials]);
    }

}
