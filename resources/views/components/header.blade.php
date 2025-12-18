<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/1a54de1e32.js" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen flex flex-col bg-[linear-gradient(135deg,#FF5864,#FF8A00)]">

<nav class="w-full  fixed top-0 left-0 z-50 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        <div class="text-xl font-bold text-white">♥ SoulConnect</div>

        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-white hover:text-gray-200 hover:underline transition">Home</a>
            <a href="/dashboard" class="text-white hover:text-gray-200 hover:underline transition">Dashboard</a>
            <a href="/account" class="text-white hover:text-gray-200 hover:underline transition">Account</a>
            <a href="/mission" class="text-white hover:text-gray-200 hover:underline transition">Our Mission</a>

            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:text-gray-200 hover:underline transition">Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="text-white hover:text-gray-200 hover:underline transition">Login</a>
            @endauth
        </div>

        <div class="md:hidden relative">
            <button id="mobile-menu-button" class="focus:outline-none text-white">
                ☰
            </button>
            <div id="mobile-menu" class="absolute right-0 mt-2 w-48 bg-[#FF8A00] shadow-lg rounded-md hidden">
                <a href="/" class="block px-4 py-2 text-white  transition">Home</a>
                <a href="/dashboard" class="block px-4 py-2 text-white  transition">Dashboard</a>
                <a href="/account" class="block px-4 py-2 text-white  transition">Account</a>
                <a href="/mission" class="block px-4 py-2 text-white  transition">Our Mission</a>

                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="w-full text-left px-4 py-2 text-white hover:bg-[#FF6B3C] transition">Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-white hover:bg-[#FF6B3C] transition">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
