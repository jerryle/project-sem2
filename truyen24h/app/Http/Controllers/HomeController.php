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
        $this->middleware('auth', ['except' => 'guest']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the application dashboard for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest()
    {
        if(!auth()->guest())
        {
            return redirect()->route('home');
        }
        else return view('pages.index');
    }
}
