
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
    
      {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage() )
      <li class="page-item disabled">
          <a href="#" class="page-link">Anterior</a>
      </li>
        @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link">Anterior</a>
        </li>
        @endif 

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item ">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">Pŕoximo</a>
            </li>
        @else
            <li class="page-item disabled">
                <a  class="page-link">Pŕoximo</a>
            </li>
        @endif


    </ul>
  </nav>
  @endif