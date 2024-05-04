@extends('layout')
@section('title', 'Create role')

@section('content')

<div class="p-10 w-full">
    <x-heading name="Create Role" icon="gmdi-admin-panel-settings-r" desc="Create your roles" />

    <form action="{{ route('roles.store') }}" method="POST" class="relative">
        @csrf
        <div class="grid grid-cols-2 px-32 gap-y-7 mt-10">
            <x-input type="text" name="name" id="name" label="Name" />
            <x-input type="text" name="color" id="color" label="Color" />
            <div class="flex flex-col  relative">
                <label for="description"
                    class="text-lg  cursor-text text-md  peer-focus:text-blue-600 transition-all">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="border peer focus:border-blue-600 focus:outline-none"></textarea>
            </div>
        </div>
        <input type="submit" value="Create"
            class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-20 cursor-pointer hover:scale-105 transition-all">
    </form>
</div>
@endsection
