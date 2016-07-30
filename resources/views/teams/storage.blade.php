@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КОМАНДА Ю - 18 </b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">Склад</b>
            </div>
        </div>
        <br>

        <div class="container body-header-block-image">
            <div class="row">
                <div class="storage-header-image-block">
                    <img src="/uploads/team_logo_y_18/original/{{$team_logo->image}}" class="storage-header-image">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="storage-body-block">
                <div class="storage-body-block-header">
                    <p>СПИСОК ГРАВЦІВ</p>
                </div>
                <div class="storage-body-block-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Позиція</th>
                            <th style="width: 10%;">Номер</th>
                            <th>ПІБ-гравця</th>
                            <th style="text-align: center;">Дата народження</th>
                            <th style="text-align: center;">№ ліцензій</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($team_peoples_position as $position)
                            <?php
                            if (count($position->team_peoples) > 1) {
                                $count = TRUE;
                                $number = 0;
                            } else {
                                $count = FALSE;
                            }
                            ?>
                            @foreach($position->team_peoples as $info)
                                @if($count)
                                    <tr style="border: none">
                                        @if($number == 0)
                                            <td class="storage-table-name-position">
                                                <p>{{$position->name}}</p>
                                            </td>
                                            <?php $number++; ?>
                                        @else
                                            <td></td>
                                        @endif
                                        <td style="display: flex;">
                                            <div class="storage-table-number-people">
                                                <p>{{$info->number_people}}</p>
                                            </div>
                                            <div class="storage-table-number-image-people">
                                                <img src="/uploads/team_peoples/small/{{$info->image}}">
                                            </div>
                                        </td>
                                        <td style="text-align: left;">
                                            <p>Прізвище: {{$info->last_name}}</p>

                                            <p>Ім'я: {{$info->name}}</p>
                                        </td>
                                        <td>
                                            <p>{{$info->date_of_birth}}</p>
                                        </td>
                                        <td>
                                            <p>{{$info->license_number}}</p>
                                        </td>
                                    </tr>
                                @else
                                    <tr style="border-top: 2px solid #698DAD;">
                                        <td class="storage-table-name-position">
                                            <p>{{$position->name}}</p>
                                        </td>
                                        <td style="display: flex;">
                                            <div class="storage-table-number-people">
                                                <p>{{$info->number_people}}</p>
                                            </div>
                                            <div class="storage-table-number-image-people">
                                                <img src="/uploads/team_peoples/small/{{$info->image}}">
                                            </div>
                                        </td>
                                        <td style="text-align: left;">
                                            <p>Прізвище: {{$info->last_name}}</p>

                                            <p>Ім'я: {{$info->name}}</p>
                                        </td>
                                        <td>
                                            <p>{{$info->date_of_birth}}</p>
                                        </td>
                                        <td>
                                            <p>{{$info->license_number}}</p>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            <?php
                            $number = 0;
                            $count = 0;
                            ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop