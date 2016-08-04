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

            <div class="row">
                <b class="body-header-block-title-first">НАСТУПНИЙ МАТЧ</b>
            </div>
            <br>

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
                           href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @else
                        <a class="season-link" href="/matches/season/{{$index->id}}">Сезон {{$index->number_season}}</a>
                    @endif
                @endforeach
            </div>
            <div class="block-season-matches center-block">
                <div class="block-season-matches-header">
                    <p class="block-index-page-next-math block-index-page-border">ЗІГРАНІ МАТЧІ</p>

                    <a href="/teams/standings" class="block-index-page-next-math-no-active">ТУРНІРНА ТАБЛИЦЯ</a>

                    <p class="block-index-page-next-math-no-active">НАСТУПНИЙ МАТЧ</p>

                </div>
                <div class="block-season-matches-body">
                    <div class="block-season-matches-body-header">
                        <a><</a>
                        @foreach($season_one->racing_circles as $racing_circles)
                            @if($racing_circles->number == 1)
                                <p>{{$racing_circles->name}} </p>
                            @elseif($racing_circles->number == 2)
                                <a style="float: left;"
                                   href="/matches/season/{{$season_one->id}}/standings/{{$racing_circles->number}}/racing">></a>
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
                            @if(count($season_one->racing_circles) > 0)
                                @foreach($season_one->racing_circles[0]->matches_tour as $tour)
                                    <tr style="border: 1px solid rgba(102, 102, 102, 0.2);">
                                        <?php
                                        $monthes_number = date_create($tour->date_tour)->Format('m');
                                        $date = $monthes[$monthes_number] . ' ' . date_create($tour->date_tour)->Format('Y');
                                        ?>
                                        <td class="block-season-matches-body-body-tour" style="border: none">
                                            <div>
                                                <p class="block-season-matches-body-body-tour-name">
                                                    ТУР {{$tour->tour}}</p>
                                            </div>
                                            <div>
                                                <p class="block-season-matches-body-body-tour-date">{{$date}}</p>
                                            </div>
                                        </td>
                                        <td>
                                            @foreach($tour->matches_played as $matches_played_team)
                                                <p class="text-center">
                                                    {{$matches_played_team->title_one_team}}
                                                    -
                                                    {{$matches_played_team->title_second_team}}
                                                </p>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($tour->matches_played as $matches_played_team)
                                                <p class="text-center">
                                                    {{$matches_played_team->count_one_team}}
                                                    -
                                                    {{$matches_played_team->count_second_team}}
                                                </p>
                                            @endforeach
                                        </td>
                                        <td>
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
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop