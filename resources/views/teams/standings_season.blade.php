@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КОМАНДА Ю - 18</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">МАТЧІ</b>
            </div>
            <br>
            <br>

            <div class="row">
                <b class="body-header-block-title-first">НАСТУПНИЙ МАТЧ</b>
            </div>
        </div>
    </div>
    @if(!empty($next_matches))
        @include('matches.next_matches', $next_matches)
    @endif
    <div class="container">
        <div class="row">
            <div class="number-season">
                @foreach($season as $index)
                    @if($index->id == $season_one->id)
                        <a class="season-link-active"
                           href="/teams/standings/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @else
                        <a class="season-link"
                           href="/teams/standings/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @endif
                @endforeach
            </div>
            <div class="block-season-matches center-block">
                <div class="block-season-matches-header">
                    <a href="/teams/matches" class="block-index-page-next-math-no-active">ЗІГРАНІ МАТЧІ</a>

                    <a href="/teams/standings" class="block-index-page-next-math block-index-page-border">ТУРНІРНА
                        ТАБЛИЦЯ</a>

                    <a class="block-index-page-next-math-no-active">ЗВІТ МАТЧІВ</a>

                </div>
                <div class="block-season-matches-body">
                    <div class="block-season-matches-body-body">
                        <table class="table">
                            <thead>
                            <tr style="width: 100%;">
                                <th width="5%">№</th>
                                <th width="40%">КОМАНДА</th>
                                <th width="5%" style="text-align: center">І</th>
                                <th width="5%" style="text-align: center">В</th>
                                <th width="5%" style="text-align: center">Н</th>
                                <th width="5%" style="text-align: center">П</th>
                                <th width="5%" style="text-align: center">Г</th>
                                <th width="5%" style="text-align: center">М</th>
                                <th width="5%" style="text-align: center">+\-</th>
                                <th width="5%" style="text-align: center">О</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($season_one->standings as $standings)
                                <tr>
                                    <th width="5%">{{$i++}}</th>
                                    <th width="40%">
                                        <img class="teams-images-logo-small"
                                             src="/uploads/team_logotype/small/{{$next_matches->next_and_last_teams[0]->team->logotype}}"/>
                                        {{$standings->team->title}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_games}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_win}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_draw}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_loser}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_goals}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->count_missing}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->difference}}
                                    </th>
                                    <th width="5%" style="text-align: center">
                                        {{$standings->points}}
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop