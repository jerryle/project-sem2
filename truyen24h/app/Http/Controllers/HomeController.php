<?php

namespace Truyen24h\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->adminLevel == 0)
        {
            return view('layouts.home.dashboard');
        }
        else {
            return view('layouts.admin.dashboard');
        }
    }
}
