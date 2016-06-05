@extends('layouts.app')
@section('content')

    <h4>Список новин</h4>
    <pre>
    @foreach($news as $item)
            Назва: {!! $item->title !!}
            Дата: {!! $item->date_news !!}
            Текст: {!! $item->body !!}
            @if(!empty($item->image))
            середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$item->image}}"/><br/>
            @endif
            @if(!empty($item->video))
            Відео:
            <div style="height: 50px;width: 50px;">{!! $item->video !!}</div>
            @endif
            <a class="btn btn-success"
               href="/news/{{$item->slug}}">Повна новина</a>
        @endforeach
    </pre>
    <!-- Пагінація -->
    @include('partials.paginate', ['pager'=>$news])
            <!-- Пагінація -->
@stop