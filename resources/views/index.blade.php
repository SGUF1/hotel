@extends('layout')
@section('title', 'Dashboard')

@section('content')
    <div class="p-10 overflow-y-scroll w-full h-[94vh]">
        <x-heading name="Dashboard" icon="ri-dashboard-fill" desc="Manage le tue robe coglione di merda" />

        <div class="grid grid-flow-col grid-cols-5 grid-rows-2 row-auto gap-5 ">
            <x-dashboard-card name="Number Hotel" color="cyan" :number="$numberOfHotels" icon="fas-hotel" />
            <x-dashboard-card name="Number Users" color="cyan" :number="$numberOfUsers" icon="fas-users" />
            <x-dashboard-card name="Number Cameras" color="cyan" :number="$numberOfUsers" icon="fas-users" />
            <x-dashboard-card name="Number Admins" color="cyan" :number="$numberOfAdmins" icon="fas-users" />
            <x-dashboard-card name="Incoming €" color="cyan" :number="$numberOfUsers" icon="fas-users" />
            <x-dashboard-card name="Total reservation" color="cyan" :number="$numberOfUsers" icon="fas-users" />
            <x-dashboard-card name="Valuation Avarage" color="cyan" :number="$numberOfUsers" icon="fas-users" />
            <x-dashboard-card name="Number Users" color="cyan" :number="$numberOfUsers" icon="fas-users" />
        </div>
    </div>
@endsection
