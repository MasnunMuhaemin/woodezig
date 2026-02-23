<section class="relative w-full h-screen flex flex-col justify-center items-center overflow-hidden font-sans">    
    <!-- Fullscreen Background Video -->
    <div class="absolute inset-0 w-full h-full z-0">
        <video 
            autoplay 
            loop 
            muted 
            playsinline 
            class="w-full h-full object-cover pointer-events-none"
        >
            <source src="{{ asset('assets/banner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 transition-colors duration-500"></div>
    </div>
    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center text-center px-6">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-semibold tracking-[4px] uppercase text-white mb-4">
            Pengalaman Woodezig
        </h1>
        <p class="text-white/80 font-light text-sm md:text-base tracking-[1px] max-w-xl">
            Layout agensi premium yang dirancang untuk menampilkan karya terbaik Anda dalam gerakan.
        </p>
    </div>
    <!-- Scroll Indicator -->
    <a href="#about" class="absolute bottom-[50px] left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 text-[11px] tracking-[2px] uppercase no-underline text-white/60 transition-all duration-300 hover:text-white z-20 group">
        Temukan Sekarang ↓
        <div class="w-[100px] h-[1px] bg-white/20 transition-all duration-300 group-hover:w-[140px] group-hover:bg-white/60"></div>
    </a>
</section>