<h1>Live Score</h1>
<div class="card-columns">
    <div class="card bg-info">
        <div class="card-body text-center">
            <b class="card-text" style="color:white;">{{ $latest_match->description }}</b>
            <div>
                <b class="card-text" style="color:white;"> {{ $latest_match->team_1_object->name }}&#20;&#20; </b>
                &#20;&#20;&#20;&#20;<b class="card-text" style="color:white;"> {{ $team_1_total_score}} -
                    {{ $team_1_wicket  }}
                    ({{ $team_1_over }})
                </b>
            </div>
            <!-- <div>
                <b class="card-text" style="color:white;"> {{ $latest_match->team_2_object->name }}
                </b>
            </div> -->
        </div>
    </div>
</div>