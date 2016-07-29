@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КОМАНДА Ю - 18</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">МАТЧІ</b>
            </div>
            <br>
            <br>

            <div class="row">
                <b class="body-header-block-title-first">НАСТУПНИЙ МАТЧ</b>
            </div>
        </div>
    </div>
    @if(!empty($next_matches))
        @include('matches.next_matches', $next_matches)
    @endif
    @foreach($season as $index)
        <a href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
    @endforeach

@stop