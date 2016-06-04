@extends('layouts.app')
@section('content')
<pre>
    <h4>{{$cart->title}}</h4>
    Назва: {!! $cart->title !!}
    Дата: {!! $cart->date_news !!}
    Текст: {!! $cart->body !!}
    середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$cart->image}}"/>
    оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$cart->image}}"/>
    маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$cart->image}}"/><br/>
    Відео:
    <div style="height: 50px;width: 50px;">{!! $cart->video !!}</div>
    </pre>

    <h2>Галерея</h2>

    <h2>Коментарі</h2>
@stop