@extends('layouts.app')
@section('content')

    <h4>Збір грошей на спортивний майданчик</h4>
    <pre>
        {{$donate->title}}
        {{$donate->collected_money}} - зібрано
        {{$donate->need_money}} - потрібно
        відсоток:{{$interest}}%
    </pre>
    <h4>Новини</h4>
    <pre>
    @foreach($news as $item)
            Назва: {!! $item->title !!}
            Дата: {!! $item->date_news !!}
            Текст: {!! $item->body !!}
            середня картинка<img width="50px" height="50px" src="/uploads/news/medium/{{$item->image}}"/>
            оригіна<img width="50px" height="50px" src="/uploads/news/original/{{$item->image}}"/>
            маленька картинка <img width="50px" height="50px" src="/uploads/news/small/{{$item->image}}"/><br/>
            Відео:
            <div style="height: 50px;width: 50px;">{!! $item->video !!}</div>
            <a class="btn btn-success"
               href="/news/{{$item->slug}}">Повна новина</a>
        @endforeach
    </pre>
    <h4>Зіграні матчі Дорослі</h4>
    <pre>
    @foreach($matches_played_adult as $item)
            Тур: {!! $item->tour !!}
            Дата: {!! $item->date_played !!}
            Назва першої команди: {!! $item->title_one_team !!}
            Голи першої команди: {!! $item->count_one_team !!}
            Назва другої команди: {!! $item->title_second_team !!}
            Голи другої команди: {!! $item->count_second_team !!}
        @endforeach
    </pre>
    <h4>Зіграні матчі Діти</h4>
    <pre>
    @foreach($matches_played_young as $item)
            Тур: {!! $item->tour !!}
            Дата: {!! $item->date_played !!}
            Назва першої команди: {!! $item->title_one_team !!}
            Голи першої команди: {!! $item->count_one_team !!}
            Назва другої команди: {!! $item->title_second_team !!}
            Голи другої команди: {!! $item->count_second_team !!}
        @endforeach
    </pre>
    <h4>Турнірна таблиця Дорослі</h4>
    <pre>
    @foreach($standings_adult as $item)
            Старі або діти:{{$item->adult->title}}
            Команда: {!! $item->team->title !!}
            оригіна<img width="50px" height="50px" src="/uploads/team_logotype/original/{{$item->team->logotype}}"/>
            маленький логотип <img width="50px" height="50px" src="/uploads/team_logotype/small/{{$item->team->logotype}}"/>
            Кількість ігор: {!! $item->count_games !!}
            Кількість перемог: {!! $item->count_win !!}
            Кількість нічиїх: {!! $item->count_draw !!}
            Кількість проіграшів: {!! $item->count_loser !!}
            Кількість забитих голів: {!! $item->count_goals !!}
            Кількість пропущених голів: {!! $item->count_missing !!}
            Різниця: {!! $item->difference !!}
            Кількість очків: {!! $item->points !!}
        @endforeach
    </pre>
    <h4>Турнірна таблиця Діти</h4>
    <pre>
    @foreach($standings_young as $item)
            Старі або діти:{{$item->adult->title}}
            Команда: {!! $item->team->title !!}
            оригіна<img width="50px" height="50px" src="/uploads/team_logotype/original/{{$item->team->logotype}}"/>
            маленький логотип <img width="50px" height="50px" src="/uploads/team_logotype/small/{{$item->team->logotype}}"/>
            Кількість ігор: {!! $item->count_games !!}
            Кількість перемог: {!! $item->count_win !!}
            Кількість нічиїх: {!! $item->count_draw !!}
            Кількість проіграшів: {!! $item->count_loser !!}
            Кількість забитих голів: {!! $item->count_goals !!}
            Кількість пропущених голів: {!! $item->count_missing !!}
            Різниця: {!! $item->difference !!}
            Кількість очків: {!! $item->points !!}
        @endforeach
    </pre>
    <h4>Список людей які внесли пожертви</h4>
    <pre>
    @foreach($donate_people as $item)
            Імя: {!! $item->title !!}
            Дата пожертви: {!! $item->date !!}
            Кількість грошей: {!! $item->count_money !!}грн
        @endforeach
    </pre>
@stop