@extends('layouts.app')
@section('content')
    @if(!empty($next_matches))
        @include('matches.next_matches', $next_matches)
    @endif
    @foreach($season as $item)
        <a href="/matches/season/{{$item->id}}">Сезон {{$item->number_season}}</a>
    @endforeach
    <a href="/matches/season/{{$season_one->id}}">Сезон {{$season_one->number_season}}</a>
    <pre>
        <a href="/matches/season/{{$season_one->id}}/standings">Зіграні матчі</a>
        <a href="/#">Турнірна таблиця</a>
        <a href="#">Звіт матчів</a>
    </pre>
    <pre>
        @foreach($season_one->racing_circles as $item)
            <a href="/matches/season/{{$season_one->id}}/standings/{{$item->id}}/racing">{{$item->name }}</a>
        @endforeach
    </pre>
@stop