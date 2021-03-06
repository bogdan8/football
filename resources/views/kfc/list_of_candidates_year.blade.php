@extends('layouts.app')
@section('content')
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КФС</b>
            </div>
            <br>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">СПИСОК ПРЕТЕНДЕНТІВ</b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="list-candidates-block">
                    <div class="list-candidates-block-people">
                        <?php $i = 1; ?>
                        @foreach($candidates_year->kfc_list_of_candidates_people as $list_people)
                            <p class="list-candidates-block-people-name">{{$i++}}
                                &#160;&#160;&#160;&#160;&#160;{{$list_people->initials}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="list-candidates-block-years">
                    @foreach($candidates_year_all as $item)
                        @if($item->years == $candidates_year->years)
                            <div class="list-candidates-block-year-active">
                                <div class="list-candidates-block-year-active-corner"></div>
                                <div class="list-candidates-block-year-active-link">
                                <a class="list-candidates-block-year-name-active"
                                   href="/kfc/list_of_candidates/{{ $item->years }}">{{ $item->years }}
                                    РОКИ</a>
                                </div>
                            </div>
                        @else
                            <div class="list-candidates-block-year">
                                <a class="list-candidates-block-year-name"
                                   href="/kfc/list_of_candidates/{{ $item->years }}">{{ $item->years }}
                                    РОКИ</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop