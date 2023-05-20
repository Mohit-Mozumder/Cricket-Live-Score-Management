@extends('layouts.admin_master')
@section('title')Schedules @endsection
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
                <h1 class="h3 mb-4 text-gray-800">Schedules</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Match</th>
                            <th>Time</th>
                            <th>venue</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matches as $match)
                        <tr>
                            <td>{{ $match->team_1_object->name }} Vs {{ $match->team_2_object->name }}</td>
                            <td>{{ $match->schedule }}</td>
                            <td>{{ $match->venue }}</td>
                            <td> <a href="{{route('admin.matches.edit', $match->id)}}">Edit</a> </td>
                            <td> <a href="{{route('admin.scores.create') }}?match_id={{ $match->id }}">Add score</a> </td>
                            <td>     @include('admin.includes._confirm_delete',[
                                                        'id' => $match->id,
                                                        'url' => route('admin.matches.destroy', $match->id),
                                                        'message' => 'Are you sure want to delete this Match?',
                                                    ]) </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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