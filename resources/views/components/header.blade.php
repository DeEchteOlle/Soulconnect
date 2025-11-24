<nav class="w-full bg-emerald-50 border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        <div class="text-xl font-bold text-emerald-700">
            ♥ SoulConnect
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-emerald-700 hover:text-emerald-900">Home</a>
            <a href="/dashboard" class="text-emerald-700 hover:text-emerald-900">Dashboard</a>
            <a href="/account" class="text-emerald-700 hover:text-emerald-900">Account</a>
            <a href="/mission" class="text-emerald-700 hover:text-emerald-900">Our Mission</a>

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="text-emerald-700 hover:text-emerald-900"
                    >
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-emerald-700 hover:text-emerald-900>
                    Login
                </a>
            @endauth
        </div>

        <div class=" md:hidden">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-emerald-50 border-t border-gray-300">
        <a href="/" class="block px-6 py-2 text-emerald-700 hover:text-emerald-900">Home</a>
        <a href="/dashboard" class="block px-6 py-2 text-emerald-700 hover:text-emerald-900">Dashboard</a>
        <a href="/account" class="block px-6 py-2 text-emerald-700 hover:text-emerald-900">Account</a>
        <a href="/mission" class="block px-6 py-2 text-emerald-700 hover:text-emerald-900">Our Mission</a>

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="w-full text-left block px-6 py-2 text-emerald-700 hover:text-emerald-900"
                >
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block px-6 py-2 text-emerald-700 hover:text-emerald-900">
                Login
            </a>
        @endauth
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
