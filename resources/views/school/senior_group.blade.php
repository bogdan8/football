@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">ДЮСША</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ТРЕНУВАЛЬНИЙ ПРОЦЕС</b>
            </div>
        </div>
        <br>
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
                    $monthes_number = date_create($browsing_history[0]->date_visit)->Format('m');
                    $date = $monthes[$monthes_number] . date_create($browsing_history[0]->date_visit)->Format('Y');
                    ?>
                    <a href="/school/senior_group_people/{{$browsing_history[0]->date_visit}}">
                        <
                    </a>

                    <p>Журнал відвідування за {{$date}}</p>
                    <a class="" href="/school/senior_group_people/{{$browsing_history[1]->date_visit}}">
                        >
                    </a>
                </div>
                <thead>
                <tr style="width: 100%;">
                    <th width="3%">№</th>
                    <th width="30%">Прізвище Ім'я Побатькові</th>
                    @foreach($browsing_history[0]->browsing_history_people_day_in_month_school[0]->browsing_history_people_day_school as $day)
                        <th>{{$day->day_visit}}</th>
                    @endforeach
                    <th></th>
                    <th>всь-го</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($browsing_history[0]->browsing_history_people_day_in_month_school as $people)
                    @if($people->adult->id == 2)
                        <?php $count = 0; ?>
                        <tr style="width: 100%;">
                            <th>{{$i++}}</th>
                            <th>{{$people->name_people}}</th>
                            @foreach($people->browsing_history_people_day_school as $day)
                                <th>{{$day->count_visit}}</th>
                                <?php $count += $day->count_visit; ?>
                            @endforeach
                            <th></th>
                            <th>{{$count}}</th>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop