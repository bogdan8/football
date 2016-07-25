@extends('layouts.app')
@section('content')

    <h4>Тренувальний процес</h4>
    <pre>
    @foreach($browsing_history as $item)
            Дата: <a href="/teams/browsing_history_people/{!! $item->date_visit !!}">{!! $item->date_visit !!}</a>
        @endforeach
    </pre>
    Вибрана дата {{$browsing_history_mounts->date_visit}}
    <pre>
    @foreach($browsing_history_mounts->browsing_history_people as $people)
            Імя ігрока: {{$people->name_people}}
            @foreach($people->browsing_history_people_day as $day)
                День відвідування: {{$day->day_name}}
                Кількість відвідувань: {{$day->count_visit}}
                Загальна кількість відвідувань: {{count($day->count_visit)}}
            @endforeach
        @endforeach
    </pre>
@stop