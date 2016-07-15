@extends('layouts.app')
@section('content')

    <h4>Статус КФС</h4>
    <pre>
        @foreach($kfc_regulations_number as $item)
            Номер: <a href="/kfc/regulations/{!! $item->regulations_number !!}">{!! $item->regulations_number !!}</a>
        @endforeach
    </pre>
@stop