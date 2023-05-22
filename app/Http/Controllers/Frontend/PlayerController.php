<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use App\Models\Match;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $latestMatches = Match::orderBy('created_at', 'desc')->take(4)->get(['result']);

        return view('frontend.player.index', compact('players', 'latestMatches'));
    }
    public function show($id)
    {
        $players = Player::all();
        return view('frontend.player.show', compact('players'));
    }

}