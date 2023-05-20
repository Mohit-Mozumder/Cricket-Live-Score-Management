<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'born', 'birthplace', 'batting_style', 'bowling_style', 
    'icc_ranking_batting', 'icc_ranking_bowling', 'total_match', 'innings', 'total_runs', 
    'batting_average', '_50s', '_100s', 'career_best_batting','wickets', 
    '_5_wickets', 'economy', 'career_best_bowling', 'photo', 'career', 
    'team_id', 'slug'];

    public function team_id_object()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
    
}
