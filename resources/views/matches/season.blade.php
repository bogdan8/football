@extends('layouts.app')
@section('content')

    @foreach($season as $item)
        <a href="/matches/season/{{$item->id}}">Сезон {{$item->number_season}}</a>
    @endforeach
    Вибраний <a href="/matches/season/{{$season_one->id}}">Сезон {{$season_one->number_season}}</a>
    <pre>
        <a href="#">Зіграні матчі</a>
        <a href="/matches/season/{{$season_one->id}}/standings">Турнірна таблиця</a>
        <a href="#">Звіт матчів</a>
    </pre>
@stop