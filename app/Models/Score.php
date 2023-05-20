<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['match_id', 'batting_team_id', 'strike_player_id', 'non_strike_player_id', 
                            'over', 'bowler_id', 'out_player_id', 'wicket_taker_id', 'bowling_speed',
                            'noball', 'wide', 'legby', 'current_score', 'user_id'];

    public function strike_player_id_object()
    {
        return $this->belongsTo(Player::class, 'strike_player_id');
    }
    public function non_strike_player_id_object()
    {
        return $this->belongsTo(Player::class, 'non_strike_player_id');
    }   
    public function bowler_id_object()
    {
        return $this->belongsTo(Player::class, 'bowler_id');
    }   
    public function out_player_id_object()
    {
        return $this->belongsTo(Player::class, 'out_player_id');
    }
    public function wicket_taker_id_object()
    {
        return $this->belongsTo(Player::class, 'wicket_taker_id');
    }
}