<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Match;


class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        $latestMatches = Match::orderBy('created_at', 'desc')->take(4)->get(['result']);
    
        return view('frontend.team', compact('teams', 'latestMatches'));
    }
}