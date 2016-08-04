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
                <b class="body-header-block-title-second">СТАТУТ КФС</b>
            </div>
            <br>

        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="regulations-block">
                    @foreach($kfc_regulations_number_get as $item)
                        @if($kfc_regulations_number->id == $item->regulations_number)
                            <div class="regulations-block-number-active">
                                <a href="/kfc/regulations/{{ $item->regulations_number }}">
                                    {{ $item->regulations_number }}
                                </a>

                                <div class="regulations-block-number-triangle-active"></div>
                            </div>
                        @else
                            <div class="regulations-block-number">
                                <a href="/kfc/regulations/{{ $item->regulations_number }}">
                                    {{ $item->regulations_number }}
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
                <b class="body-header-block-title-first">{{$kfc_regulations_number->regulations_number}}. ЗАГАЛЬНІ
                    ПОЛОЖЕННЯ</b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="regulations-block-list-terms">
                    <div class="regulations-block-list-terms-text">
                        @foreach($kfc_regulations_number->kfc_regulations_terms as $item)
                            <p class="regulations-block-list-terms-text-p">{{$kfc_regulations_number->regulations_number}}
                                .{{$item->number}}. &#160;&#160;{!! $item->body !!}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop