<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function expertise()
    {
        return view('expertise');
    }

    public function cases()
    {
        return view('cases');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function team()
    {
        return view('team');
    }

    public function partnerships()
    {
        return view('partnerships');
    }

    public function contact()
    {
        return view('contact');
    }

    public function hcm()
    {
        return view('expertise.hcm');
    }

    public function industrialrel()
    {
        return view('expertise.industrialrel');
    }

    public function headhunting()
    {
        return view('expertise.headhunting');
    }
}
