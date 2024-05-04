<div class="h-10 flex justify-between py-3 px-10 relative z-20 bg-white ">
    <div class="relative flex gap-2 bg-white">
        <img src="{{ asset('images/logo_hotel.jpeg') }}" class="w-12 h-12 rounded-full" alt="">
        <p class="leading-[3rem] font-bold text-xl">{{ $title }}</p>

    </div>
    @if ($username != "")
        <p class="bg-white">Buongiorno <span class="font-semibold leading-[3rem]">{{ $username }}</span>!</p>
    @endif
</div>
