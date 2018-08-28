<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Story;
use \CyrildeWit\EloquentViewable\Support\Period;

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
        $hotStories = Story::orderByViewsCount()->take(9)->get();
        $stories = Story::where('status',1)->paginate(20);

        // $hot7dStories
        $tdStories = Story::get()->sortByDesc(function($story, $key) {
            return $story->getViews(Period::pastWeeks(1));
        })->take(5);
        $tmStories = Story::get()->sortByDesc(function($story, $key) {
            return $story->getViews(Period::pastMonths(1));
        })->take(5);
        $tyStories = Story::get()->sortByDesc(function($story, $key) {
            return $story->getViews(Period::pastYears(1));
        })->take(5);

        return view('pages.index')
        ->with('top_hot_stories', $hotStories)
        ->with('stories',$stories)
        ->with('top_d_stories', $tdStories)
        ->with('top_m_stories', $tmStories)
        ->with('top_y_stories', $tyStories);
    }

    /**
     * Show the application dashboard for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest()
    {
        $hotStories = Story::orderByViewsCount()->take(9)->get();
        $stories = Story::where('status',1)->paginate(20);
        if(!auth()->guest())
        {
            return redirect()->route('home')->with('top_hot_stories', $hotStories)->with('stories',$stories);
        }
        else return view('pages.index')->with('top_hot_stories', $hotStories)->with('stories',$stories);
    }
}
