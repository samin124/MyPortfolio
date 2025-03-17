@extends('layouts.app')

@section('content')
    <!-- Fullscreen Section with Neon Gradient -->
    <div class="min-h-screen w-full flex flex-col items-center justify-center bg-gradient-to-r from-[#0f172a] via-[#1e3a8a] to-[#9333ea] text-white px-6 md:px-12">
        <h1 class="text-xl font-bold neon-text mb-6 mt-3">Certificates & Achievements</h1>

        <!-- Certificate Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">

            <!-- Example Certificate Card -->
            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1740991593215.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE OF ACHIEVEMENT </h2>
                <p class="text-gray-300 mt-2">1st Runner-up of Hult Prize at IIUC 2024-2025 On-Campus Program</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\20250318_003457.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE OF APPRECIATION</h2>
                <p class="text-gray-300 mt-2">In recognition of active participation in the segment Hackathon of Chittagong Science Carnival 4.0 : Organized by Chittagong University Scientific Society(CUSS)</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738057701652.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE OF Participation</h2>
                <p class="text-gray-300 mt-2">Achievement of Milestone in the Revenue to Rewards Program on Applink
                    Achievement of Milestone in the Revenue to Rewards Program on Applink organized by banglalink</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="images\1738682372715.jpg" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🛠 CERTIFICATE OF COMPLETION</h2>
                <p class="text-gray-300 mt-2">
                CERTIFICATE OF COMPLETION : Django for Beginners: Your First Steps into Web Development:Ostad</p>
            </div>


            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738575672171.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE of Participation </h2>
                <p class="text-gray-300 mt-2">MINDSPARKS 24 Project Showcase segment Final Round organized by AUST Innovation and Design Club</p>
            </div>
            
            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738057892077.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE of Participation </h2>
                <p class="text-gray-300 mt-2">App Development Crash Course Organized by IEEE Computer Society IIUC Student Branch Chapter</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738576014372.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆CERTIFICATE of Participation </h2>
                <p class="text-gray-300 mt-2">CERTIFICATE OF PARTICIPATION : Workshop on Professional Development IDP Education Ltd</p>
            </div>
            

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738575176531.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆Certificate of Appreciation</h2>
                <p class="text-gray-300 mt-2">International Conference on
                    Innovations in Science, Engineering and Technology (ICISET) 2024 SET
                    Innovative Technologies for Global Solutions</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738058044169.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆Certificate of Completion</h2>
                <p class="text-gray-300 mt-2">DATA ANALYST WITH SQL & PYTHON</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\1738060671222.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆Certificate of Participation</h2>
                <p class="text-gray-300 mt-2">IDEA GENERATION competition in CSE FEST 2022</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\20250318_010603.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆Certificate of Appreciation</h2>
                <p class="text-gray-300 mt-2">Dev & DevOps: A Roadmap for Aspiring Developers & DevOps Engineers</p>
            </div>

            <div class="certificate-card" data-aos="fade-up">
                <img src="{{ asset('images\20250318_010706.jpg') }}" alt="Certificate" class="rounded-lg">
                <h2 class="text-xl font-bold mt-3">🏆Certificate of Participation</h2>
                <p class="text-gray-300 mt-2">Unlocking Innovation : Mastering Embedded Systems</p>
            </div>

           

        </div>
    </div>

    <!-- CSS Styles -->
    <style>
        .neon-text {
            text-shadow: 0 0 5px #fff, 0 0 10px #9333ea, 0 0 15px #1e3a8a;
        }

        .certificate-card {
            background: linear-gradient(145deg, #1e3a8a, #9333ea);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(147, 51, 234, 0.5);
            text-align: center;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .certificate-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(147, 51, 234, 0.8);
        }

        .see-more {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }

        .see-more:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
    </style>
@endsection
