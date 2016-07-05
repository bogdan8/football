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
    </style>
    <pre>
    <h4>{{$cart->title}}</h4>
    Назва: {!! $cart->title !!}
        Дата: {!! $cart->created_at !!}
        @if(!empty($cart->image))
            середня картинка<img width="50px" height="50px" src="/uploads/photo_category/medium/{{$cart->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/photo_category/original/{{$cart->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/photo_category/small/{{$cart->image}}"/>
            <br/>
        @endif
        @if(!empty($item->image_url))
            картинка:
            <div style="height: 50px;width: 50px;">
                <img width="50px" height="50px" src="{!! $item->image_url !!}"/>
            </div>
        @endif
    </pre>

    <h2>Галерея</h2>
    @foreach($cart->gallery as $item)
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
            <img class="photo-medium" src="/uploads/gallery/medium/{{$item->image}}" data-toggle="modal"
                 data-target="#myModal{{$item->id}}"/>

            <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <img class="photo-big" src="/uploads/gallery/original/{{$item->image}}" data-toggle="modal"/>
                </div>
            </div>
        @endif
    @endforeach
@stop