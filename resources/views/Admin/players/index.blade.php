@extends('layouts.admin_master')
@section('title')Players @endsection
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
                <h1 class="h3 mb-4 text-gray-800">List of Players</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Player Name</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($players as $player)
                        <tr>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->team_id_object->name }}</td>
                            <td> <a href="{{route('admin.players.show', $player->id)}}">More info</a> </td>
                            <td> <a href="{{route('admin.players.edit', $player->id)}}">Edit</a> </td>
                            <td>     @include('admin.includes._confirm_delete',[
                                                        'id' => $player->id,
                                                        'url' => route('admin.players.destroy', $player->id),
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