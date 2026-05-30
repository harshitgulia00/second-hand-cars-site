@if ($paginator->hasPages())
<nav class="flex justify-center mt-16">

    <div class="flex items-center gap-3 flex-wrap">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 rounded-xl border border-[#3a2c1c] bg-[#1a140d] text-gray-500 cursor-not-allowed">
                Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               class="px-4 py-2 rounded-xl border border-amber-500/20 bg-[#221a10] text-amber-300 hover:bg-amber-400 hover:text-black transition-all duration-300">
                Prev
            </a>
        @endif

        {{-- Pages --}}
        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="px-3 py-2 text-gray-500">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <span class="px-4 py-2 rounded-xl bg-gradient-to-r from-amber-400 to-orange-500 text-black font-bold shadow-lg shadow-orange-500/30">
                            {{ $page }}
                        </span>

                    @else

                        <a href="{{ $url }}"
                           class="px-4 py-2 rounded-xl border border-[#3a2c1c] bg-[#1a140d] text-[#f4ead8] hover:border-amber-400 hover:text-amber-300 hover:-translate-y-1 transition-all duration-300">
                            {{ $page }}
                        </a>

                    @endif

                @endforeach
            @endif

        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="px-4 py-2 rounded-xl border border-amber-500/20 bg-[#221a10] text-amber-300 hover:bg-amber-400 hover:text-black transition-all duration-300">
                Next
            </a>
        @else
            <span class="px-4 py-2 rounded-xl border border-[#3a2c1c] bg-[#1a140d] text-gray-500 cursor-not-allowed">
                Next
            </span>
        @endif

    </div>

</nav>
@endif