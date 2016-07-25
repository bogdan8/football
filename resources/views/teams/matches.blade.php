@extends('layouts.app')
@section('content')
    @foreach($standings_season as $season)
        <a href="/teams/matches/{{$season->number_season }}">Сезон: {{ $season->number_season }}</a>
    @endforeach
    @if(!empty($next_matches))
        @include('teams.next_matches', $next_matches)
    @endif
    <h4>Турнірна таблиця</h4>
    <pre>
    @foreach($standings_season_with_standings->standings as $item)
            Команда: {!! $item->team->title !!}
            Старі або діти: {!! $item->team->adult->title !!}
            оригіна<img width="50px" height="50px" src="/uploads/team_logotype/original/{{$item->team->logotype}}"/>
            маленький логотип <img width="50px" height="50px"
                                   src="/uploads/team_logotype/small/{{$item->team->logotype}}"/>
            Кількість ігор: {!! $item->count_games !!}
            Кількість перемог: {!! $item->count_win !!}
            Кількість нічиїх: {!! $item->count_draw !!}
            Кількість проіграшів: {!! $item->count_loser !!}
            Кількість забитих голів: {!! $item->count_goals !!}
            Кількість пропущених голів: {!! $item->count_missing !!}
            Різниця: {!! $item->difference !!}
            Кількість очків: {!! $item->points !!}
        @endforeach
    </pre>
@stop