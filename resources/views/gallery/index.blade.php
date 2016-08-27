@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">ГАЛЕРЕЯ</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">МЕДИА</b>
            </div>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @if(!empty($all_photo[0]->image))
                        <img class="index-photo-big" src="/uploads/gallery/medium/{{$all_photo[0]->image}}"/>

                        <div class="index-photo-description-big">
                            <p class="index-photo-description-count">{{count($all_photo)}}</p>
                            <a class="index-photo-description-link"
                               href="/gallery/all_photo">ВСІ ФОТОГРАФІЇ</a>
                        </div>
                    @else
                        <img class="index-photo-big" src="{{$all_photo[0]->image_url }}"/>

                        <div class="index-photo-description-big">
                            <p class="index-photo-description-count">{{count($all_photo)}}</p>
                            <a class="index-photo-description-link"
                               href="/gallery/all_photo">ВСІ ФОТОГРАФІЇ</a>
                        </div>
                    @endif
                </div>
                <div class="col-lg-5">
                    <div class="col-lg-12 index-photo-block-right" style="margin-top: 25px;">
                        @if(!empty($photo_category[0]->image))
                            <img class="index-photo-right"
                                 src="/uploads/photo_category/medium/{{$photo_category[0]->image}}"/>
                        @endif
                        <div class="index-photo-description">
                            <p class="index-photo-description-count">{{count($photo_category[0]->gallery)}}</p>
                            <a class="index-photo-description-link"
                               href="/gallery/{{$photo_category[0]->title}}">{{$photo_category[0]->title}}</a>
                        </div>
                    </div>
                    <div class="col-lg-12 index-photo-block-right">
                        @if(!empty($photo_category[1]->image))
                            <img class="index-photo-right"
                                 src="/uploads/photo_category/medium/{{$photo_category[1]->image}}"/>
                        @endif
                        @if(!empty($photo_category[1]->image_url))
                            <img class="index-photo-right" src="{!! $photo_category[1]->image_url !!}"/>
                        @endif
                        <div class="index-photo-description">
                            <p class="index-photo-description-count">{{count($photo_category[1]->gallery)}}</p>
                            <a class="index-photo-description-link"
                               href="/gallery/{{$photo_category[1]->title}}">{{$photo_category[1]->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row index-photo-bottom">
                <?php for($i = 2; $i < count($photo_category); $i++){ ?>
                <div class="col-lg-4" style="margin-right: -24px;">
                    @if(!empty($photo_category[$i]->image))
                        <img class="index-photo-in-block"
                             src="/uploads/photo_category/medium/{{$photo_category[$i]->image}}"/>

                    @endif
                    @if(!empty($photo_category[$i]->image_url))
                        <img class="index-photo-in-block" src="{!! $photo_category[$i]->image_url !!}"/>
                    @endif
                    <div class="index-photo-description-in-block">
                        <p class="index-photo-description-count">{{count($photo_category[$i]->gallery)}}</p>
                        <a class="index-photo-description-link"
                           href="/gallery/{{$photo_category[$i]->title}}">{{$photo_category[$i]->title}}</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
@stop