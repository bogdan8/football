@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">СТОВРЕНО ДЛЯ ПІДТРИМКИ ФУТБОЛУ В КОРШЕВІ</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ГОЛОВНА</b>
            </div>
            <br>

        </div>
        <div class="container body-header-block-image">
            <div class="row">
                <img src="/images/body/stadion.png" class="body-header-image">
            </div>
        </div>
    </div>
    <div class="body-discussion-block">
        <div class="container">
            <div class="row">
                <b class="body-discussion-block-title-first">ТЕМИ ОБГОВОРЕННЯ</b>
                <b class="body-discussion-block-title-separator"> | </b>
                <a href="/discussion" class="body-discussion-block-title-second">ДИВИТИСЬ ВСІ ></a>
            </div>
            <div class="body-discussion-block-list-for">
                @if($discussion_limit)
                    @foreach($discussion_limit as $item)
                        <div class="col-lg-6 body-discussion-block-list-one">
                            <div class="panel">
                                <div class="panel-heading">
                                    <img class="body-discussion-image"
                                         src="/uploads/discussion/medium/{{$item->image}}"/>
                                </div>
                                <div class="panel-body">
                                    <b class="body-discussion-block-panel-block-new-team">НОВА ТЕМА</b>
                                    <b class="body-discussion-block-panel-block-date">{{date_create($item->created_at)->Format('d.m.Y')}}</b>

                                    <p class="body-discussion-block-panel-block-title">{{$item->title}}:</p>

                                    <p class="body-discussion-block-panel-block-description">{!! $item->body !!}</p>

                                    <div class="comments-show-block">
                                        <?php $i = 0; ?>
                                        @foreach($item->discussion_comments as $comment)
                                            <div class="comments-show">
                                                <b class="comments-show-name">{{$comment->name}}</b>
                                                <b class="comments-show-date">{{date_create($item->created_at)->Format('d.m.Y')}}</b>

                                                <p class="comments-show-description">{{$comment->description}}</p>
                                            </div>
                                            <?php $i++; ?>
                                            @if($i == 5)
                                                <?php break; ?>
                                            @endif
                                        @endforeach
                                        <?php $i = 0; ?>
                                    </div>
                                    <a style="color: #698DAD;" data-toggle="modal" data-target="#{{$item->id}}">Більше
                                        коментарів: <span
                                                class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{$item->id}}" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Всі коментарі до: {{$item->title}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    @foreach($item->discussion_comments as $comment)
                                                        <div class="comments-show">
                                                            <b class="comments-show-name">{{$comment->name}}</b>
                                                            <b class="comments-show-date">{{date_create($item->created_at)->Format('d.m.Y')}}</b>

                                                            <p class="comments-show-description">{{$comment->description}}</p>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="comments-add">
                                        <form method="POST" action="/" accept-charset="UTF-8">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                            <input type="hidden" name="discussion_id" value="{{ $item->id }}"/>
                                            <label for="Ваше імя *:">Ваше імя *:</label>
                                            <input id="name" placeholder="Ваше імя :" required="required"
                                                   class="form-control" name="name" type="text">
                                            <br>
                                            <label for="Ваш текст *:">Ваш текст *:</label>
                                            <input id="description" placeholder="Ваш текст :" required="required"
                                                   class="form-control" name="description" type="text">
                                            <br>
                                            <input class="btn btn-default" value="Коментувати" type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="block-index-page-info">
        @if($short_description_index_page)
            @foreach($short_description_index_page as $index_description)
                <div class="block-index-page-info-row">
                    <div class="block-index-page-info-row-header">
                        <p>{{$index_description->name}}</p>
                    </div>
                    <div class="block-index-page-info-row-image">
                        <img src="/uploads/index_short_description/medium/{{$index_description->image}}"/>
                    </div>
                    <div class="block-index-page-info-row-title">
                        <p>{{$index_description->title}}</p>
                    </div>
                    <div class="block-index-page-info-row-description">
                        <p>{!! substr($index_description->description,0,240) !!} ...</p>
                    </div>
                    <div class="block-index-page-info-row-link">
                        <p><a href="{{$index_description->link}}">> Детальніше</a></p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    @if($next_match)
        <div class="index-block-matches center-block">
            <div class="block-matches-body">
                <p class="text-center block-index-page-matches-body-tour">
                    {{$next_match->matches_tour->tour}}
                    тур, {{date_create($next_match->matches_tour->date_tour)->Format('d:m:Y')}} турнір
                </p>

                <div class="block-index-page-matches-body-team-one">
                    <p>{{$next_match->next_and_last_teams[0]->team->title}}</p>
                    <img src="/uploads/team_logotype/small/{{$next_match->next_and_last_teams[0]->team->logotype}}"/>

                </div>

                <div class="block-matches-body-team-result">
                    <p class="block-matches-body-team-goals">
                        початок <br>
                        {{$next_match->date_played_hour}}
                    </p>

                    <div class="block-matches-body-team-result-bottom center-block">
                        <p class="block-matches-next-match-day">
                            {{$next_match->where_played}}
                        </p>
                    </div>
                </div>
                <div class="block-index-page-matches-body-team-two">
                    <p>{{$next_match->next_and_last_teams[1]->team->title}}</p>
                    <img src="/uploads/team_logotype/small/{{$next_match->next_and_last_teams[1]->team->logotype}}"/>
                </div>
            </div>
        </div>
    @endif
@stop