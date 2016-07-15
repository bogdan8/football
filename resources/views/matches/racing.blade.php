@extends('layouts.app')
@section('content')
    @include('matches.next_matches', $next_matches)
    @foreach($season as $item)
        <a href="/matches/season/{{$item->id}}">Сезон {{$item->number_season}}</a>
    @endforeach
    <a href="/matches/season/{{$season_one->id}}">Сезон {{$season_one->number_season}}</a>
    <pre>
        <a href="#">Зіграні матчі</a>
        <a href="/matches/season/{{$season_one->id}}/standings">Турнірна таблиця</a>
        <a href="#">Звіт матчів</a>
    </pre>
    <pre>
        <a href="/matches/season/{{$season_one->id}}/standings/{{$racing->id}}/racing">{{$racing->name }}</a>
    </pre>
    <pre>
        @foreach($racing->matches_tour as $item)
            Тур {{$item->tour }}
            Дата {{$item->date_tour }}
            @foreach($item->matches_played as $item)
                {{$item->title_one_team}} - {{$item->title_second_team}}
                {{$item->count_one_team}} - {{$item->count_second_team}}
                {{$item->date_played}}
            @endforeach
        @endforeach
    </pre>
@stop