@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">ГАЛЕРЕЯ</b>
            </div>
            <br>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">{{$cart->title}}</b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="gallery-cart-photo-block">
                @foreach($cart->gallery as $item)
                    <div class="col-lg-4">
                        @if(!empty($item->image_url))
                            <img class="gallery-cart-photo" src="{{$item->image_url}}" data-toggle="modal"
                                 data-target="#myModal{{$item->id}}"/>


                            <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="gallery-cart-photo-modal-window" src="{{$item->image_url}}"/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif(!empty($item->image))
                            <img class="gallery-cart-photo" src="/uploads/gallery/medium/{{$item->image}}"
                                 data-toggle="modal"
                                 data-target="#myModal{{$item->id}}"/>

                            <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">{{$item->title}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="gallery-cart-photo-modal-window"
                                                 src="/uploads/gallery/original/{{$item->image}}"
                                                 data-toggle="modal"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop