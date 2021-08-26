<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }
    
    public function premiereAAd()
    {
        return view('admin.premiereAAd');
    }
    public function premiere()
    {
        return view('layouts.premiere');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
   
}
