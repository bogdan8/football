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
    <h4>Список людей які внесли пожертви</h4>
    <pre>
    @foreach($donate_people as $item)
            Імя: {!! $item->title !!}
            Дата пожертви: {!! $item->date !!}
            Кількість грошей: {!! $item->count_money !!}грн
        @endforeach
    </pre>
    <br/>
    <h4>Теми обговорення з лімітом</h4>
    <pre>
    @foreach($discussion_limit as $item)
            Назва: {!! $item->title !!}
            Дата: {!! $item->created_at !!}
            Текст: {!! $item->body !!}
            середня картинка<img width="50px" height="50px" src="/uploads/discussion/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/discussion/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/discussion/small/{{$item->image}}"/><br/>
        @endforeach
    </pre>
    <br/>
    <h4>Теми обговорення без ліміту</h4>
    <pre>
    @foreach($discussion_all as $item)
            Назва: {!! $item->title !!}
            Дата: {!! $item->created_at !!}
            Текст: {!! $item->body !!}
            середня картинка<img width="50px" height="50px" src="/uploads/discussion/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/discussion/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/discussion/small/{{$item->image}}"/><br/>
        @endforeach
    </pre>
@stop