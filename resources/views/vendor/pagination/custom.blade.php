<style>
    .pagination-wrap{

    width:100%;

    display:flex;

    align-items:center;

    justify-content:center;

    gap:18px;

    margin-top:80px;

    flex-wrap:wrap;

}



.pg-btn{

    height:62px;

    min-width:130px;

    padding:0 28px;

    border-radius:20px;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:1.1rem;

    font-weight:600;

    text-decoration:none;

    transition:0.35s ease;

    border:1px solid transparent;

}



.pg-btn.purple{

    color:#bb6cff;

    border-color:rgba(187,108,255,0.4);

    background:rgba(90,40,140,0.12);

    box-shadow:
      0 0 25px rgba(187,108,255,0.18);

}



.pg-btn.gold{

    color:#ffc76b;

    border-color:rgba(255,199,107,0.35);

    background:rgba(255,170,70,0.06);

    box-shadow:
      0 0 25px rgba(255,170,70,0.14);

}



.pg-btn:hover{

    transform:translateY(-4px);

}



.pg-btn.purple:hover{

    background:#a855f7;

    color:white;

}



.pg-btn.gold:hover{

    background:#ffb347;

    color:#1a120b;

}



.pg-btn.disabled{

    opacity:.35;

    pointer-events:none;

}



.pg-numbers{

    display:flex;

    align-items:center;

    gap:14px;

    flex-wrap:wrap;

}



.pg-number{

    width:58px;

    height:58px;

    border-radius:18px;

    display:flex;

    align-items:center;

    justify-content:center;

    text-decoration:none;

    color:#f3e9dc;

    font-size:1.1rem;

    transition:0.35s ease;

}



.pg-number:hover{

    background:rgba(255,255,255,0.05);

    transform:translateY(-3px);

}



.pg-number.active{

    background:rgba(187,108,255,0.12);

    border:1px solid rgba(187,108,255,0.45);

    color:#d28cff;

    box-shadow:
      0 0 30px rgba(187,108,255,0.28);

}



.pg-dots{

    color:#777;

    font-size:1.2rem;

}
</style>

@if ($paginator->hasPages())

<div class="pagination-wrap">

    {{-- PREV --}}
    @if ($paginator->onFirstPage())

        <span class="pg-btn disabled">
            ‹ Prev
        </span>

    @else

        <a href="{{ $paginator->previousPageUrl() }}" class="pg-btn purple">
            ‹ Prev
        </a>

    @endif



    {{-- PAGE NUMBERS --}}
    <div class="pg-numbers">

        @foreach ($elements as $element)

            @if (is_string($element))

                <span class="pg-dots">{{ $element }}</span>

            @endif



            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <span class="pg-number active">
                            {{ $page }}
                        </span>

                    @else

                        <a href="{{ $url }}" class="pg-number">
                            {{ $page }}
                        </a>

                    @endif

                @endforeach

            @endif

        @endforeach

    </div>



    {{-- NEXT --}}
    @if ($paginator->hasMorePages())

        <a href="{{ $paginator->nextPageUrl() }}" class="pg-btn gold">
            Next ›
        </a>

    @else

        <span class="pg-btn disabled">
            Next ›
        </span>

    @endif

</div>

@endif