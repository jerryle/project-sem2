<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Chapter;

class ChapterController extends Controller
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
        $chapters = Chapter::all();
        return view('admin.chapter.list')->with('chapters', $chapters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chapter.create');
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
            'name' => 'required|max:191|min:10',
            'content' => 'required|min:100',
            'story_id' => 'required|integer|exists:stories,id',
            'number' => 'required|integer'
            // 'image' => 'required|mimes:jpg,png,bmp,jpeg|between:1,7000',
        ]);

        $chapter = new Chapter;
        $chapter->name = $request->name;
        $chapter->content = $request->content;
        $chapter->number = $request->number;
        $chapter->user_id = auth()->user()->id;
        $chapter->story_id = $request->story_id;
        // if ($request->hasFile('image')) {
        //     //get name image
        //     $filename = Carbon\Carbon::now();
        //     $story->image = $filename;
        //     //upload image
        //     \Cloudder::upload($filename, $request->file('image')->getRealPath());
        // }
        $chapter->save();
        return redirect()->route('admin.chapter.index')->with('success','Chương mới đã được đăng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        
        return view('pages.chapter')->with('chapter', $chapter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapter = Chapter::findOrFail($id);
        return view('admin.chapter.edit')->with('chapter', $chapter);
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
            'name' => 'required|max:191|min:10',
            'content' => 'required|min:100',
            'story_id' => 'required|exists:stories,id',
            'number' => 'required|integer'
            // 'image' => 'required|mimes:jpg,png,bmp,jpeg|between:1,7000',
        ]);

        $chapter = Chapter::findOrFail($id);
        $chapter->name = $request->name;
        $chapter->content = $request->content;
        $chapter->user_id = auth()->user()->id;
        // if ($request->hasFile('image')) {
        //     //get name image
        //     $filename = Carbon\Carbon::now();
        //     $story->image = $filename;
        //     //upload image
        //     \Cloudder::upload($filename, $request->file('image')->getRealPath());
        // }
        $chapter->save();
        return redirect()->route('admin.chapter.index')->with('success','Chương mới đã được đăng thành công!');
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
