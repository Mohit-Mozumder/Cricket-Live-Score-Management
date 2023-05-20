<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('born');
            $table->string('birthplace');
            $table->string('batting_style');
            $table->string('bowling_style');
            $table->integer('icc_ranking_batting');
            $table->integer('icc_ranking_bowling');
            $table->integer('total_match');
            $table->integer('innings');
            $table->integer('total_runs');
            $table->float('batting_average');
            $table->integer('_50s');
            $table->integer('_100s');
            $table->string('career_best_batting');
            $table->integer('wickets');
            $table->integer('_5_wickets');
            $table->float('economy');
            $table->string('career_best_bowling');
            $table->string('photo')->nullable();
            $table->string('career');
            $table->integer('team_id');
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
        Schema::dropIfExists('players');
    }
}
