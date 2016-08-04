@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">НОВИНИ КОРШІВСЬКИЙ ФУТБОЛ</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">НОВИНИ</b>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cart-news-body-block">
                    <div class="cart-news-block-image">
                        <img class="cart-news-image" src="/uploads/news/medium/{{$cart->image}}"/>
                    </div>
                    <div class="cart-news-block-title">
                        <p class="cart-news-title">{{$cart->title}}</p>

                        <p class="cart-news-date">ДАТА: {{date_create($cart->date_news)->Format('d.m.Y')}}</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-news-block-description">
                                {!! $cart->body !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8">
                        <div class="cart-news-block-video">
                            {!! $cart->video !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-news-block-comments">
                        <p>ФОТО</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cart-news-block-gallery">
                    @foreach($cart->news_photo as $item)
                        <div class="col-lg-3 col-sm-12">
                            @if(!empty($item->image_url))
                                <img class="cart-news-gallery-photo" src="{{$item->image_url}}" data-toggle="modal"
                                     data-target="#myModal{{$item->id}}"/>

                                <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="cart-news-gallery-photo-modal"
                                                     src="{{$item->image_url}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif(!empty($item->image))
                                <img class="cart-news-gallery-photo" src="/uploads/news_photos/medium/{{$item->image}}"
                                     data-toggle="modal"
                                     data-target="#myModal{{$item->id}}"/>

                                <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="cart-news-gallery-photo-modal"
                                                     src="/uploads/news_photos/original/{{$item->image}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-news-block-comments">
                        <p>КОМЕНТАРІ...</p>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div id="disqus_thread"></div>
                    <script>
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = '//football-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by
                            Disqus.</a></noscript>
                </div>
            </div>
        </div>
    </div>

@stop