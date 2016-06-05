@extends('layouts.app')
@section('content')
    <style>
        .photo-medium {
            width: 200px;
            height: 200px;
        }

        .photo-big {
            width: 500px;
            height: 500px;
        }
        .video{
            height: 200px;
            width: 300px;
        }
    </style>
    <pre>
    <h4>{{$cart->title}}</h4>
    Назва: {!! $cart->title !!}
    Дата: {!! $cart->date_news !!}
    Текст: {!! $cart->body !!}
    середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$cart->image}}"/>
    оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$cart->image}}"/>
    маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$cart->image}}"/><br/>
    Відео:
    <div class="video">{!! $cart->video !!}</div>
    </pre>

    <h2>Галерея</h2>
    @foreach($cart->news_photo as $item)
        @if(!empty($item->image_url))
            <img class="photo-medium" src="{{$item->image_url}}" data-toggle="modal"
                 data-target="#myModal{{$item->id}}"/>

            <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <img class="photo-big" src="{{$item->image_url}}"/>
                </div>
            </div>
        @elseif(!empty($item->image))
            <img class="photo-medium" src="/uploads/news_photos/medium/{{$item->image}}" data-toggle="modal"
                 data-target="#myModal{{$item->id}}"/>

            <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <img class="photo-big" src="/uploads/news_photos/original/{{$item->image}}" data-toggle="modal"/>
                </div>
            </div>
        @endif
    @endforeach

    <h2>Коментарі</h2>
    <br/>
    <h1>Тут буде disqus</h1>
@stop