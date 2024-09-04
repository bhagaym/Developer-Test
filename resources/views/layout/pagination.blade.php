@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        <li class="page-item previous {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a href="{{ $paginator->onFirstPage() ? '#' : $paginator->previousPageUrl() }}" class="page-link">
                <i class="previous"></i>
            </a>
        </li>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a href="{{ $page == $paginator->currentPage() ? '#' : $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        <li class="page-item next {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
            <a href="{{ $paginator->hasMorePages() ? $paginator->nextPageUrl() : '#' }}" class="page-link">
                <i class="next"></i>
            </a>
        </li>
    </ul>
@endif
