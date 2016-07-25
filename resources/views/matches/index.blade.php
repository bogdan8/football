@extends('layouts.app')
@section('content')
    @if(!empty($next_matches))
        @include('matches.next_matches', $next_matches)
    @endif
    @foreach($season as $index)
        <a href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
    @endforeach

@stop