<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodezig</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-sans overflow-x-clip antialiased scroll-smooth scroll-pt-32 relative">

    {{-- Optional Navbar --}}
    @hasSection('navbar')
        @yield('navbar')
    @else
        <x-navbar />
    @endif

    {{-- Main Content --}}
    @yield('content')

    {{-- Optional Footer / Contact --}}
    @hasSection('footer')
        @yield('footer')
    @endif

    <x-floating-whatsapp />
    <x-scroll-to-top />

    @stack('scripts')

</body>
</html>