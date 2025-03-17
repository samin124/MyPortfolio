@extends('layouts.app')

@section('content')
    <!-- Fullscreen Hero Section with Realistic Gradient Background -->
    <div class="min-h-screen w-full flex flex-col md:flex-row items-center justify-center bg-gradient-to-br from-[#1e3a8a] via-[#1e293b] to-[#0f172a] text-white px-6 md:px-0">
        
        <!-- Image Section -->
        <div class="flex justify-center md:w-1/3">
            <img src="{{ asset('images/1738271258812.jpg') }}" 
                 alt="Your Photo" 
                 class="w-60 h-60 md:w-64 md:h-64 rounded-full shadow-lg animate-fade-in">
        </div>

        <!-- Text Section -->
        <div class="text-center md:text-left md:w-2/3" data-aos="fade-up">
            
            <!-- Animated Name with Typing Effect -->
            <h1 class="text-4xl md:text-6xl font-bold relative">
                <span id="typing-text"></span><span class="text-blue-500">|</span>
            </h1>

            <!-- Subtitle with Fade-in Animation -->
            <p class="text-lg md:text-xl mt-3 animate-fade-in px-4 md:px-0">
                I am a student of the Computer Science and Engineering Department with expertise in Front-End Development and basic knowledge of Back-End Development. I am also involved in Machine Learning and Image Processing research, exploring innovative solutions in these fields.
            </p>

            <!-- Animated Resume Button -->
            <a href="{{ env('RESUME_LINK') }}" target="_blank" 
               class="mt-5 inline-block px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg shadow-lg transition transform hover:scale-105" 
               data-aos="zoom-in">
                Download Resume
            </a>
        </div>

    </div>

    <!-- Typing Effect Script -->
    <script>
        const text = "Shadman Yaser";
        let index = 0;
        function typeEffect() {
            if (index < text.length) {
                document.getElementById("typing-text").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 150);
            }
        }
        window.onload = typeEffect;
    </script>

    <!-- Extra CSS for Smooth Animations -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 2s ease-in-out;
        }
    </style>
@endsection

