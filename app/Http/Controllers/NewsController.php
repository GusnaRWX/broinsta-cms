<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Support;
use App\Models\Testimonial;
use App\Models\Deposit;
use App\Models\Client;
use App\Models\Post;

class NewsController extends Controller
{
    //
    public function showDetail(Request $request, $slug){
        $kurses = Kurse::all();
        $supports = Support::all();
        $testimonials = Testimonial::all();
        $posts = Post::where('slug', $slug)->firstOrFail();
       // dd($posts);
        return view('content.news.news', ['kurses' => $kurses, 'supports' => $supports, 'testimonials' => $testimonials, 'posts' => $posts]);
    }
}
