@extends('layouts.app')
@section('content')

    <h4>Витрати</h4>
    @foreach($candidates_year_all as $item)
        Роки: <a href="/kfc/list_of_candidates/{!! $item->years !!}">{!! $item->years !!}</a>
    @endforeach
    <pre>
        <?php $i = 1; ?>
            Роки: <a href="/kfc/list_of_candidates/{!! $candidates_year->years !!}">{!! $candidates_year->years !!}</a>
            @foreach($candidates_year->kfc_list_of_candidates_people as $list_people)
                №{{$i}}
                Прізвище імя: {{$list_people->initials}}
            @endforeach
    </pre>
@stop