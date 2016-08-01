@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">

            <div class="row">
                <b class="body-header-block-title-second">ТЕМИ ОБГОВОРЕННЯ</b>
            </div>
        </div>
    </div>
    <div class="body-discussion-block">
        <div class="container">
            <div class="body-discussion-block-list-for">
                @foreach($discussion as $item)
                    <div class="col-lg-6 body-discussion-block-list-one">
                        <div class="panel">
                            <div class="panel-heading">
                                <img class="body-discussion-image" src="/uploads/discussion/medium/{{$item->image}}"/>
                            </div>
                            <div class="panel-body">
                                <b class="body-discussion-block-panel-block-new-team">НОВА ТЕМА</b>
                                <b class="body-discussion-block-panel-block-date">{{date_create($item->created_at)->Format('d.m.Y')}}</b>

                                <p class="body-discussion-block-panel-block-title">{{$item->title}}:</p>

                                <p class="body-discussion-block-panel-block-description">{!! $item->body !!}</p>

                                <div class="comments-show-block">
                                    @foreach($item->discussion_comments as $coment)
                                        <div class="comments-show">
                                            <b class="comments-show-name">{{$coment->name}}</b>
                                            <b class="comments-show-date">{{date_create($item->created_at)->Format('d.m.Y')}}</b>

                                            <p class="comments-show-description">{{$coment->description}}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="comments-add">
                                    <form method="POST" action="/" accept-charset="UTF-8">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <input type="hidden" name="discussion_id" value="{{ $item->id }}"/>
                                        <label for="Ваше імя *:">Ваше імя *:</label>
                                        <input id="name" placeholder="Ваше імя :" required="required"
                                               class="form-control" name="name" type="text">
                                        <br>
                                        <label for="Ваш текст *:">Ваше текст *:</label>
                                        <input id="description" placeholder="Ваше імя :" required="required"
                                               class="form-control" name="description" type="text">
                                        <br>
                                        <input class="btn btn-default" value="Коментувати" type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="news-pagination-block">
        @include('partials.paginate', ['pager'=>$discussion])
    </div>
@stop