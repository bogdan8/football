@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КОМАНДА Ю - 18</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ТРЕНУВАЛЬНИЙ ПРОЦЕС</b>
            </div>
            <br>
            <br>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-browsing-history">
                <div class="browsing-history-block-header">
                    <?php
                    $monthes = array(
                            '01' => 'Січень', '02' => 'Лютий', '03' => 'Березень', '04' => 'Квітень',
                            '05' => 'Травень', '06' => 'Червень', '07' => 'Липень', '08' => 'Серпень',
                            '09' => 'Вересень', '10' => 'Жовтень', '11' => 'Листопад', '12' => 'Грудень'
                    );
                    $monthes_number = date_create($browsing_history_mounts->date_visit)->Format('m');
                    $date = $monthes[$monthes_number] .' '. date_create($browsing_history_mounts->date_visit)->Format('Y');
                    $month = date_create($browsing_history_mounts->date_visit)->Format('m');
                    $is_nul = substr($month, 0, 1);
                    if ($is_nul == 0) {
                        $day = substr($month, 1, 2);
                    } else {
                        $day = $month;
                    }
                    ?>
                    @if($day != 1)
                        <a href="/teams/browsing_history_people/{{$browsing_history[$day-2]->date_visit}}">
                            <
                        </a>
                    @else
                        <a>
                            <
                        </a>
                    @endif
                    <p>Журнал відвідування за {{$date}}</p>
                    @if($day != 12)
                        <a href="/teams/browsing_history_people/{{$browsing_history[$day++]->date_visit}}">
                            >
                        </a>
                    @else
                        <a>
                            >
                        </a>
                    @endif
                </div>
                <thead>
                <tr style="width: 100%;">
                    <th width="3%">№</th>
                    <th width="30%">Прізвище Ім'я Побатькові</th>
                    @if(count($browsing_history_mounts->browsing_history_people_day_in_month) > 0)
                        @foreach($browsing_history_mounts->browsing_history_people_day_in_month[0]->browsing_history_people_day as $day)
                            <th>{{$day->day_visit}}</th>
                        @endforeach
                    @endif
                    <th></th>
                    <th>всь-го</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($browsing_history_mounts->browsing_history_people_day_in_month as $people)
                    <?php $count = 0; ?>
                    <tr style="width: 100%;">
                        <th>{{$i++}}</th>
                        <th>{{$people->name_people}}</th>
                        @foreach($people->browsing_history_people_day as $day)
                            <th>{{$day->count_visit}}</th>
                            <?php $count += $day->count_visit; ?>
                        @endforeach
                        <th></th>
                        <th>{{$count}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop