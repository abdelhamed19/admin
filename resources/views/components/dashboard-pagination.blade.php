<div class="pagination-container">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <span class="pagination-button disabled">Previous</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-button">Previous</a>
    @endif

    {{-- Pagination Links --}}
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        @if ($i == $paginator->currentPage())
            <span class="pagination-link active">{{ $i }}</span>
        @else
            <a href="{{ $paginator->url($i) }}" class="pagination-link">{{ $i }}</a>
        @endif
    @endfor

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-button">Next</a>
    @else
        <span class="pagination-button disabled">Next</span>
    @endif
</div>
