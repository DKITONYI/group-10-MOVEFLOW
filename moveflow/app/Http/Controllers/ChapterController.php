<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = \App\Models\Chapter::latest()->paginate(12);
        return view('chapters.index', compact('chapters'));
    }

    public function create(){ return view('chapters.create'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'nullable|string',
            'unlock_points'=>'required|integer|min:0'
        ]);
        \App\Models\Chapter::create($data);
        return redirect()->route('chapters.index')->with('success','Chapter created');
    }

    public function show(\App\Models\Chapter $chapter){ return view('chapters.show',compact('chapter')); }

    public function edit(\App\Models\Chapter $chapter){ return view('chapters.edit',compact('chapter')); }

    public function update(Request $request, \App\Models\Chapter $chapter)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'nullable|string',
            'unlock_points'=>'required|integer|min:0'
        ]);
        $chapter->update($data);
        return redirect()->route('chapters.index')->with('success','Chapter updated');
    }

    public function destroy(\App\Models\Chapter $chapter)
    {
        $chapter->delete();
        return back()->with('success','Deleted');
    }

    // unlock chapter for user if points threshold met
    public function unlock(Request $request, \App\Models\Chapter $chapter)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        if($user->points >= $chapter->unlock_points){
            if(!$user->chapters()->where('chapter_id',$chapter->id)->exists()){
                $user->chapters()->attach($chapter->id);
                return back()->with('success','Chapter unlocked!');
            }
            return back()->with('info','Chapter already unlocked.');
        }
        return back()->with('error','Not enough points to unlock this chapter.');
    }
}
