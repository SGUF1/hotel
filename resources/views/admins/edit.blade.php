@extends('layout')
@section('title', 'Edit admin')

@section('content')
    <div class="p-10 w-full">
        <x-heading name="Edit Admin" icon="gmdi-admin-panel-settings-r" desc="Edit Admin" />

        <form action="{{ route('admins.update', $admin->id) }}" method="POST" class="relative">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-3 px-32 gap-y-7 mt-10">

                <x-input type="text" name="username" id="username" value="{{ $admin->username }}" label="Username" />
                <x-input type="text" name="email" id="email" value="{{ $admin->email }}" label="Email" />

                <div>
                    <label for="id_role">Role</label>
                    <select name="id_role" id="id_role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $admin->id_role == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="submit" value="Modify"
                class="border px-10 py-2 bg-green-300 rounded-md absolute -bottom-20 cursor-pointer hover:scale-105 transition-all">
        </form>
    </div>
@endsection
