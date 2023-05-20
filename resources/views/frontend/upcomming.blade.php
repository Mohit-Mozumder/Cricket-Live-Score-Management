<h1>Upcomming Matches</h1>

<div class="card-columns">
    @foreach($matches as $match)
    <div class="card bg-info">
        <div class="card-body text-center">
            <p class="card-text" style="color:white;">{{ $match->team_1_object->name }} Vs {{ $match->team_2_object->name }}</p>
            <p class="card-text" style="color:white;">{{ $match->schedule }} </p>
           
        </div>
    </div>
    @endforeach
</div>