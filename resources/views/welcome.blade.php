<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodezig - Beranda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-['Inter',sans-serif] overflow-x-clip antialiased">
    <x-navbar />
    <!-- HERO -->
    <div id="home" class="sticky top-0 h-screen w-full z-[15]">
        <!-- Background solid (ANTI TEMBUS) -->
        <div class="absolute inset-0 bg-[#060606] -z-10"></div>
        <!-- Hero Content (yang akan fade) -->
        <div id="hero-content" class="h-full w-full">
            <x-hero />
        </div>
    </div>
    <!-- CONTENT -->
    <div class="relative z-[20] bg-[#060606] mb-[100vh]">
        @include('sections.about')
        @include('sections.works')
        @include('sections.services')
        @include('sections.journal')
    </div>
    <!-- FOOTER FIXED LAYER -->
    <div id="contact" class="fixed bottom-0 left-0 w-full h-screen z-[10]">
        @include('sections.contact')
    </div>
    <x-floating-whatsapp />
    <!-- LENIS -->
    <script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>
    <script>
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smoothWheel: true,
            wheelMultiplier: 1.1,
            touchMultiplier: 2,
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        window.lenis = lenis;

        // Smooth anchor scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    lenis.scrollTo(targetElement, {
                        offset: -80,
                        duration: 1.2
                    });
                }
            });
        });

        // HERO FADE (fade hanya konten, bukan background layer)
        const heroContent = document.getElementById('hero-content');

        lenis.on('scroll', ({ scroll }) => {
            const vh = window.innerHeight;

            if (heroContent) {
                const progress = Math.min(scroll / vh, 1);
                heroContent.style.opacity = 1 - progress;
            }
        });
    </script>

</body>
</html>