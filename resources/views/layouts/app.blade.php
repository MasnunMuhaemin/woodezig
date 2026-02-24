<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodezig</title>
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

    @stack('scripts')

</body>
</html>