<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Chapter;
use Truyen24h\Story;

class T24Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editChapter($slug)
    {
        $chapter = Chapter::findBySlugOrFail($slug);

        if(auth()->user()->id != $chapter->user_id && auth()->user()->admin_level == 0)
        {
            return redirect()->route('view_chapter', $slug)->with('error', 'Bạn không có đủ quyền để sử dụng chức năng này.');
        }

        return view('pages.inline.edit_chapter', compact('chapter'));
    }

    public function updateChapter(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:191|min:5',
            'content' => 'required|min:100'
        ]);

        $chapter = Chapter::findOrFail($id);
        $chapter->name = $request->name;
        $chapter->content = $request->content;
        $chapter->user_id = auth()->user()->id;

        $chapter->save();
        return redirect()->route('view_chapter',$chapter->getRouteKeyName())->with('success','Đã cập nhật chương truyện thành công!');
    }

    public function followStory($slug)
    {
        $story = Story::findBySlugOrFail($slug);
        if(!auth()->user()->followStories->contains($story->id))
        {
            auth()->user()->followStories()->attach($story->id);
            return back()->with('success', 'Bạn đã theo dõi truyện này');
        }
        else {
            auth()->user()->followStories()->detach($story->id);
            return back()->with('success', 'Bạn đã hủy theo dõi truyện này');
        }

    }
}
