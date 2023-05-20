@extends('layouts.master')
@section('title') Players Information @endsection
@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="card-title">View Player</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('player') }}" class="btn btn-sm btn-outline-warning float-right">
                        <i class="fa fa-arrow-left"></i> Back To Index
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @foreach($players as $player)
                    <p><b>photo: {{ $player->photo }}</b></p><br>
                    <p><b>name: {{ $player->name }}</b></p><br>
                    <p><b>born: {{ $player->born }}</b></p><br>
                    <p><b>birthplace: {{ $player->birthplace }}</b></p><br>
                    <p><b>batting_style: {{ $player->batting_style }}</b></p><br>
                    <p><b>bowling_style: {{ $player->bowling_style }}</b></p><br>
                    <p><b>icc_ranking_batting: {{ $player->icc_ranking_batting }}</b></p><br>
                    <p><b>icc_ranking_bowling: {{ $player->icc_ranking_bowling }}</b></p><br>
                    <p><b>total_match: {{ $player->total_match }}</b></p><br>
                    <p><b>innings: {{ $player->innings }}</b></p><br>
                    <p><b>total_runs: {{ $player->total_runs }}</b></p><br>
                    <p><b>batting_average: {{ $player->batting_average }}</b></p><br>
                    <p><b>_50s: {{ $player->_50s }}</b></p><br>
                    <p><b>_100s: {{ $player->_100s }}</b></p><br>
                    <p><b>career_best_batting: {{ $player->career_best_batting }}</b></p><br>
                    <p><b>wickets: {{ $player->wickets }}</b></p><br>
                    <p><b>_5_wickets: {{ $player->_5_wickets }}</b></p><br>
                    <p><b>economy: {{ $player->economy }}</b></p><br>
                    <p><b>career_best_bowling: {{ $player->career_best_bowling }}</b></p><br>
                    <p><b>career: {{ $player->career }}</b></p><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection