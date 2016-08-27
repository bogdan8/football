<img class="footer-background" src="/images/footer/footer_background.jpg">
<div class="footer-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="footer-block-left">

                    <img class="footer-emblema" src="/images/footer/emblema.png">

                    <p>© 2016-2020 КФС</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="footer-block-center">
                    <p>Сайт зроблений
                        для розвитку коршівського футболу</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="footer-block-right">
                    @if($menus)
                        @foreach($menus as $item)
                            <a href="{{ $item->url }}">{{$item->title}}</a><br/>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>