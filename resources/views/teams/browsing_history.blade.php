@extends('layouts.app')
@section('content')

    <h4>Тренувальний процес</h4>
    <pre>
    @foreach($browsing_history as $item)
            Дата: <a href="/teams/browsing_history_people/{!! $item->date_visit !!}">{!! $item->date_visit !!}</a>
        @endforeach
    </pre>
@stop