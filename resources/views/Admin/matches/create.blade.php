@extends('layouts.admin_master')
@section('title')Create Matches @endsection
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
                <h1 class="h3 mb-4 text-gray-800">Create Match</h1>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{ route('admin.matches.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Team 1</label>
                                    <select class="form-select"  name="team_1">
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"  >
                                    <label>Team 2</label>
                                    <select class="form-select" name="team_2">
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Schedule</label>
                                    <input name="schedule" type="text" class="form-control"
                                        value="{{ old('schedule') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input name="description" type="text" class="form-control"
                                        value="{{ old('description') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">result</label>
                                    <input name="result" type="text" class="form-control"
                                        value="{{ old('result') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">video</label>
                                    <input name="video" type="text" class="form-control"
                                        value="{{ old('video') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">venue</label>
                                    <input name="venue" type="text" class="form-control"
                                        value="{{ old('venue') }}">
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