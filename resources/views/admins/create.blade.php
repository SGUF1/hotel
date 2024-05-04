@extends('layout')
@section('title', 'Create admin')

@section('content')
    <div class="p-10 w-full">
        <x-heading name="Create Admin" icon="gmdi-admin-panel-settings-r" desc="Create Admin" />

        <form action="{{ route('admins.store') }}" method="POST" class="relative">
            @csrf
            <div class="grid grid-cols-2 px-32 gap-y-7 mt-10">

                <x-input type="text" name="username" id="username" label="Username" />
                <x-input type="text" name="email" id="email" label="Email" />
                <x-input type="password" name="password" id="password" label="Password" />
                <div>
                    <label for="id_role">Role</label>
                    <select name="id_role" id="id_role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="submit" value="Modify"
                class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-full cursor-pointer hover:scale-105 transition-all">
        </form>
    </div>
@endsection
