@section('hide_footer', true)
@section('hide_header', true)

@extends('components.master')

@section('content')
    <div class="flex flex-col items-center justify-center">

        <div class="w-full flex flex-col items-center mt-16">
            <div class="w-64 h-64 rounded-full overflow-hidden shadow-xl border-4 border-white">
                <img src="https://via.placeholder.com/400" class="w-full h-full object-cover">
            </div>

            <div class="mt-6 text-center">
                <h2 class="text-3xl font-bold text-white">name, age</h2>
                <p class="text-white mt-2 px-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                </p>
            </div>

            <div class="flex gap-10 mt-5">
                <button
                    class="w-15 h-15 bg-white rounded-full shadow-lg flex items-center justify-center border-2 border-red-500 hover:bg-red-500 hover:text-white transition">
                    <span class="text-3xl font-bold">✖</span>
                </button>

                <button
                    class="w-15 h-15 bg-white rounded-full shadow-lg flex items-center justify-center border-2 border-green-500 hover:bg-green-500 hover:text-white transition">
                    <span class="text-3xl">❤️</span>
                </button>
            </div>
        </div>
    </div>
@endsection
