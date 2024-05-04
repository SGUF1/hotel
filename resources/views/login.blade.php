@extends('layout')
@section('title', 'Login')

@section('content')

    <div class=" relative flex justify-center items-center w-screen h-[90vh] ">
        <form action="{{ route('login.post') }}" method="POST" class=" flex flex-col gap-9">
            @csrf
            <div class="flex flex-col gap-2">
                <span class="text-3xl font-bold">Login</span>
                <span class="text-sm ">Hi, Welcome Back 👋</span>
            </div>
            <div class="flex flex-col gap-9">
                <x-input name="username" label="Username" type="text" placeholder="Insert your username" />
                <x-input name="password" label="Password" type="password" placeholder="Insert your password" />
            </div>
            <div class="flex justify-end flex-col items-end ">
                <div class="relative w-max  flex flex-col group">
                    <a href="#" class="text-blue-900 ">Forgot Password?</a>
                    <span class="w-0 h-1 bg-blue-800 group-hover:w-full transition-all rounded-full"></span>
                </div>
            </div>
            <input
                class="bg-blue-600 w-full py-3 text-center text-xl text-white rounded-md cursor-pointer hover:scale-105 transition-all " type="submit" value="ENTER"/>
        </form>
    </div>
@endsection
