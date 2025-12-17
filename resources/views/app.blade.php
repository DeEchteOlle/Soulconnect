@extends('components.master')

@section('hide_footerdash', true)
@section('hide_header', true)

@section('content')
    <div id="topContent" class="container mx-auto pt-20 py-10 text-center transition-opacity duration-700">
        <h1 class="text-3xl font-bold mb-6 text-white">
            Love is Just a Click Away
        </h1>

        <img src="{{ asset('happy.png') }}"
             alt="Happy Couple"
             class="mx-auto rounded-full shadow-lg w-40 h-40 object-cover">

    </div>

    <div id="buttonContent" class="container mx-auto py-10 text-center transition-opacity duration-700 space-y-4">
        <a href="{{ route('login') }}"
           class="block w-80 mx-auto px-5 py-3 rounded-2xl bg-white text-black font-semibold hover:bg-gray-100 transition">
            Login
        </a>
        <p class="text-white"> or </p>
        <a href=""
           class="block w-80 mx-auto px-5 py-3 rounded-2xl bg-white text-black font-semibold hover:bg-gray-100 transition">
            Register
        </a>
    </div>

@endsection
