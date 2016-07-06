@extends('layouts.app')
@section('content')

    <h4>Витрати</h4>
    <pre>
        <?php $i = 1; ?>
        @foreach($kfc_fundraiser as $item)
            №{{$i++}}
            Товар або послуга: {!! $item->initials !!}
            Дата: {!! $item->date !!}
            Сума: {!! $item->sum !!}.00 грн
        @endforeach
    </pre>
@stop