@extends('layout')
@section('title', 'Edit hotel')

@section('content')
<div class="p-10 w-full">
    <x-heading name="Hotel" icon="gmdi-admin-panel-settings-r" desc="Edit a hotel" />
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST" class="relative">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-3 px-32 gap-y-9 mt-10">

            <x-input type="text" name="name" id="name" label="Hotel Name" :value="$hotel->name" />
            <x-input type="text" name="email" id="email" label="Email" :value="$hotel->email" />
            <div class="flex flex-col  relative">
                <label for="description"
                    class="text-lg  cursor-text text-md  peer-focus:text-blue-600 transition-all">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="border peer focus:border-blue-600 focus:outline-none">{{ $hotel->description }}</textarea>
            </div>
            <x-input type="number" name="stars" id="stars" label="Stars" :value="$hotel->stars" />
            <x-input type="number" name="floor_number" id="floor_number" label="Floor Number" :value="$hotel->floor_number" />
            <x-input type="text" name="street_name" id="street_name" label="Street Name" :value="$hotel->address->street_name" />
            <x-input type="text" name="house_number" id="house_number" label="Hotel Number" :value="$hotel->address->house_number" />
            <x-input type="text" name="city" id="city" label="City" :value="$hotel->address->city" />
            <x-input type="text" name="zip_code" id="zip_code" label="Zip Code" :value="$hotel->address->zip_code" />

        </div>
        <input type="submit" value="Modify"
            class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-20 cursor-pointer hover:scale-105 transition-all">
    </form>
</div>
@endsection
