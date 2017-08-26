@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link btn btn-imfo btn-read-more"> < </span></li>
        @else
            <li class="page-item"><a class="page-link btn btn-imfo btn-read-more" href="{{ $paginator->previousPageUrl() }}#event" rel="prev"> < </a></li>
        @endif
    </ul>

    <ul class="pagination">
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link btn btn-imfo btn-read-more" href="{{ $paginator->nextPageUrl() }}#event" rel="next"> > </a></li>
        @else
            <li class="page-item disabled"><span class="page-link btn btn-imfo btn-read-more"> > </span></li>
        @endif
    </ul>
@endif
