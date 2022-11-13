<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function servicePage(){
        //
        return view('pages.services');
    }

    public function dashboardPage(){
        //
        return view('pages.dashboard');
    }

    public function aboutPage(){
        //
        return view('pages.about');
    }

    public function contactPage(){
        //
        return view('pages.contact');
    }
}
