@if ($pager->lastPage() > 1)
    <ul class="my-pagination">
        <li class="{{ ($pager->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $pager->url(1) }}">Початок</a>
        </li>
        <li class="{{ ($pager->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $pager->url($pager->currentPage()-1) }}"><<</a>
        </li>
        @for ($i = 1; $i <= $pager->lastPage(); $i++)
            <li class="{{ ($pager->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $pager->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($pager->currentPage() == $pager->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $pager->url($pager->currentPage()+1) }}" >>></a>
        </li>
        <li class="{{ ($pager->currentPage() == $pager->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $pager->url($pager->lastPage()) }}" >Кінець</a>
        </li>
    </ul>
@endif