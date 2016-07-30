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
                    @if($index->id == $season[0]->id)
                        <a class="season-link-active"
                           href="/teams/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @else
                        <a class="season-link" href="/teams/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @endif
                @endforeach
            </div>
            <div class="block-season-matches center-block">
                <div class="block-season-matches-header">
                    <a href="/teams/matches" class="block-index-page-next-math block-index-page-border">ЗІГРАНІ МАТЧІ</a>

                    <a href="/teams/standings" class="block-index-page-next-math-no-active">ТУРНІРНА ТАБЛИЦЯ</a>

                    <a class="block-index-page-next-math-no-active">НАСТУПНИЙ МАТЧ</a>

                </div>
                <div class="block-season-matches-body">
                    <div class="block-season-matches-body-header">
                        <a><</a>
                        @foreach($season[0]->racing_circles as $racing_circles)
                            @if($racing_circles->number == 1)
                                <p>{{$racing_circles->name}} </p>
                            @elseif($racing_circles->number == 2)
                                <a style="float: left;"
                                   href="/teams/season/1/standings/{{$racing_circles->number}}/racing">></a>
                            @endif
                        @endforeach
                    </div>
                    <div class="block-season-matches-body-body">
                        <?php
                        $monthes = array(
                                '01' => 'СІЧЕНЬ', '02' => 'ЛЮТИЙ', '03' => 'БЕРЕЗЕНЬ', '04' => 'КВІТЕНЬ',
                                '05' => 'ТРАВЕНЬ', '06' => 'ЧЕРВЕНЬ', '07' => 'ЛИПЕНЬ', '08' => 'СЕРПЕНЬ',
                                '09' => 'ВЕРЕСЕНЬ', '10' => 'ЖОВТЕНЬ', '11' => 'ЛИСТОПАД', '12' => 'ГРУДЕНЬ'
                        );
                        ?>
                        <table class="table table-bordered table-season">
                            <tbody>
                            @foreach($season[0]->racing_circles[0]->matches_tour as $tour)
                                <tr class="match-season-body-tr">
                                    <?php
                                    $monthes_number = date_create($tour->date_tour)->Format('m');
                                    $date = $monthes[$monthes_number] . ' ' . date_create($tour->date_tour)->Format('Y');
                                    ?>
                                    <td class="block-season-matches-body-body-tour" style="border: none; width: 25%">
                                        <p class="block-season-matches-body-body-tour-name">ТУР {{$tour->tour}}</p>

                                        <p class="block-season-matches-body-body-tour-date">{{$date}}</p>
                                    </td>
                                    <td style="width: 25%;">
                                        @foreach($tour->matches_played as $matches_played_team)
                                            <p class="text-center">
                                                {{$matches_played_team->title_one_team}}
                                                -
                                                {{$matches_played_team->title_second_team}}
                                            </p>
                                        @endforeach
                                    </td>
                                    <td style="width: 25%;">
                                        @foreach($tour->matches_played as $matches_played_team)
                                            <p class="text-center">
                                                {{$matches_played_team->count_one_team}}
                                                -
                                                {{$matches_played_team->count_second_team}}
                                            </p>
                                        @endforeach
                                    </td>
                                    <td style="width: 25%;">
                                        @foreach($tour->matches_played as $matches_played_team)
                                            <p class="text-center">
                                                <?php
                                                $monthes_number = date_create($matches_played_team->date_played)->Format('m');
                                                $date = date_create($matches_played_team->date_played)->Format('d') . ', ' . $monthes[$monthes_number] . ' ' . date_create($matches_played_team->date_played)->Format('Y');
                                                ?>
                                                {{$date}}
                                            </p>
                                        @endforeach
                                    </td>
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