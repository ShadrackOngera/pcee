<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function featuresPage(){
        //
        return view('pages.features');
    }

    public function dashboardPage(){
        //
        return view('pages.dashboard');
    }

    public function aboutPage(){
        //
        return view('pages.about');
    }
}
