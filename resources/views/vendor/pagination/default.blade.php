<style>
    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        width: 100%;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem;
        margin-right: 10px;
        align-items: center;
        justify-content: center;
    }

    .pagination-item {
        margin: 0 2px;
    }

    .pagination-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .pagination-link:hover {
        color: #0056b3;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .pagination-item.disabled .pagination-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
        border-color: #dee2e6;
    }

    .pagination-goto {
        display: flex;
        align-items: center;
    }

    .pagination-form {
        display: flex;
        align-items: center;
    }

    .pagination-input {
        width: 80px;
        padding: 0.5rem 0.75rem;
        margin-right: 5px;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        line-height: 1.25;
        text-align: center;
    }

    .pagination-input:focus {
        outline: none;
        border-color: #007bff;
    }

    .pagination-submit {
        padding: 0.5rem 0.75rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 0.25rem;
        line-height: 1.25;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .pagination-submit:hover {
        background-color: #0056b3;
    }
</style>

@if ($paginator->hasPages())
<nav class="pagination-container">
    <ul class="pagination">
        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="pagination-item disabled" aria-disabled="true">
            <span class="pagination-link">
                <i class="fas fa-angles-left"></i> <!-- Double Chevron Left -->
            </span>
        </li>
        @else
        <li class="pagination-item">
            <a class="pagination-link" href="{{ $paginator->url(1) }}" rel="first">
                <i class="fas fa-angles-left"></i> <!-- Double Chevron Left -->
            </a>
        </li>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="pagination-item disabled" aria-disabled="true">
            <span class="pagination-link">
                <i class="fas fa-chevron-left"></i> <!-- Single Chevron Left -->
            </span>
        </li>
        @else
        <li class="pagination-item">
            <a class="pagination-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <i class="fas fa-chevron-left"></i> <!-- Single Chevron Left -->
            </a>
        </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="pagination-item">
            <a class="pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                <i class="fas fa-chevron-right"></i> <!-- Single Chevron Right -->
            </a>
        </li>
        @else
        <li class="pagination-item disabled" aria-disabled="true">
            <span class="pagination-link">
                <i class="fas fa-chevron-right"></i> <!-- Single Chevron Right -->
            </span>
        </li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="pagination-item">
            <a class="pagination-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="last">
                <i class="fas fa-angles-right"></i> <!-- Double Chevron Right -->
            </a>
        </li>
        @else
        <li class="pagination-item disabled" aria-disabled="true">
            <span class="pagination-link">
                <i class="fas fa-angles-right"></i> <!-- Double Chevron Right -->
            </span>
        </li>
        @endif
    </ul>

    {{-- Go to Page Input --}}
    <div class="pagination-goto">
        <form action="{{ url()->current() }}" method="GET" class="pagination-form">
            <input type="number" name="page" class="pagination-input" min="1" max="{{ $paginator->lastPage() }}"
                placeholder="Page" value="{{ $paginator->currentPage() }}" />
            <button type="submit" class="pagination-submit">Go</button>
        </form>
    </div>
</nav>
@endif