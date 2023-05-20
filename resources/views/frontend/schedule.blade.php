@extends('layouts.master')
@section('title')Schedules @endsection
@section('content')
<div id="wrapper">


    <div id="content-wrapper" class="d-flex flex-column">


        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800" style="text-align:center;">Schedules</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Match</th>
                        <th>Time</th>
                        <th>venue</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matches as $match)
                    <tr>
                        <td>{{ $match->team_1_object->name }} Vs {{ $match->team_2_object->name }}</td>
                        <td>{{ $match->schedule }}</td>
                        <td>{{ $match->venue }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- /.container-fluid -->

    </div>

</div>
<!-- End of Content Wrapper -->

</div>
@endsection