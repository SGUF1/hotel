@extends('layout')
@section('title', 'Admins and Roles')

@section('content')

<div class="p-10 w-full">
    <x-heading name="Admins ({{count($admins)}})" icon="gmdi-admin-panel-settings-r" desc="Manage i tuoi admin" new="Create Admin"
        newHref="admins.create" new2Href="roles.create" new2="Create Role" />

    <x-admins-table :admins="$admins" />
    <x-heading name="Roles ({{count($roles)}})" icon="eos-role-binding" desc="Manage i tuoi roles" />

    <x-roles-table :roles="$roles" />
</div>
@endsection
