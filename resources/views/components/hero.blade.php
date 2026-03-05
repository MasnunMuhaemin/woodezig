<section class="relative w-full h-screen flex flex-col justify-center items-center overflow-hidden font-sans">    
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
        <div class="absolute inset-0 bg-black/40 transition-colors duration-500"></div>
    </div>
    <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 md:px-8 w-full h-full pb-20">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold tracking-[1px] md:tracking-[2px] uppercase text-white mb-4 md:mb-6 leading-snug md:leading-tight w-full max-w-[95%] lg:max-w-[1000px] xl:max-w-[1200px] mx-auto">
            <span class="block xl:inline whitespace-normal xl:whitespace-nowrap">Plakat, Seminar Kit, hingga Kebutuhan Kreatif</span> <br class="hidden xl:block"> 
            <span class="block mt-1 xl:mt-0">Anak <span class="hidden sm:inline">— Semua Bisa Custom</span></span>
        </h1>
        <p class="text-white/80 font-light text-xs sm:text-sm md:text-base lg:text-lg tracking-[0.5px] md:tracking-[1px] max-w-[90%] md:max-w-[600px] lg:max-w-[800px] mx-auto leading-relaxed md:leading-normal">
            Kami merancang dan memproduksi setiap produk dengan detail, fleksibel, dan proses yang cepat untuk kebutuhan corporate maupun edukasi anak.
        </p>
    </div>
    <a href="#about" class="absolute bottom-[50px] left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 text-[11px] tracking-[2px] uppercase no-underline text-white/60 transition-all duration-300 hover:text-white z-20 group">
        Ayo Kemon ↓
        <div class="w-[100px] h-[1px] bg-white/20 transition-all duration-300 group-hover:w-[140px] group-hover:bg-primary"></div>
    </a>
</section>