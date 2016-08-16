<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <title>Сторінку незнайдено.</title>
    <style>
        body {
            width: 98%;
            height: 100%;
            background-color: #BFDDF5;
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1, startColorstr=#BFDDF5, endColorstr=#EFF6FD);
            background-image: -moz-linear-gradient(left, #BFDDF5 0%, #EFF6FD 48%, #BFDDF5 100%);
            background-image: linear-gradient(left, #BFDDF5 0%, #EFF6FD 48%, #BFDDF5 100%);
            background-image: -webkit-linear-gradient(left, #BFDDF5 0%, #EFF6FD 48%, #BFDDF5 100%);
            background-image: -o-linear-gradient(left, #BFDDF5 0%, #EFF6FD 48%, #BFDDF5 100%);
            background-image: -ms-linear-gradient(left, #BFDDF5 0%, #EFF6FD 48%, #BFDDF5 100%);
            background-image: -webkit-gradient(linear, left bottom, right bottom, color-stop(0%, #BFDDF5), color-stop(48%, #EFF6FD), color-stop(100%, #BFDDF5));
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }

        .block1 {
            width: 400px;
            height: 150px;
            background-color: #96BBD8;
            margin-bottom: 10px;
        }

        .block2 {
            width: 400px;
            height: 50px;
            background-color: #96BBD8;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .block2 .error {
            color: white;
            font-size: 40px;
        }

        .block2 .p-page-not-found {
            color: white;
            font-size: 20px;
        }

        .block3 {
            width: 400px;
            height: 100px;
            background-color: #96BBD8;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .block3 .p-404 {
            color: white;
            font-size: 120px;
        }

        .block3 a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fa-arrow-left {
            margin-top: -5px;
        }
    </style>
</head>
<body>
<div class="block1">

</div>
<div class="block2">
    <p class="error">ПОМИЛКА</p>
</div>
<div class="block3">
    <p class="p-404">404</p>
</div>
<div class="block2">
    <p class="p-page-not-found">СТОРІНКА НЕЗНАЙДЕНА</p>
</div>
<div class="block2">

</div>
<div class="block3">
    <a href="/">
        <p>ПЕРЕЙТИ НА ГОЛОВНУ &nbsp;&nbsp;&nbsp;</p>
        <i class="fa fa-2x fa-arrow-left" aria-hidden="true"></i>
    </a>
</div>
</body>
</html>