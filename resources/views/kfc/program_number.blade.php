@extends('layouts.app')
@section('content')
    <style>
        p {
            color: white;
        }
    </style>
    <div class="body-header-block">
        <div class="container">
            <div class="row">
                <b class="body-header-block-title-first">КФС</b>
            </div>
            <br>

            <div class="row">
                <b class="body-header-block-title-second">ПРОГРАМА КФС</b>
            </div>
            <br>

        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="regulations-block">
                    <div class="regulations-block-number-active">
                        <a href="/kfc/program/{{ $kfc_program_number[0]->program_number }}">
                            {{ $kfc_program_number[0]->program_number }}
                        </a>

                        <div class="regulations-block-number-triangle-active"></div>
                    </div>
                    <?php for($i = 1;$i < count($kfc_program_number); $i++ ){ ?>
                    <div class="regulations-block-number">
                        <a href="/kfc/program/{{ $kfc_program_number[$i]->program_number }}">
                            {{ $kfc_program_number[$i]->program_number }}
                        </a>

                        <div class="regulations-block-number-triangle"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="body-header-block">
        <div class="container">
            <br>

            <div class="row">
                <b class="body-header-block-title-first">{{$kfc_program_number[0]->id}} ЗАГАЛЬНІ ПОЛОЖЕННЯ</b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="regulations-block-list-terms">
                    <div class="regulations-block-list-terms-text">
                        @foreach($kfc_program_number[0]->kfc_program_terms as $item)
                            <p class="regulations-block-list-terms-text-p">{{$kfc_program_number[0]->id}}
                                .{{$item->number}}. &#160;&#160;{!! $item->body !!}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop