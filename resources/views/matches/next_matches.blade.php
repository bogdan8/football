<pre>
<p>Наступні матчі</p>

    {{$next_matches->matches_tour->tour}} тур
    {{$next_matches->date_played}} тур<br/>
    <p>початок {{$next_matches->date_played_hour}}</p>
    <p>Де грають: {{$next_matches->where_played}}</p>
    @foreach($next_matches->next_and_last_teams as $next_and_last_teams)
        {{$next_and_last_teams->team->title}}
        оригіна<img width="50px" height="50px"
                    src="/uploads/team_logotype/original/{{$next_and_last_teams->team->logotype}}"/>
        маленький логотип <img width="50px" height="50px"
                               src="/uploads/team_logotype/small/{{$next_and_last_teams->team->logotype}}"/>
    @endforeach
</pre>