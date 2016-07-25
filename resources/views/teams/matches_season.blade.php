@extends('layouts.app')
@section('content')
    <pre>
        @foreach($standings_season as $season)
            <a href="/teams/matches/{{$season->number_season }}">Сезон: {{ $season->number_season }}</a>
        @endforeach
    </pre>
    @if(!empty($next_matches))
        @include('teams.next_matches', $next_matches)
    @endif

@stop