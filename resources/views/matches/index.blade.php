@extends('layouts.app')
@section('content')

    @foreach($season as $index)
        <a href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
    @endforeach

@stop