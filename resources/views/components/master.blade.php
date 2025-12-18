<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="min-h-screen flex flex-col bg-[linear-gradient(135deg,#FF5864,#FF8A00)] overflow-hidden">


<header
    id="site-header"
    class="fixed top-0 left-0 w-full z-50 transform transition-transform duration-300 ease-in-out"
>
    @if (!View::hasSection('hide_header'))
        @include('components.header')
    @endif

    @if (!View::hasSection('hide_headerdash'))
        @include('components.headerdash')
    @endif
</header>

<main class="flex-1">
    @yield('content')
</main>

<footer>
    @if (!View::hasSection('hide_footer'))
        @include('components.footer')
    @endif

    @if (!View::hasSection('hide_footerdash'))
        @include('components.footerdash')
    @endif
</footer>

<script>
    @if (View::hasSection('hide_header_on_scroll'))
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScrollY = 0;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > lastScrollY && currentScrollY > 50) {
                header.classList.add('-translate-y-full');
            }

            if (currentScrollY === 0) {
                header.classList.remove('-translate-y-full');
            }

            lastScrollY = currentScrollY;
        });
    });
    @endif
</script>


</body>
</html>
