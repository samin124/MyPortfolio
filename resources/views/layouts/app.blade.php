<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Animate On Scroll (AOS) Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body class="bg-gray-900 text-white">

    <!-- Navbar -->
    <nav class="w-full p-5 bg-gradient-to-r from-blue-600 to-purple-700 shadow-md">
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold tracking-wide text-white">My Portfolio</span>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="px-4 py-2 hover:bg-blue-700 rounded-lg transition">Home</a>
                <a href="/certificates" class="px-4 py-2 hover:bg-blue-700 rounded-lg transition">Certificates</a>
                <a href="/projects" class="px-4 py-2 hover:bg-blue-700 rounded-lg transition">Projects</a>
                <a href="/contact" class="px-4 py-2 hover:bg-blue-700 rounded-lg transition">Contact</a>
                <a href="/skill" class="px-4 py-2 hover:bg-blue-700 rounded-lg transition">Skills</a>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="hidden flex flex-col space-y-4 mt-4 text-center md:hidden">
            <a href="/" class="block py-2 bg-blue-500 hover:bg-blue-700 rounded-lg">Home</a>
            <a href="/certificates" class="block py-2 bg-blue-500 hover:bg-blue-700 rounded-lg">Certificates</a>
            <a href="/projects" class="block py-2 bg-blue-500 hover:bg-blue-700 rounded-lg">Projects</a>
            <a href="/contact" class="block py-2 bg-blue-500 hover:bg-blue-700 rounded-lg">Contact</a>
            <a href="/skill" class="block py-2 bg-blue-500 hover:bg-blue-700 rounded-lg">Skills</a>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="w-full">
        @yield('content')
    </div>

    <!-- AOS Animation Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
