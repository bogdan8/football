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
            <div class="col-lg-7">
                <div class="list-candidates-block">
                    <div class="list-candidates-block-people">
                        <?php $i = 1; ?>
                        @foreach($candidates_year[0]->kfc_list_of_candidates_people as $list_people)
                            <p class="list-candidates-block-people-name">{{$i++}}
                                &#160;&#160;&#160;&#160;&#160;{{$list_people->initials}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="list-candidates-block-years">
                    <div class="list-candidates-block-year-active">
                        <div class="list-candidates-block-year-active-corner"></div>
                        <a class="list-candidates-block-year-name-active"
                           href="/kfc/list_of_candidates/{{ $candidates_year[0]->years }}">{{ $candidates_year[0]->years }}
                            РОКИ</a>
                    </div>
                    <?php for ($j = 1; $j < count($candidates_year); $j++) { ?>
                    <div class="list-candidates-block-year">
                        <a class="list-candidates-block-year-name"
                           href="/kfc/list_of_candidates/{{ $candidates_year[$j]->years }}">{{ $candidates_year[$j]->years }}
                            РОКИ</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
@stop