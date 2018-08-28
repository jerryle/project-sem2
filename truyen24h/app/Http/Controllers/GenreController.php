<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Genre;

class GenreController extends Controller
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
        $genres = Genre::all();
        return view('admin.genre.list')->with('genres', $genres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre.create');
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
            'name' => 'required|max:50|min:3|unique:genres',
            'description' => 'required|min:3|max:191',
        ]);

        $genre = new Genre;
        $genre->name = $request->input('name');
        $genre->description = $request->input('description');

        $genre->save();
        return redirect()->route('admin.genre.index')->with('success','Thể loại mới đã được tạo thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectedGenre = Genre::findOrFail($id);
        return view('admin.genre.edit')->with('genre', $selectedGenre);
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
            'name' => 'required|max:50|min:3',
            'description' => 'required|min:3|max:191',
        ]);

        $genre = Genre::findOrFail($id);

        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();
        return redirect()->route('admin.genre.index')->with('success','Đã sửa thể loại thành công!');

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
