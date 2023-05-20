<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['team_1', 'team_2', 'schedule', 'description', 'result', 'venue' ];
    
    public function team_1_object()
    {
        return $this->belongsTo(Team::class, 'team_1');
    }

    public function team_2_object()
    {
        return $this->belongsTo(Team::class, 'team_2');
    }
  
}
