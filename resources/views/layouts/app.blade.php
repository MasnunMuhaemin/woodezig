<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodezig</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#060606] text-white font-sans overflow-x-clip antialiased scroll-smooth scroll-pt-32 relative">

    <x-page-loader />

    {{-- Navbar --}}
    @hasSection('navbar')
        @yield('navbar')
    @else
        <x-navbar />
    @endif

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @hasSection('footer')
        @yield('footer')
    @else
        @include('sections.contact')
    @endif

    <x-floating-whatsapp />
    <x-scroll-to-top />

    @stack('scripts')

</body>
</html>