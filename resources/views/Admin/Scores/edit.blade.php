@extends('layouts.admin_master')
@section('title')Edit Players @endsection
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

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('admin.includes.flash_message')
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Edit Players</h1>
                <div class="card-body">
                <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{ route('admin.players.update', $players->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input name="name" type="text" class="form-control" value="{{ old('name', $players->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">born</label>
                                    <input name="born" type="text" class="form-control" value="{{ old('born', $players->born) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">birthplace</label>
                                    <input name="birthplace" type="text" class="form-control"
                                    value="{{ old('birthplace', $players->birthplace) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">batting_style</label>
                                    <input name="batting_style" type="text" class="form-control" value="{{ old('batting_style', $players->batting_style) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">bowling_style</label>
                                    <input name="bowling_style" type="text" class="form-control" value="{{ old('bowling_style', $players->bowling_style) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">icc_ranking_batting</label>
                                    <input name="icc_ranking_batting" type="text" class="form-control"
                                    value="{{ old('icc_ranking_batting', $players->icc_ranking_batting) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">icc_ranking_bowling</label>
                                    <input name="icc_ranking_bowling" type="text" class="form-control" value="{{ old('icc_ranking_bowling', $players->icc_ranking_bowling) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">total_match</label>
                                    <input name="total_match" type="text" class="form-control" value="{{ old('total_match', $players->total_match) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">innings</label>
                                    <input name="innings" type="text" class="form-control"
                                    value="{{ old('innings', $players->innings) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">total_runs</label>
                                    <input name="total_runs" type="text" class="form-control" value="{{ old('total_runs', $players->total_runs) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">batting_average</label>
                                    <input name="batting_average" type="text" class="form-control" value="{{ old('batting_average', $players->batting_average) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">_50s</label>
                                    <input name="_50s" type="text" class="form-control"
                                    value="{{ old('_50s', $players->_50s) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">_100s</label>
                                    <input name="_100s" type="text" class="form-control" value="{{ old('_100s', $players->_100s) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">career_best_batting</label>
                                    <input name="career_best_batting" type="text" class="form-control" value="{{ old('career_best_batting', $players->career_best_batting) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">wickets</label>
                                    <input name="wickets" type="text" class="form-control" value="{{ old('wickets', $players->wickets) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">_5_wickets</label>
                                    <input name="_5_wickets" type="text" class="form-control" value="{{ old('_5_wickets', $players->_5_wickets) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">economy</label>
                                    <input name="economy" type="text" class="form-control" value="{{ old('economy', $players->economy) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">career_best_bowling</label>
                                    <input name="career_best_bowling" type="text" class="form-control"
                                    value="{{ old('career_best_bowling', $players->career_best_bowling) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">photo</label>
                                    <input name="photo" type="text" class="form-control" value="{{ old('photo', $players->photo) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">career</label>
                                    <input name="career" type="text" class="form-control" value="{{ old('career', $players->career) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">team_id</label>
                                    <input name="team_id" type="text" class="form-control" value="{{ old('team_id', $players->team_id) }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info float-right">Update</button>
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