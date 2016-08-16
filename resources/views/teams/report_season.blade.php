@extends('layouts.app')
@section('content')
    @include('teams.team_header')
    @if(!empty($next_matches))
        @include('matches.next_matches', $next_matches)
    @endif
    <div class="container">
        <div class="row">
            <div class="number-season">
                @foreach($season as $index)
                    @if($index->id == $season_one->id)
                        <a class="season-link-active"
                           href="/teams/report/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @else
                        @if(count($index->report_tour) > 0)
                            <a class="season-link"
                               href="/teams/report/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="block-season-matches center-block">
                <div class="block-season-matches-header">
                    <a href="/teams/matches" class="block-index-page-next-math-no-active">ЗІГРАНІ
                        МАТЧІ</a>

                    <a href="/teams/standings" class="block-index-page-next-math-no-active">ТУРНІРНА ТАБЛИЦЯ</a>

                    <a href="/teams/report" class="block-index-page-next-math block-index-page-border">ЗВІТИ МАТЧІВ</a>
                </div>
                <div class="block-season-matches-body">
                    <div class="report-block-header">
                        <div class="block-season-matches-body-header">
                            <a><</a>

                            <p>
                                Звіт матчу {{ date_create($season_one->report_tour[0]->date_tour)->Format('d.m.Y')}}
                                тур {{$season_one->report_tour[0]->tour}}
                            </p>
                            @if(count($season_one->report_tour) == $season_one->report_tour[0]->sequence_number)
                                <a>></a>
                            @else
                                <a style="float: left;"
                                   href="/teams/report/season/{{$season_one->id}}/report_tour/{{$season_one->report_tour[0]->sequence_number+1}}/">></a>
                            @endif
                        </div>
                    </div>
                    <div class="report-block-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="report-block-body-image">
                                    <img src="/uploads/report/original/{{$season_one->report_tour[0]->report[0]->image}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">СХЕМА</p>

                                            <p class="report-block-body-description-title-value">
                                                {{$season_one->report_tour[0]->report[0]->scheme}}
                                            </p>

                                            <p class="report-block-body-description-title-last">ТРЕНЕР</p>

                                            <p class="report-block-body-description-title-value-last">
                                                {!! str_replace(' ', '<br>', $season_one->report_tour[0]->report[0]->coach) !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">
                                                {{$season_one->report_tour[0]->report[0]->teams}}
                                            </p>

                                            <p class="report-block-body-description-title-value-goals">
                                                {{$season_one->report_tour[0]->report[0]->teams_goals}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">ГОЛИ</p>
                                            <?php $i = 0; ?>
                                            @foreach($season_one->report_tour[0]->report[0]->report_goals as $goals)
                                                <?php $i++; ?>
                                                <p class="report-block-body-description-title-value-report-goals">
                                                    {{$goals->title_goals}}
                                                </p>
                                                <?php
                                                if ($i >= 3) {
                                                    break;
                                                }
                                                ?>
                                            @endforeach
                                            <?php $i = 0; ?>
                                            <a href="" class="" data-toggle="modal"
                                               data-target="#report_goals">Переглянути всі голи
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="report_goals" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            <p class="report-block-body-description-title">ВСІ ГОЛИ</p>
                                                        </div>
                                                        <div class="modal-body">
                                                            @foreach($season_one->report_tour[0]->report[0]->report_goals as $goals)
                                                                <p class="report-block-body-description-title-value-report-goals">
                                                                    {{$goals->title_goals}}
                                                                </p>
                                                            @endforeach
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">
                                                КРАЩИЙ ГРАВЕЦЬ
                                            </p>

                                            <p class="report-block-body-description-title-value-best-player">
                                                {!! str_replace(' ', '<br>', $season_one->report_tour[0]->report[0]->best_player) !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">ЗАМІНИ</p>
                                            <?php $i = 0; ?>
                                            @foreach($season_one->report_tour[0]->report[0]->report_replacements as $goals)
                                                <?php $i++; ?>
                                                <p class="report-block-body-description-title-value-report-goals">
                                                    {{$goals->title_replacements}}
                                                </p>
                                                <?php
                                                if ($i >= 3) {
                                                    break;
                                                }
                                                ?>
                                            @endforeach
                                            <a href="" class="" data-toggle="modal"
                                               data-target="#report_replacements">Переглянути всі заміни
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="report_replacements" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            <p class="report-block-body-description-title">ВСІ
                                                                ЗАМІНИ</p>
                                                        </div>
                                                        <div class="modal-body">
                                                            @foreach($season_one->report_tour[0]->report[0]->report_replacements as $goals)
                                                                <p class="report-block-body-description-title-value-report-goals">
                                                                    {{$goals->title_replacements}}
                                                                </p>
                                                            @endforeach
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="report-block-body-description">
                                            <p class="report-block-body-description-title">ПРГОГРЕС В ТАЛИЦІ</p>

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>І</th>
                                                    <th>В</th>
                                                    <th>Н</th>
                                                    <th>П</th>
                                                    <th>Г</th>
                                                    <th>М</th>
                                                    <th>+\-</th>
                                                    <th>О</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_games}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_win}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_draw}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_loser}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_goals}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->count_missing}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->difference}}
                                                    </th>
                                                    <th>
                                                        {{$season_one->report_tour[0]->report[0]->points}}
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop