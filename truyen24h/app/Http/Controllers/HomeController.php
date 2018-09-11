<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Story;
use Truyen24h\Genre;
use \CyrildeWit\EloquentViewable\Support\Period;
use Illuminate\Support\Facades\View;
use Cocur\Slugify\Slugify;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['guest','search']]);
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
        $genres = Genre::take(20)->get();
        $updatedStories = Story::orderBy('updated_at', 'desc')->take(10)->get();

        // BXH
        // $tdStories = Story::get()->sortByDesc(function($story, $key) {
        //     return $story->getViews(Period::pastWeeks(1));
        // })->take(5);
        // $tmStories = Story::get()->sortByDesc(function($story, $key) {
        //     return $story->getViews(Period::pastMonths(1));
        // })->take(5);
        // $tyStories = Story::get()->sortByDesc(function($story, $key) {
        //     return $story->getViews(Period::pastYears(1));
        // })->take(5);

        return View::make('pages.index', compact('hotStories', 'stories', 'genres', 'updatedStories'));
    }

    /**
     * Show the application dashboard for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest(Request $request)
    {
        $hotStories = Story::orderByViewsCount()->take(9)->get();
        $stories = Story::where('status',1)->paginate(20);
        $genres = Genre::take(20)->get();
        $updatedStories = Story::orderBy('updated_at', 'desc')->take(10)->get();
    
        if(!auth()->guest())
        {
            return redirect()->route('home')->with(compact('hotStories', 'stories', 'genres', 'updatedStories'));
        }
        else return View::make('pages.index', compact('hotStories', 'stories', 'genres', 'updatedStories'));
    }

    public function search(Request $request)
    {
        $s = $request->s;
       
        $results = Story::search(str_slug($s))
            ->paginate(20);

        return view('pages.search', compact('results', 's'));
    }
}
