@extends('layouts.app')
@section('content')

    <h4>Новини</h4>
    <pre>
    @foreach($news as $item)
            Назва: {!! $item->title !!}
            Дата: {!! $item->date_news !!}
            Текст: {!! $item->body !!}
            середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$item->image}}"/><br/>
            Відео:
            <div style="height: 50px;width: 50px;">{!! $item->video !!}</div>
            <a class="btn btn-success"
               href="/news/{{$item->slug}}">Повна новина</a>
        @endforeach
    </pre>
@stop