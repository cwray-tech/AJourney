@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex flex-col items-center space-y-2 justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="icon-button px-3">
                Previous
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="icon-button px-3">
                Continue Reading Journey
            </a>
        @endif
    </nav>
@endif
