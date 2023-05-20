@extends('layouts.master')
@section('title')Teams @endsection
@section('content')
<div id="wrapper">

   

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"></h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Point</th>
                            <th>Latest Squad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->point }}</td>
                            <td>{{ $team->latest_squad }}</td>
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