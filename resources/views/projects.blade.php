@extends('layouts.app')

@section('content')
    <!-- Projects Section with a Unique Glassmorphism Design -->
    <div class="min-h-screen w-full flex flex-col items-center justify-center bg-gray-900 text-white px-6 md:px-12">
        <h1 class="text-3xl font-bold neon-text mb-10 mt-5">My Projects</h1>

        <!-- Stacked Project Cards (Unique Layout) -->
        <div class="flex flex-col w-full max-w-4xl space-y-8">

            <!-- Example Project Card -->
            <div class="project-card" data-aos="fade-up">
                <img src="{{ asset('images/1704297505259.jpg') }}" alt="Project" class="rounded-lg w-full">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">Call Centre Data Analysis</h2>
                    <p class="text-gray-300 mt-2">Excited to share my latest project where I delved into call center data analysis using Power BI! 📊💼 Exploring trends, optimizing workflows, and uncovering insights were just a few aspects of this engaging project. Check out my analysis and the actionable insights I discovered!</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/Call-Center-Data-Analysis" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card" data-aos="fade-up">
                <img src="{{ asset('images/1704104518324.jpg') }}" alt="Project" class="rounded-lg w-full">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">
                        Human Resource Data Analysis</h2>
                    <p class="text-gray-300 mt-2">In this project I have tried to make a dashboard of an operated human resource database. 
                        Here I used :
                        Data cleaning 
                         ->Checked for null values 
                         ->Checked for duplicate and repeated values.
                        
                        Data analyses 
                        Data visualization 
                        Finally made an interactive dashboard using Power BI.</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/Ecommerce-Sales-Data-Analysis" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card" data-aos="fade-up">
                <img src="{{ asset('images/1704032149946.jpg') }}" alt="Project" class="rounded-lg w-full">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">Store Analysis using Power BI</h2>
                    <p class="text-gray-300 mt-2">*Created interactive dashboard to track and analyze online states data.
                        *Used complex parameters to drill down in worksheet customization using filters and slicers.</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/Ecommerce-Sales-Data-Analysis" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>


            <div class="project-card" data-aos="fade-up">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">
                        CRUD using PHP</h2>
                    <p class="text-gray-300 mt-2">It is the begginer project for me as for learning purpose.Here I used CRUD operation on MySql database using raw Php.</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/PHP-CRUD-" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card" data-aos="fade-up">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">
                    Laravel Authentication</h2>
                    <p class="text-gray-300 mt-2">It is a begginer project for learning purpose. Here I have used Laravel Authentication and Form Validation.</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/Laravel_Crud_Auth" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>
            

            <div class="project-card" data-aos="fade-up">
                <div class="p-5">
                    <h2 class="text-2xl font-bold">
                        Root Finding Visualizer</h2>
                    <p class="text-gray-300 mt-2">Root-Finding Algorithm Visualizer, a web-based tool that demonstrates how numerical methods find the roots of equations. This project allows users to input any mathematical equation and visualize the iterative process of four major root-finding techniques:

                        ✅ Bisection Method
                        ✅ Newton-Raphson Method
                        ✅ Secant Method
                        ✅ False Position Method
                        
                        🔹 Key Features:
                        🔹 Interactive web-based interface using HTML, CSS, Bootstrap
                        🔹 Flask backend for real-time calculations
                        🔹 Dynamic Matplotlib plots to visualize convergence
                        🔹 Error estimation and iteration tracking
                        
                        This project helped me strengthen my understanding of numerical methods, Flask, and data visualization. Looking forward to enhancing it further!</p>
                    <div class="buttons">
                        <a href="https://github.com/samin124/Laravel_Crud_Auth" target="_blank" class="github-link">View on GitHub</a>
                    </div>
                </div>
            </div>

            



            

        </div>
    </div>

    <!-- CSS Styles (Glassmorphism & Unique Effects) -->
    <style>
        .neon-text {
            text-shadow: 0 0 5px #fff, 0 0 10px #3b82f6, 0 0 15px #1e3a8a;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 10px;
        }

        .project-card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 25px rgba(255, 255, 255, 0.2);
        }

        .github-link {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }

        .github-link:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
    </style>
@endsection
