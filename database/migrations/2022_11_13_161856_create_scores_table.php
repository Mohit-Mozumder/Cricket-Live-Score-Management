<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('match_id');
            $table->integer('batting_team_id');
            $table->integer('strike_player_id');
            $table->integer('non_strike_player_id');
            $table->float('over');
            $table->integer('bowler_id');
            $table->integer('out_player_id')->nullable();
            $table->integer('wicket_taker_id')->nullable();
            $table->float('bowling_speed')->nullable();
            $table->integer('noball')->nullable();
            $table->integer('wide')->nullable();
            $table->integer('legby')->nullable();
            $table->integer('current_score');
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
