<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Team;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();
        $latestMatches = Match::orderBy('created_at', 'desc')->take(4)->get(['result']);
        
        return view('frontend.schedule', compact('matches', 'latestMatches'));
    }


}