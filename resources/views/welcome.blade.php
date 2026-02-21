<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodezig - Landing Page</title>
    <!-- Modern Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-['Inter',sans-serif] overflow-x-clip antialiased">

    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content Wrapper (To enable the sticky reveal footer) -->
    <div class="relative z-20 bg-[#060606] shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
        <x-hero />
        @include('sections.about')
        @include('sections.works')
        @include('sections.services')
        @include('sections.journal')
    </div>

    <!-- Contact Section (Sticky Reveal Footer) -->
    @include('sections.contact')

    <!-- Floating WhatsApp Action Button -->
    <x-floating-whatsapp />

    <!-- Lenis Smooth Scrolling CDN -->
    <script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>
    <script>
        // Inisialisasi efek Smooth Scroll tingkat tinggi menggunakan Lenis
        const lenis = new Lenis({
            duration: 1.2, // durasi perlambatannya (semakin tinggi = semakin perlahan)
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Easing function easeOutExpo
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1.1,
            touchMultiplier: 2,
        });

        // Wajib: Lenis requestAnimationFrame loop agar scroll berfungsi
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Event listener saat link di klik untuk menggulir halus memakai Lenis
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#' || targetId.length <= 1) return;

                const targetElement = document.querySelector(targetId);
                
                // Cek apakah navigasi ini harus meloncati area Works (dari atas ke bawah atau sebaliknya)
                const currentId = window.location.hash || '#home';
                const isCrossingWorks = (
                    (['#home', '#about'].includes(currentId) && ['#services', '#journal', '#contact'].includes(targetId)) ||
                    (['#services', '#journal', '#contact'].includes(currentId) && ['#home', '#about'].includes(targetId))
                );
                
                const scrollOptions = {
                    offset: targetId === '#works-section' ? 0 : -80,
                    duration: isCrossingWorks ? 0.6 : 1.2, // Drastis dipercepat jika melintasi Works
                    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                    immediate: false // Tetap biarkan Lenis menghandle smooth-nya namun dengan durasi sangat singkat
                };

                if (targetId === '#contact') {
                    lenis.scrollTo('bottom', scrollOptions);
                } else if (targetElement) {
                    lenis.scrollTo(targetElement, scrollOptions);
                }
                
                // Update URL hash tanpa jump
                history.pushState(null, null, targetId);
            });
        });
    </script>
</body>
</html>
