<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Team;
use App\Models\News;
use App\Models\Player;


class HomeController extends Controller
{
    public function home()
    {
        $latestMatches = Match::orderBy('created_at', 'desc')->take(4)->get(['result']);
        $teamIds = $latestMatches->pluck('team_1')->concat($latestMatches->pluck('team_2'))->unique();
        $teams = Team::whereIn('id', $teamIds)->get();
        $match = Match::all();
        $news = News::all();
        $players = Player::all();
       
        return view('home', compact('latestMatches', 'teams', 'players', 'match', 'news'));
    }
}    