<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Match;
use App\Models\Player;
use App\Models\Team;
use Auth;

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
        $match = Match::findOrFail($request->match_id);
        $teams = Team::whereIn('id', [$match->team_1, $match->team_2])->get();
        $players = Player::where('team_id', $match->team_1)->orWhere('team_id', $match->team_2)->get();
        
        $getLastRow = Score::where('match_id', $match->id)->latest()->first();
        $team1Batting = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_1)
            ->latest('over')
            ->first();
    
        $team2Batting = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_2)
            ->latest('over')
            ->first();
    
        $team1Overs = ($team1Batting) ? $this->calculateNextOver($team1Batting->over, $team1Batting->wide, $team1Batting->no_ball) : '0.1';
        $team2Overs = ($team2Batting) ? $this->calculateNextOver($team2Batting->over, $team2Batting->wide, $team2Batting->no_ball) : '0.1';
    
        $team1TotalScore = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_1)
            ->sum('current_score');
    
        $team2TotalScore = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_2)
            ->sum('current_score');
    
        $team1Wickets = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_1)
            ->whereNotNull('out_player_id')
            ->count();
    
        $team2Wickets = Score::where('match_id', $match->id)
            ->where('batting_team_id', $match->team_2)
            ->whereNotNull('out_player_id')
            ->count();

            $team1Name = $teams->firstWhere('id', $match->team_1)->name;
            $team2Name = $teams->firstWhere('id', $match->team_2)->name;
            

            $battingTeamId = $getLastRow ? $getLastRow->batting_team_id : null;
            $strikePlayerId = $getLastRow ? $getLastRow->strike_player_id : null;
            $nonStrikePlayerId = $getLastRow ? $getLastRow->non_strike_player_id : null;
            $bowlerId = $getLastRow ? $getLastRow->bowler_id : null;

            $result = [
                'team_1' => [
                    'name' => $team1Name,
                    'total_score' => $team1TotalScore,
                    'wickets' => $team1Wickets,
                    'overs' => $team1Overs,
                ],
                'team_2' => [
                    'name' => $team2Name,
                    'total_score' => $team2TotalScore,
                    'wickets' => $team2Wickets,
                    'overs' => $team2Overs,
                ],
            ];
            
            $match->result = json_encode($result);
            $match->save();
            
    
        return view('admin.scores.create', compact(
            'match',
            'teams',
            'players',
            'team1Overs',
            'team2Overs',
            'team1TotalScore',
            'team2TotalScore',
            'team1Wickets',
            'team2Wickets',
            'getLastRow',
            'battingTeamId',
            'strikePlayerId',
            'nonStrikePlayerId',
            'bowlerId'
        ));
    }
    
    
    
    
    
    private function calculateNextOver($currentOver, $isWide, $isNoBall)
    {
        if ($isWide || $isNoBall) {
            // Return the same over without incrementing if it's a wide or no ball
            return $currentOver;
        }
    
        // Split the current over into balls and increment accordingly
        [$over, $ball] = explode('.', $currentOver);
        if ($ball == 6) {
            $over++;
            $ball = 1;
        } else {
            $ball++;
        }
    
        return $over . '.' . $ball;
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
            'current_score' => ['required']
        ]);

        $scoreData = $request->all();
        $scoreData['user_id'] = Auth::id(); // Get the ID of the currently authenticated user
    
        if (Score::create($scoreData)) {
            return redirect(route('admin.scores.create', ['match_id' => $request->match_id]))->with(['success' => 'Score added successfully']);
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