@extends('components.master')

@section('hide_footer', true)


@section('content')
    <div class="container mx-auto py-10 text-center">
        <h2 class="text-4xl font-bold mb-6 text-emerald-700 ">Welcome to Soulconnect</h2>

        <img src="{{ asset('cheeseburg.png') }}" alt="Simple Image" class="mx-auto rounded-lg shadow-lg">
    </div>

    <div class="container mx-auto py-10 text-center">
        <button class="p-4 rounded-2xl bg-emerald-50 text-emerald-700 font-semibold">
            Dashboard
        </button>
    </div>

    <div class="container mx-auto py-10 text-center">
        <h2 class="text-2xl font-bold text-emerald-700">
            Our Mission
        </h2>

        <div class="mt-4 flex justify-center text-emerald-700">
            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="2"
                 stroke="currentColor"
                 class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </div>

@endsection
