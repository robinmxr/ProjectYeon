@if ($paginator->hasPages())
    <nav>
    <ul class="pagination justify-content-center">

        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span>← Previous</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><span>{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="page-item disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif
    </nav>
