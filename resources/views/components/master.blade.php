<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen flex flex-col bg-[linear-gradient(135deg,#FF5864,#FF8A00)]">

@if (!View::hasSection('hide_header'))
    @include('components.header')
@endif

<main class="flex-1">
    @yield('content')
</main>

@if (!View::hasSection('hide_footer'))
    @include('components.footer')
@endif

</body>
</html>
