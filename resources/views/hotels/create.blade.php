@extends('layout')
@section('title', 'Create hotel')

@section('content')
    <div class="p-10 w-full">
        <x-heading name="Hotels" icon="gmdi-admin-panel-settings-r" desc="Create a new hotel" />
        <form action="{{ route('hotels.store') }}" method="POST" class="relative">
            @csrf
            <div class="grid grid-cols-2 px-32 gap-y-7 mt-10">

                <x-input type="text" name="name" id="name" label="Hotel Name" />
                <x-input type="text" name="email" id="email" label="Email" />
                <div class="flex flex-col  relative">
                    <label for="description"
                        class="text-lg  cursor-text text-md  peer-focus:text-blue-600 transition-all">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"
                        class="border peer focus:border-blue-600 focus:outline-none"></textarea>
                </div>
                <x-input type="number" name="stars" id="stars" label="Stars" />
                <x-input type="number" name="floor_number" id="floor_number" label="Floor Number" />
                <x-input type="text" name="street_name" id="street_name" label="Street Name" />
                <x-input type="text" name="house_number" id="house_number" label="Hotel Number" />
                <x-input type="text" name="city" id="city" label="City" />
                <x-input type="text" name="zip_code" id="zip_code" label="Zip Code" />

            </div>
            <input type="submit" value="Modify"
                class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-20 cursor-pointer hover:scale-105 transition-all">
        </form>
    </div>
@endsection
