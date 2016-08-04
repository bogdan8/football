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
        <br>

        <br>
    </div>
    <div class="container">
        <div class="row">
            @foreach($news as $item)
                <div class="col-lg-6">
                    <div class="news-list-block">
                        <img class="news-list-image" src="/uploads/news/medium/{{$item->image}}"/>

                        <div class="news-list-block-bottom">
                            <br>
                            <a class="news-list-block-bottom-link"
                               href="/news/{{$item->slug}}">{{ $item->title }}</a>
                            <p class="news-list-block-bottom-date">ДАТА: {{$item->date_news}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="news-pagination-block">
        @include('partials.paginate', ['pager'=>$news])
    </div>
@stop