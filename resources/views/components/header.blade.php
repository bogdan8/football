<div class="header-block-raising-money-for-playground">
    <div class="header-block-raising-money-for-playground-title">
        <b>КОРШІВСЬКИЙ ФУТБОЛЬНИЙ СОЮЗ</b>
    </div>
    @if($donate)
        <div class="header-block-raising-money-for-playground-interest">
            <div class="header-block-raising-money-for-playground-interest-title">
                <b>{{$donate->title}}</b>
            </div>
            <div class="header-block-raising-money-for-playground-interest-value">
                <b>{{ substr($interest, 0, 4)}}%</b>

                <div class="header-block-raising-money-for-playground-interest-value-line"
                     style="width: {{ substr($interest, 0, 4)}}%">
                </div>
            </div>
            <div class="header-block-raising-money-for-playground-bottom">
                <p class="header-block-raising-money-for-playground-collected">
                    Зібрано {{$donate->collected_money}} грн
                </p>

                <p class="separate-slash">|</p>

                <p class="header-block-raising-money-for-playground-collected">
                    Потрібна сума {{$donate->need_money}} грн
                </p>
            </div>
        </div>
    @endif
    <a href="/"><img src="/images/header/emblema.jpg" class="header-logo "></a>
</div>
<nav class="nav-bar">
    <div class="container-fluid">
        <div id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($menus as $item)
                    @if(count($item->subparagraph) == 0)
                        @if($item->url == $URL)
                            <li><a class="nav-li-active" href="{{ $item->url }}">{{$item->title}}</a></li>
                        @else
                            <li><a class="nav-li" href="{{ $item->url }}">{{$item->title}}</a></li>
                        @endif
                    @else
                        <li class="dropdown">
                            @if($item->url == '/'.$url_for_dropdown)
                                <a class="nav-li-active" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">{{$item->title}}
                                    <span class="caret"></span>
                                </a>
                            @else
                                <a class="nav-li" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{$item->title}}
                                    <span class="caret"></span>
                                </a>
                            @endif
                            <ul class="dropdown-menu">
                                @foreach($item->subparagraph as $subparagraph)
                                    <li><a href="{{$subparagraph->url}}">{{$subparagraph->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<div class="nav-bar-subparagraph">
    <?php
    $sub_url = substr($URL, 1, 50);
    $nav_url = '/' . stristr($sub_url, '/', true);
    ?>
    @foreach($menus as $item)
        @if($item->url === $nav_url)
            @foreach($item->subparagraph as $subparagraph)
                @if($URL == $subparagraph->url)
                    <a class="nav-li-active" href="{{$subparagraph->url}}"
                       class="nav-bar-a">{{$subparagraph->title}}</a>
                @else
                    <a href="{{$subparagraph->url}}" class="nav-bar-a">{{$subparagraph->title}}</a>
                @endif
            @endforeach
        @endif
    @endforeach
</div>