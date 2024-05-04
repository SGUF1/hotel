@extends('layout')
@section('title', 'Hotels')

@section('content')
    ;

    <div class="p-10 w-full">
        <x-heading name="Hotels" icon="gmdi-admin-panel-settings-r" desc="Manage your hotels" new="Create Hotel"
            newHref="hotels.create" />
        <x-hotels-table :hotels="$hotels" />

    </div>
@endsection
