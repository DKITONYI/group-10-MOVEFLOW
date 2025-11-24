<?php


namespace App\Http\Controllers;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::with('workout')->latest()->paginate(12);
        return view('missions.index', compact('missions'));
    }

    public function create(){ return view('missions.create'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'summary'=>'nullable|string',
            'points'=>'required|integer|min:0',
            'workout_id'=>'nullable|exists:workouts,id',
            'starts_at'=>'nullable|date',
            'ends_at'=>'nullable|date|after_or_equal:starts_at',
            'is_team_mission'=>'boolean'
        ]);
        Mission::create($data);
        return redirect()->route('missions.index')->with('success','Mission created');
    }

    public function show(Mission $mission){ return view('missions.show',compact('mission')); }

    public function edit(Mission $mission){ return view('missions.edit',compact('mission')); }

    public function update(Request $request, Mission $mission)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'summary'=>'nullable|string',
            'points'=>'required|integer|min:0',
            'workout_id'=>'nullable|exists:workouts,id',
            'starts_at'=>'nullable|date',
            'ends_at'=>'nullable|date|after_or_equal:starts_at',
            'is_team_mission'=>'boolean'
        ]);
        $mission->update($data);
        return redirect()->route('missions.index')->with('success','Mission updated');
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();
        return back()->with('success','Deleted');
    }

    // complete mission: awards points
    public function complete(Request $request, Mission $mission)
    {
        $user = Auth::user();

        // check already completed
        if($user->missions()->where('mission_id',$mission->id)->wherePivot('status','completed')->exists()){
            return back()->with('info','You already completed this mission.');
        }

        // mark completed
        $user->missions()->attach($mission->id, ['status'=>'completed','completed_at'=>now()]);
        $user->increment('points', $mission->points);

        // if team mission, increment team points for user's team(s)
        foreach($user->teams as $team){
           $team->increment('points', $mission->points);
        }

        // unlock chapters if thresholds met
        foreach(\App\Models\Chapter::where('unlock_points','<=',$user->points)->get() as $chapter){
            if(!$user->chapters()->where('chapter_id',$chapter->id)->exists()){
                $user->chapters()->attach($chapter->id);
            }
        }

    return redirect()->route('leaderboard.index')->with('success','Mission completed! Points awarded.');
    }
}
