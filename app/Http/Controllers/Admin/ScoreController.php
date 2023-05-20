<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Match;
use App\Models\Player;
use App\Models\Team;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $scores = Score::all();
        return view('admin.scores.index', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $matches = Match::find($request->match_id);
        // $teams  = Team::where('id', $matches->team_1)
        //                 -> orwhere('id', $matches->team_2)
        //                 -> get();
        // $players = Player::where('team_id', $matches->team_1)
        //                    -> orwhere('team_id', $matches->team_2)
        //                    -> get();

         $matches = Match::findOrFail($request->match_id);
         $teams = Team::whereIn('id', [$matches->team_1, $matches->team_2])->get();
         $players = Player::where('team_id', $matches->team_1)->orWhere('team_id', $matches->team_2)->get();
        return view('admin.scores.create', compact('matches','teams','players'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'match_id' => ['required'],
            'batting_team_id' => ['required'],
            'strike_player_id' => ['required'],
            'non_strike_player_id' => ['required'],
            'over' => ['required'],
            'out_player_id' => ['required'],
            'wicket_taker_id' => ['required'],
            'noball' => ['required'],
            'wide' => ['required'], 
            'legby' => ['required'],
            'current_score' => ['required'],
            'user_id' => ['required'],
            
        ]);

        if (Score::create($request->all())) {
            return redirect(route('admin.scores.create'))->with(['success' => 'Score added successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scores = Score::all();
        return view('admin.scores.show', compact('scores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scores = Score::find($id);
        return view('admin.scores.edit', compact('scores'));
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
        $scores = Score::find($id);
        $scores->match_id = $request->match_id;
        $scores->batting_team_id = $request->batting_team_id;
        $scores->strike_player_id = $request->strike_player_id;
        $scores->non_strike_player_id = $request->strike_player_id;
        $scores->over = $request->over;
        $scores->out_player_id = $request->out_player_id;
        $scores->wicket_taker_id = $request->wicket_taker_id;
        $scores->noball = $request->noball;
        $scores->wide = $request->wide;
        $scores->legby = $request->legby;
        $scores->current_score = $request->current_score;
        $scores->user_id = $request->user_id;
       
        if ($scores->save()) {
            return redirect(route('admin.scores.edit', $scores->id))->with(['success' => 'Updated successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scores = Score::find($id);
        if ($scores->delete()) {
            return redirect(route('admin.scores.index', $scores->id))->with(['success' => 'Deleted successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
        }
    }
}