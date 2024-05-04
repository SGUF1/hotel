<div class="w-full relative flex justify-between items-center border-b my-5 py-5 border-b-black ">
    <div class="relative flex-1">
        <div class="flex gap-3 items-center">
            <x-dynamic-component :component="$icon" class="h-20 w-20" />
            <span class="text-3xl font-bold ">{{ $name }}</span>
        </div>
        <div class="ml-3">{{ $desc }}</div>

    </div>
    <div class="flex flex-col justify-center items-center gap-2">
        @if ($new)
            <a href="{{ route($newHref) }}"
                class="px-10 py-3 hover:bg-blue-300 cursor-pointer border border-gray-800 hover:border-transparent  w-48 text-center transition-colors bg-gray-50 rounded-xl">{{ $new }}</a>
        @endif
        @if ($new2)
            <a href="{{ route($new2Href) }}"
                class="px-10 py-3 hover:bg-yellow-300 cursor-pointer border border-gray-800 hover:border-transparent  w-48 text-center transition-colors bg-gray-50 rounded-xl">{{ $new2 }}</a>
        @endif

    </div>
</div>
