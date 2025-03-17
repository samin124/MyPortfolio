@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6 mt-5">Contact Me</h1>
        <p class="text-gray-400 mb-6">Fill out the form below to get in touch.</p>


        @if(session('success'))
    <div class="text-green-500 mb-4">
        {{ session('success') }}
    </div>
@endif


        <form action="{{ route('contact.submit') }}" method="POST" class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-300">Name:</label>
                <input type="text" name="name" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:scale-105 transition">

            </div>

            <div class="mb-4">
                <label class="block text-gray-300">Phone:</label>
                <input type="text" name="name" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:scale-105 transition">

            </div>

            <div class="mb-4">
                <label class="block text-gray-300">Email:</label>
                <input type="text" name="name" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:scale-105 transition">

            </div>

            <div class="mb-4">
                <label class="block text-gray-300">Message:</label>
                <textarea name="message" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button class="bg-white bg-opacity-20 backdrop-blur-lg px-6 py-2 rounded-lg text-white hover:bg-opacity-40 transition">
    Send Message
</button>

        </form>
    </div>
@endsection
