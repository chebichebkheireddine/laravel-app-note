<div class="flex flex-wrap items-center justify-center space-x-2 text-sm text-gray-500 font-medium bg-white py-2 px-4 border border-gray-200 rounded-3xl"
    dir="rtl">

    <a href="{{ route('home') }}" class="flex items-center gap-1 hover:text-purple-400">
        <i class="fa-solid fa-house"></i>
    </a>
    @foreach ($items as $item)
        <span><i class="fa-solid fa-chevron-left"></i>
        </span>

        @if (!$loop->last)
            <a class="flex items-center gap-1 hover:text-purple-400" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @else
            <span class="flex items-center gap-1 text-purple-500 text-base">{{ $item['label'] }}</span>
        @endif
    @endforeach

</div>
