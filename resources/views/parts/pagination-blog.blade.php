@if ($paginator->hasPages())
    <section class="align-center">
        <hr>

        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="button small disabled">Предыдущая</span>
                </li>
            @else
                <li>
                    <a class="button small" href="{{ $paginator->previousPageUrl() }}" rel="prev">Предыдущая</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span>…</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="page active" href="{{ $url }}">{{ $page }}</a></li>
                        @else
                            <li><a class="page" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="button small" href="{{ $paginator->nextPageUrl() }}" rel="next">Следующая</a>
                </li>
            @else
                <li><span class="small button disabled">Следующая</span></li>
            @endif
        </ul>
    </section>
@endif
