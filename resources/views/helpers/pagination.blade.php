@if ($paginator->hasPages())
    <P>
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <A HREF="{{ $paginator->previousPageUrl() }}" REL="prev">Previous</A>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <B>{{ $page }}</B>
                    @else
                        <A HREF="{{ $url }}">{{ $page }}</A>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <A HREF="{{ $paginator->nextPageUrl() }}" REL="next">Next</A>
        @endif
    </P>
@endif
