@props(['type', 'name', 'label', 'placeholder'])

<div class="flex flex-col relative">
    <div class="relative">
        <input type="{{ $type }}"  name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
            class="border-b-2 focus:outline-none py-1 w-96 focus:border-blue-600 outline-none peer transition-colors">
        @if ($label)
            <label for="{{ $name }}"
                class="text-lg absolute left-0 cursor-text text-md -top-7 peer-focus:text-blue-600 transition-all">
                {{ $label }}
            </label>
        @endif
    </div>
</div>
