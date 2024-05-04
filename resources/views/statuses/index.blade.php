@extends('layout')
@section('title', 'Statuses')


@section('content')
    <div class="p-10 w-full">
        <x-heading name="Statuses ({{count($status)}})" icon="fluentui-status-20" desc="Manage your statuses" new="Create Status"
        newHref="statuses.create" />

        <x-statuses-table :statuses="$status" />

    </div>
@endsection
