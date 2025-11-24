<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = \App\Models\Workout::latest()->paginate(12);
        return view('workouts.index', compact('workouts'));
    }

    public function create(){ return view('workouts.create'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'duration'=>'required|integer|min:1',
            'difficulty'=>'required|in:easy,medium,hard',
            'equipment'=>'nullable|array'
        ]);
        $data['equipment'] = $data['equipment'] ?? [];
        \App\Models\Workout::create($data);
        return redirect()->route('workouts.index')->with('success','Workout created');
    }

    public function show(Workout $workout)
    {
        $workout->load('exercises');

        return view('workouts.show', compact('workout'));
    }

    public function edit(\App\Models\Workout $workout){ return view('workouts.edit',compact('workout')); }

    public function update(Request $request, \App\Models\Workout $workout)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'duration'=>'required|integer|min:1',
            'difficulty'=>'required|in:easy,medium,hard',
            'equipment'=>'nullable|array'
        ]);
        $data['equipment'] = $data['equipment'] ?? [];
        $workout->update($data);
        return redirect()->route('workouts.index')->with('success','Workout updated');
    }

    public function destroy(\App\Models\Workout $workout)
    {
        $workout->delete();
        return back()->with('success','Deleted');
    }

    // app/Http/Controllers/Api/WorkoutController.php
    public function roulette(Request $req)
    {
        $duration = $req->input('duration', 10);
        $hasEquipment = $req->input('equipment', null);

        $query = Workout::where('duration','<=',$duration+5);
        if($hasEquipment){
            $query->whereJsonContains('equipment', $hasEquipment);
        }
        $workout = $query->inRandomOrder()->first();
        return response()->json($workout);
    }

}
