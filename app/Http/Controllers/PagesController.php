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

    public function vehicleVitals(){
        //
        return view('pages.vitals');
    }

    public function settings(){
        //
        return view('pages.settings');
    }
    public function mileage(){
        //
        return view('pages.mileage');
    }
    public function config(){
        //
        return view('pages.config');
    }

    public function overview(){
        //
        return view('pages.overview');
    }
}
