<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ (config('admin.secure') == true)?str_replace('http:', 'https:', $paginator->previousPageUrl()):$paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
    @if (is_string($element))
    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
    @endif

    <!-- Array Of Links -->
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ (config('admin.secure') == true)?str_replace('http:', 'https:', $url):$url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <li class="page-item"><a class="page-link" href="{{ (config('admin.secure') == true)?str_replace('http:', 'https:', $paginator->nextPageUrl()):$paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    @else
    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
    @endif
</ul>
