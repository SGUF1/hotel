<div class="border flex flex-col gap-4 px-14 py-5 rounded-xl items-center justify-center"
    style="background: {{ $color }}">
    <x-dynamic-component :component="$icon" class="h-6 w-6" />
    <span class=" text-xl">{{ $name }}</span>
    <span class="text-2xl font-bold">{{ $number }}</span>
</div>
