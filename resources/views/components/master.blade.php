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

@if (!View::hasSection('hide_header'))
    @include('components.header')
@endif

@if (!View::hasSection('hide_headerdash'))
    @include('components.headerdash')
@endif
<main class="flex-1">
    @yield('content')
</main>

@if (!View::hasSection('hide_footer'))
    @include('components.footer')
@endif

@if (!View::hasSection('hide_footerdash'))
    @include('components.footerdash')
@endif

</body>
</html>
