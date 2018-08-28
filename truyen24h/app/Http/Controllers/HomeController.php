<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Story;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['guest','index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotStories = Story::where('status',1)->orderBy('view_count', 'desc')->take(9)->get();
        $stories = Story::where('status',1)->paginate(20);

        return view('pages.index')->with('top_hot_stories', $hotStories)->with('stories',$stories);
    }

    /**
     * Show the application dashboard for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest()
    {
        $hotStories = Story::where('status',1)->orderBy('view_count', 'desc')->take(9)->get();
        $stories = Story::where('status',1)->paginate(20);
        if(!auth()->guest())
        {
            return redirect()->route('home')->with('top_hot_stories', $hotStories)->with('stories',$stories);
        }
        else return view('pages.index')->with('top_hot_stories', $hotStories)->with('stories',$stories);
    }
}
