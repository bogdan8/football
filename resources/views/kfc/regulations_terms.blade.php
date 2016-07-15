@extends('layouts.app')
@section('content')

    <h4>Статус КФС</h4>
    <pre>
          @foreach($kfc_regulations_number_get as $item)
            Номер: <a href="/kfc/regulations/{!! $item->regulations_number !!}">{!! $item->regulations_number !!}</a>
        @endforeach
    </pre>
    <pre>
       Номер{{$kfc_regulations_number->regulations_number}} Загальні положення

        @foreach($kfc_regulations_number->kfc_regulations_terms as $items)
            Номер положення в описі  {{$items->number}}
            Сам опис  {!! $items->body !!}
        @endforeach
    </pre>
@stop