@extends('layouts.app')
@section('content')

    @include('matches.next_matches', $next_matches)
    @foreach($season as $index)
        <a href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
    @endforeach

@stop