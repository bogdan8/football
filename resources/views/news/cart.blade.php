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

        .video {
            height: 200px;
            width: 300px;
        }
    </style>
    <pre>
    <h4>{{$cart->title}}</h4>
    Назва: {!! $cart->title !!}
        Дата: {!! $cart->date_news !!}
        Текст: {!! $cart->body !!}
        @if(!empty($cart->image))
            середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$cart->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$cart->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$cart->image}}"/><br/>
        @endif
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
    <div id="disqus_thread"></div>
    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//football-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@stop