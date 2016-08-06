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
                    @foreach($kfc_program_number_get as $item)
                        @if($kfc_program_number->id == $item->program_number)
                            <div class="regulations-block-number-active">
                                <a href="/kfc/program/{{ $item->program_number }}">
                                    {{ $item->program_number }}
                                </a>

                                <div class="regulations-block-number-triangle-active"></div>
                            </div>
                        @else
                            <div class="regulations-block-number">
                                <a href="/kfc/program/{{ $item->program_number }}">
                                    {{ $item->program_number }}
                                </a>

                                <div class="regulations-block-number-triangle"></div>
                            </div>

                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="body-header-block">
        <div class="container">
            <br>

            <div class="row">
                <b class="body-header-block-title-first">{{$kfc_program_number->program_number}}. ЗАГАЛЬНІ
                    ПОЛОЖЕННЯ</b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="regulations-block-list-terms">
                    <div class="regulations-block-list-terms-text">
                        @foreach($kfc_program_number->kfc_program_terms as $item)
                            <p class="regulations-block-list-terms-text-p">{{$kfc_program_number->program_number}}
                                .{{$item->number}} &#160;&#160;{!! $item->body !!}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop