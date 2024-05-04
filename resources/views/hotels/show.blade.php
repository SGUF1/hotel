@extends('layout')
@section('title', $hotel->name)

@section('content')
    <div class="p-10 w-full overflow-scroll h-[95vh] flex flex-col gap-2">
        <x-heading name="{{ $hotel->name }}" icon="gmdi-admin-panel-settings-r" desc="Manage your hotel" />
        <div class="grid grid-flow-col grid-cols-3 grid-rows-2 row-auto gap-5 ">
            <x-dashboard-card name="Reservations" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="0" />
            <x-dashboard-card name="Cameras" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="0" />
            <x-dashboard-card name="Floors" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="0" />
            <x-dashboard-card name="Stars" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="0" />
            <x-dashboard-card name="Email" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="sguf@hotel.com" />
            <x-dashboard-card name="Average Fee" color="#fcba03" icon="gmdi-admin-panel-settings-r" number="0" />
        </div>
        <div>
            {!! $chart->container() !!}
        </div>
       <x-heading2 name="Cameras" icon="gmdi-admin-panel-settings-r" desc="Manage your cameras" new="Create camera"
            newHref="rooms.create" :newHrefOther="['hotel' => $hotel->id]" />


    </div>
@endsection

@section('javascript')
    {!! $chart->script() !!}
@endsection
