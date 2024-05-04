@extends('layout')
@section('title', 'Create room')

@section('content')
    <div class="p-10 w-full">
        <x-heading name="Create Rooms" icon="gmdi-admin-panel-settings-r" desc="Create Rooms" />

        <form action="{{ route('rooms.store', $hotel) }}" method="POST" class="relative">
            @csrf
            <div class="grid grid-cols-2 px-32 gap-y-7 mt-10">
                <x-input type="number" name="number" id="number" label="Initial Room Number" />
                <x-input type="text" name="room_fee" id="room_fee" label="Room Fee" />
                <x-input type="number" name="quantity_room" id="quantity_room" label="Quantity Of Rooms" />
                <div>
                    <label for="floor_number">Floor</label>
                    <select name="floor_number" id="floor_number">
                        @for ($i = 1; $i <= $hotel->floor_number; $i++)
                            <option value="{{ $i }}">
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>
            <input type="submit" value="Create Rooms"
                class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-full cursor-pointer hover:scale-105 transition-all">
        </form>
    </div>
@endsection
