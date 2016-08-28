<div class="block-matches center-block">
    <div class="block-matches-body">
        <p class="text-center block-index-page-matches-body-tour">
            {{$next_matches->matches_tour->tour}}
            тур, {{date_create($next_matches->matches_tour->date_tour)->Format('d:m:Y')}} турнір
        </p>

        <div class="block-index-page-matches-body-team-one">
            <p>{{$next_matches->next_and_last_teams[0]->team->title}}</p>
            <img src="/uploads/team_logotype/original/{{$next_matches->next_and_last_teams[0]->team->logotype}}"/>

        </div>

        <div class="block-matches-body-team-result">
            <p class="block-matches-body-team-goals">
                початок <br>
                {{$next_matches->date_played_hour}}
            </p>
            <div class="block-matches-body-team-result-bottom center-block">
                <p class="block-matches-next-match-day">
                    {{$next_matches->where_played}}
                </p>
            </div>
        </div>
        <div class="block-index-page-matches-body-team-two">
            <p>{{$next_matches->next_and_last_teams[1]->team->title}}</p>
            <img src="/uploads/team_logotype/original/{{$next_matches->next_and_last_teams[1]->team->logotype}}"/>
        </div>
    </div>
</div>