@extends('layouts.master')
@section('title')Players @endsection
@section('content')
<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"></h1>
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
                            <td> <a href="{{route('frontend.player.show', $player->id)}}">More &rarr;</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>



    </div>


</div>
@endsection