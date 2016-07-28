<div class="block-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach($menus as $item)
                    @if(count($item->subparagraph) == 0)
                        <li><a href="{{ $item->url }}">{{$item->title}}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{$item->title}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($item->subparagraph as $subparagraph)
                                    <li><a href="{{$subparagraph->url}}">{{$subparagraph->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>