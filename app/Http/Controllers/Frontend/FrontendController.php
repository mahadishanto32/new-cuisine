<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Home Page
    public function index(){
        return view('frontend.index');
    }

    // About Page
    public function about(){
        return view('frontend.about');
    }

    // Contact Page
    public function contact(){
        return view('frontend.contact');
    }

    // Menu Page
    public function menu(){
        return view('frontend.menu');
    }

    // News Page
    public function news(){
        return view('frontend.news');
    }

    // News Details Page
    public function news_details(){
        return view('frontend.news-detail');
    }
}
