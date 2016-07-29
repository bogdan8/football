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
                <b class="body-header-block-title-second">ЗБІР КОШТІВ</b>
            </div>
        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-spending">
                <thead>
                <tr style="width: 100%;">
                    <th width="5%">№</th>
                    <th width="75%">Прізвище Ім'я Побатькові</th>
                    <th width="10%" style="text-align: center">Дата</th>
                    <th width="10%" style="text-align: center">Сума</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                $sum = 0;
                ?>
                @foreach($kfc_fundraiser as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $item->goods_or_services }}</td>
                        <td style="text-align: center">{{date_create($item->date)->Format('d.m.Y')}}</td>
                        <td style="text-align: center">{{ $item->sum }}.00 грн</td>
                        <?php $sum += $item->sum;?>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table-spending" style="margin-top: -20px">
                <tr class="table-bottom">
                    <td width="5%"></td>
                    <td width="75%"></td>
                    <td width="10%" style="text-align: center" class="table-spending-count-name">ВСЬОГО</td>
                    <td width="10%" style="text-align: center" class="table-spending-count-value">{{$sum}}.00 грн</td>
                </tr>
            </table>
        </div>
    </div>
@stop