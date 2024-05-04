<a href="{{ $link }}"
    class="relative flex items-center py-2 px-3 my-1 font-medium rounded-md cursor-pointer transition-colors {{ $active ? 'bg-gradient-to-r from-blue-200 to-blue-100 text-blue-800' : 'hover:bg-blue-50 text-gray-600' }} group">
    <x-dynamic-component :component="$icon" class="h-7 w-7 " />
    <span class="w-52 ml-3 sidebar-text-item overflow-hidden transition-all">{{ $text }}</span>
    @if ($alert)
        <div class="absolute right-2 w-2 h-2 rounded bg-blue-400"></div>
    @endif
    <div
        class="sidebar-text-item-right hidden absolute invisible opacity-20 -translate-x-3 transition-all group-hover:visible group-hover:opacity-100 group-hover:translate-x-0 left-full rounded-md px-2 py-1 ml-6 bg-blue-100 text-blue-800 text-sm">
        {{ $text }}
    </div>
</a>
@section('javascript')
    <script>
        $(document).ready(function() {
            $(".toggle-sidebar").click(function() {
                $("aside").toggleClass("w-80 w-20");
                $(".left-circle").toggleClass("inline-block hidden")
                $(".right-circle").toggleClass(" hidden inline-block")
                $(".sidebar-text-item").toggleClass("w-52 ml-3 w-0")
                $(".sidebar-text-item-right").toggleClass(" hidden block")
            });
        });
    </script>
@endsection
