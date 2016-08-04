@extends('layouts.app')
@section('content')
    <style>
        p {
            color: white;
        }
    </style>
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">БУДОВА СПОРТИВНОГО МАЙДАНЧИКА</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ПРОЕКТ</b>
            </div>
            <br>
        </div>
        <div class="container body-header-block-image platform-header-image-block">
            <div class="row">
                <img src="/uploads/platform/original/{{$platform->image}}" class="platform-header-image">
            </div>
            <div class="platform-header-description">
                <p class="platform-header-description-title">
                    {{$platform->title}}
                </p>

                <div class="platform-header-description-description">
                    <?php
                    $descript = substr($platform->description, 0, 500);
                    $text = substr($descript, 0, strrpos($descript, ' '));
                    ?>
                    {!! $text !!}...
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="platform-show-images">
                @if(!empty($platform_photos[0]))
                    <img src="/uploads/platform_photos/original/{{$platform_photos[0]->image}}"
                         class="platform-body-first-image">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="platform-show-all-images">
                @foreach($platform_photos as $photo)
                    <div class="col-lg-4">
                        <img src="/uploads/platform_photos/original/{{$photo->image}}"
                             class="platform-body-all-image" data-toggle="modal"
                             data-target="#myModal{{$photo->id}}">

                        <div class="modal fade" id="myModal{{$photo->id}}" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="gallery-cart-photo-modal-window"
                                             src="/uploads/platform_photos/original/{{$photo->image}}"
                                             data-toggle="modal"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop