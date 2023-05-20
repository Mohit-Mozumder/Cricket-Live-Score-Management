@extends('layouts.admin_master')
@section('title')Teams @endsection
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
                <h1 class="h3 mb-4 text-gray-800">List of team</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Point</th>
                            <th>Latest Squad</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->point }}</td>
                            <td>{{ $team->latest_squad }}</td>
                            <td> <a href="{{route('admin.teams.edit', $team->id)}}">Edit</a> </td>
                            <td>     @include('admin.includes._confirm_delete',[
                                                        'id' => $team->id,
                                                        'url' => route('admin.teams.destroy', $team->id),
                                                        'message' => 'Are you sure want to delete this Team?',
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