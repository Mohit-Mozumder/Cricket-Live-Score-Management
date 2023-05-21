@extends('layouts.admin_master')
@section('title')Create Score @endsection
@section('content')
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.includes.topbar')
            <!-- End of Topbar -->
            <div class="container-fluid">
                @include('admin.includes.flash_message')
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Create Score</h1>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{ route('admin.scores.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h2>
                                        <strong>
                                            {{ $match->team_1_object->name }} Vs {{ $match->team_2_object->name }}
                                        </strong>
                                    </h2>
                                    <input type="hidden" name="match_id" value="{{ $match->id }}">
                                </div>
                                
                                <div class="form-group">
                                    <label>Batting Team Name</label><br>
                                    <select class="form-select" name="batting_team_id">
                                        <option value="{{ $match->team_1_object->id }}" {{ $getLastRow->batting_team_id == $match->team_1_object->id ? 'selected' : '' }}>
                                            {{ $match->team_1_object->name }}
                                        </option>
                                        <option value="{{ $match->team_2_object->id }}" {{ $getLastRow->batting_team_id == $match->team_2_object->id ? 'selected' : '' }}>
                                            {{ $match->team_2_object->name }}
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Striker Player Name</label><br>
                                    <select class="form-select" name="strike_player_id">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}" {{ $getLastRow->strike_player_id == $player->id ? 'selected' : '' }}>
                                            {{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Non Striker Player Name</label><br>
                                    <select class="form-select" name="non_strike_player_id">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}" {{ $getLastRow->non_strike_player_id == $player->id ? 'selected' : '' }}>
                                            {{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                

                                <div class="form-group">
                                    <label for="over">Over:</label>
                                    <input type="text" name="over" id="over" class="form-control" value="{{ $team1Overs }}" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label>Bowler Name</label><br>
                                    <select class="form-select" name="bowler_id">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}" {{ $getLastRow->bowler_id == $player->id ? 'selected' : '' }}>
                                            {{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Out Player Name</label><br>
                                    <select class="form-select" name="out_player_id">
                                    <option value="">Select name</option>
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Wicket taker Name</label><br>
                                    <select class="form-select" name="wicket_taker_id">
                                        <option value="">Select name</option> 
                                        @foreach($players as $player)
                                            <option value="{{ $player->id }}">{{ $player->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>noball</h4><br></label>
                                    <select name="noball" class="form-select">
                                        <option value="">Select option</option> 
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Wide</h4><br></label>
                                    <select name="wide" class="form-select">
                                        <option value="">Select option</option> 
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Legby</h4><br></label>
                                    <select name="noball" class="form-select">
                                        <option value="">Select option</option> 
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Current score</label>
                                    <input name="current_score" type="text" class="form-control"
                                        value="1">
                                </div>
                                <div class="score-card">
                                    <h3>Score Card</h3>
                                    <div class="team-score">
                                        <span class="team-name">{{ $match->team_1_object->name }}</span>
                                        <span class="score">{{ $team1TotalScore }}/{{ $team1Wickets }} ({{ $team1Overs }})</span>
                                    </div>
                                    <div class="team-score">
                                        <span class="team-name">{{ $match->team_2_object->name }}</span>
                                        <span class="score">{{ $team2TotalScore }}/{{ $team2Wickets }} ({{ $team2Overs }})</span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info float-right">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.includes.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
@endsection

@section('run_custom_jquery')
<script>
    $(document).ready(function() {
        $('#batting_team').change(function() {
            var selectedTeam = $(this).val();
            var team1Overs = "{{ $team1Overs }}";
            var team2Overs = "{{ $team2Overs }}";

            if (selectedTeam == "{{ $match->team_2_object->id }}") {
                $('#over').val(team2Overs);
            } else {
                $('#over').val(team1Overs);
            }
        });
    });
</script>

@endsection