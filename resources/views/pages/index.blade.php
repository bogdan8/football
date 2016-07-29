@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">СТОВРЕНО ДЛЯ ПІДТРИМКИ ФУТБОЛУ В КОРШЕВІ</b>
            </div>
            <br>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ГОЛОВНА</b>
            </div>
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
                <a href="#" class="body-discussion-block-title-second">ДИВИТИСЬ ВСІ ></a>
            </div>
            <div class="body-discussion-block-list-for">
                @foreach($discussion_limit as $item)
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
    <div class="block-index-page-info">
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
    </div>
    <div class="block-index-page-matches center-block">
        <div class="block-index-page-matches-header">
            <p class="block-index-page-next-math block-index-page-border">НАСТУПНИЙ МАТЧ</p>

        </div>
        <div class="block-index-page-matches-body">
            <p class="text-center block-index-page-matches-body-tour">
                {{$next_match->matches_tour->tour}}
                тур, {{date_create($next_match->matches_tour->date_tour)->Format('d:m:Y')}} турнір
            </p>

            <div class="block-index-page-matches-body-team-one">
                <p>{{$next_match->next_and_last_teams[0]->team->title}}</p>
                <img src="/uploads/team_logotype/small/{{$next_match->next_and_last_teams[0]->team->logotype}}"/>

            </div>

            <div class="block-index-page-matches-body-team-result">
                <p class="block-index-page-matches-body-team-goals">
                    {{$next_match->next_and_last_teams[0]->goals}} :
                    {{$next_match->next_and_last_teams[1]->goals}}
                </p>

                <div class="block-index-page-matches-body-team-result-bottom center-block">
                    <p class="block-index-page-matches-next-match-day">
                        Відбудеться {{date_create($next_match->date_played)->Format('d.m.Y')}},
                        о {{$next_match->date_played_hour}}
                    </p>
                </div>
            </div>
            <div class="block-index-page-matches-body-team-two">
                <p>{{$next_match->next_and_last_teams[1]->team->title}}</p>
                <img src="/uploads/team_logotype/small/{{$next_match->next_and_last_teams[1]->team->logotype}}"/>
            </div>
        </div>
    </div>

@stop