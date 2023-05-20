<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Score;

class HomeController extends Controller
{
    public function home()
	{
		
        $matches = Match::all();
        $latest_match = Match::orderby("schedule","desc")->first();
        
        $team_1_total_score = Score::where("batting_team_id", $latest_match->team_1)->sum('current_score');
        $team_2_total_score = Score::where("batting_team_id", $latest_match->team_2)->sum('current_score');
        
        $team_1_wicket = Score::where("batting_team_id", $latest_match->team_1)->count('out_player_id');
        $team_2_wicket = Score::where("batting_team_id", $latest_match->team_2)->count('out_player_id');

        $team_1_over_object = Score::where("batting_team_id", $latest_match->team_1)->orderby("over","desc")->first();
        if(!empty($team_1_over_object)){
            $team_1_over = $team_1_over_object->over;
        }
        
        
        $team_2_over_object = Score::where("batting_team_id", $latest_match->team_2)->orderby("over","desc")->first();
        if(!empty($team_2_over_object)){
            $team_2_over = $team_2_over_object->over;
        }

        return view('home', compact('matches',
         'latest_match', 
         'team_1_total_score', 
         'team_2_total_score',
         'team_1_wicket',
         'team_2_wicket',
         'team_1_over',
         'team_2_over'
    ));
		 
	}	
}
