@extends('layouts.admin_master')
@section('title', 'Edit Match')
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
                <h1 class="h3 mb-4 text-gray-800">Edit Match</h1>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{ route('admin.matches.update', $matches->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Team 1</label>
                                    <select class="form-select" name="team_1">
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}" {{ $team->id == $matches->team_1 ? 'selected' : '' }}>{{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Team 2</label>
                                    <select class="form-select" name="team_2">
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}" {{ $team->id == $matches->team_2 ? 'selected' : '' }}>{{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Schedule</label>
                                    <input name="schedule" type="text" class="form-control" value="{{ $matches->schedule }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" type="text" class="form-control" value="{{ $matches->description }}">
                                </div>
                                <div class="form-group">
                                    <label>Result</label>
                                    <input name="result" type="text" class="form-control" value="{{ $matches->result }}">
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <input name="video" type="text" class="form-control" value="{{ $matches->video }}">
                                </div>
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input name="venue" type="text" class="form-control" value="{{ $matches->venue }}">
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
