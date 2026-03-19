@if ($senior->lastPage() > 1)
    <nav>
        <ul class="pagination justify-content-center">

            {{-- Previous Page Link --}}
            @if ($senior->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $senior->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Active Page Number --}}
            <li class="page-item active" aria-current="page">
                <span class="page-link">{{ $senior->currentPage() }}</span>
            </li>

            {{-- Next Page Link --}}
            @if ($senior->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $senior->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.next')</span>
                </li>
            @endif

        </ul>
    </nav>
@endif
