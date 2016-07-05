@extends('layouts.app')
@section('content')

    <h4>Список категорій</h4>
    <pre>
    @foreach($photo_category as $item)
        Кількість фоток {{ count($item->gallery)}}
        Назва: {!! $item->title !!}
        Дата: {!! $item->created_at !!}
        @if(!empty($item->image))
            середня картинка<img width="50px" height="50px" src="/uploads/photo_category/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/photo_category/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/photo_category/small/{{$item->image}}"/>
            <br/>
        @endif
        @if(!empty($item->image_url))
            картинка:
            <div style="height: 50px;width: 50px;">
                <img width="50px" height="50px" src="{!! $item->image_url !!}"/>
            </div>
        @endif
        <a class="btn btn-success"
           href="/gallery/{{$item->title}}">Перейти на фотки</a>
        <br/>
    @endforeach
    </pre>
    <!-- Пагінація -->
    <!-- Пагінація -->
@stop