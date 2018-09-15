<?php

namespace Truyen24h\Http\Controllers;

use Illuminate\Http\Request;
use Truyen24h\Chapter;
use Truyen24h\Story;
use Truyen24h\Genre;
use Truyen24h\Notifications\FollowNotification;

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
            auth()->user()->notify(new FollowNotification('Bạn đã theo dõi '.$story->title));

            return back()->with('success', 'Bạn đã theo dõi truyện này');
        }
        else {
            auth()->user()->followStories()->detach($story->id);
            auth()->user()->notify(new FollowNotification('Bạn đã hủy theo dõi '.$story->title));
            return back()->with('success', 'Bạn đã hủy theo dõi truyện này');
        }

    }

    public function markRead($id)
    {
        if(auth()->user()->notifications->contains($id))
        {
            auth()->user()->notifications->find($id)->markAsRead();
            return back()->with('success', 'Đã xem');
        }
        return back()->with('error', 'Lỗi');
    }

    public function createStory()
    {
        $genres = Genre::all();
        return view('layouts.ucp.story.create', compact('genres'));
    }

    public function storeStory(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:191|min:10|unique:stories',
            'details' => 'required|min:3|max:2048',
            'author' => 'required|min:3|max:128',
            'genres' => 'required|exists:genres,id',
            'image' => 'required',
        ]);

        $story = new Story;
        $story->title = $request->title;
        $story->details = $request->details;
        $story->user_id = auth()->user()->id;
        $story->author = $request->author;
        $story->image = $request->image;
 
        if($story->save()) {
            $story->genres()->attach($request->genres);
        }
        return redirect()->route('view_story',$story->getRouteKeyName())->with('success','Truyện mới đã được đăng thành công!');
    }

    public function updateStory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:191|min:10',
            'details' => 'required|min:3|max:2048',
            'author' => 'required|min:3|max:128',
            'genres' => 'required|exists:genres,id',
            'image' => 'required',
        ]);

        $story = Story::findOrFail($id);
        $story->title = $request->title;
        $story->details = $request->details;
        // $story->user_id = auth()->user()->id;
        $story->author = $request->author;
        $story->image = $request->image;

        if($story->save()) {
            $story->genres()->detach();
            $story->genres()->attach($request->genres);
        }
        return redirect()->route('view_story',$story->getRouteKeyName())->with('success','Truyện đã được sửa thành công!');
    }

    public function editStory($slug)
    {
        $story = Story::findBySlugOrFail($slug);
        $genres = Genre::all();
        return view('layouts.ucp.story.edit', compact('story', 'genres'));
    }

    public function listStory()
    {
        $stories = auth()->user()->uploadedStories()->get();
        return view('layouts.ucp.story.list', compact('stories'));
    }

    public function listFollow()
    {
        $stories = auth()->user()->followStories()->get();
        return view('layouts.ucp.story.follow_list', compact('stories'));
    }
}
