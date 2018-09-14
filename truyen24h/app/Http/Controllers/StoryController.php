<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Story;
use Truyen24h\Chapter;
use Truyen24h\Genre;

class StoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminauth', ['except' => ['show','index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::all();
        return view('admin.story.list')->with('stories', $stories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genres::all();
        return view('admin.story.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:191|min:10|unique:stories',
            'details' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:128',
            'genres' => 'required|exists:genres,id',
            // 'image' => 'required|mimes:jpg,png,bmp,jpeg|between:1,7000',
        ]);

        $story = new Story;
        $story->title = $request->title;
        $story->details = $request->details;
        $story->user_id = auth()->user()->id;
        $story->author = $request->author;
 
        if($story->save()) {
            $story->genres()->attach($request->genres);
        }
        return redirect()->route('admin.story.index')->with('success','Truyện mới đã được đăng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $story = Story::findBySlugOrFail($slug);
        // $story->view_count += 1;
        // $story->save();
        $story->addViewWithExpiryDate(\Carbon\Carbon::now()->addHours(1));

        $chapters = $story->chapters()->orderBy('number','asc')->get();
        
        return view('pages.story', compact('story', 'chapters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::findOrFail($id);
        $genres = Genre::all();
        return view('admin.story.edit', compact('story', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:191|min:10',
            'details' => 'required|min:3|max:1024',
            'author' => 'required|min:3|max:128',
            'genres' => 'required|exists:genres,id',
        ]);

        $story = Story::findOrFail($id);
        $story->title = $request->title;
        $story->details = $request->details;
        // $story->user_id = auth()->user()->id;
        $story->author = $request->author;
        $story->image = $request->image;

    
        

        
        // if ($request->hasFile('image')) {
        //     //get name image
        //     $filename = Carbon\Carbon::now();
        //     $story->image = $filename;
        //     //upload image
        //     \Cloudder::upload($filename, $request->file('image')->getRealPath());
        // }
        if($story->save()) {
            $story->genres()->detach();
            $story->genres()->attach($request->genres);
        }
        return redirect()->route('admin.story.index')->with('success','Truyện đã được sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}