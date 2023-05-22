<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Match;

class NewsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
    
        $latestMatches = Match::orderBy('created_at', 'desc')->take(4)->get(['result']);
    
        return view('frontend.news', compact('news', 'latestMatches'));
    }

    
    }
   
