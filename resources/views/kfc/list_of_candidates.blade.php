@extends('layouts.app')
@section('content')

    <h4>Витрати</h4>
    <pre>
        <?php $i = 1; ?>
        @foreach($candidates_year as $item)
            Роки: {!! $item->years !!}
            @foreach($item->kfc_list_of_candidates_people as $list_people)
                №{{$i}}
                Прізвище імя: {{$list_people->initials}}
            @endforeach
        @endforeach
    </pre>
@stop