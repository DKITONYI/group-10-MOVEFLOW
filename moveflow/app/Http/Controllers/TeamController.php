<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('users')->latest()->paginate(12);
        return view('teams.index', compact('teams'));
    }

    public function create(){ return view('teams.create'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'points'=>'required|integer|min:0'
        ]);
        Team::create($data);
        return redirect()->route('teams.index')->with('success','Team created');
    }

    public function show(Team $team){ return view('teams.show',compact('team')); }

    public function edit(Team $team){ return view('teams.edit',compact('team')); }

    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'points'=>'required|integer|min:0'
        ]);
        $team->update($data);
        return redirect()->route('teams.index')->with('success','Team updated');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return back()->with('success','Deleted');
    }

    // add user to team
    public function addUser(Request $request, Team $team)
    {
        $userName = $request->input('user_name');
        $user = \App\Models\User::where('name', $userName)->first();
        if(!$user){
            return back()->with('error','User not found.');
        }
        if(!$team->users()->where('user_id',$user->id)->exists()){
            $team->users()->attach($user->id);
            return back()->with('success','User added to team.');
        }
        return back()->with('info','User is already in the team.');
    }
}
