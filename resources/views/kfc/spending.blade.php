@extends('layouts.app')
@section('content')

    <h4>Витрати</h4>
    <pre>
        <?php $i = 1; ?>
        @foreach($kfc_spending as $item)
            №{{$i++}}
            Товар або послуга: {!! $item->goods_or_services !!}
            Дата: {!! $item->date !!}
            Сума: {!! $item->sum !!}.00 грн
        @endforeach
    </pre>
@stop