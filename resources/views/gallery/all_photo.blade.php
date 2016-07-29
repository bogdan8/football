@extends('layouts.app')
@section('content')
    @foreach($all_photo as $item)
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