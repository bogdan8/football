<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>КОРШІВСЬКИЙ ФУТБОЛЬНИЙ СОЮЗ</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/my.css') }}" rel="stylesheet">
    <script type="text/javascript" src="/js/masonry.min.js"></script>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
    @include('components.header')
</div>
<div class="body">
    <div class="body-header">
    </div>
    <div class="body-block">
        @yield('content')
    </div>
</div>
<div class="footer">
    @include('components.footer')
</div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script id="dsq-count-scr" src="//football-1.disqus.com/count.js" async></script>
</body>
</html>
