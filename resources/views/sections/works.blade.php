<section id="works-section" class="relative bg-[#060606] border-t border-white/5 h-[300vh]">
    <!-- Container Sticky yang akan terkunci di layar selama scroll vertikal -->
    <div class="sticky top-0 h-screen w-full flex flex-col justify-center overflow-hidden">
        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-16 gap-4 px-8 md:px-16 w-full shrink-0">
            <h2 class="works-section-title text-white text-6xl md:text-8xl lg:text-[110px] font-['Inter',sans-serif] font-bold tracking-tighter leading-none uppercase">
                / KARYA
            </h2>
            
            <a href="#" class="group flex items-center gap-3 text-white text-[13px] font-['Outfit',sans-serif] tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-white transition-colors duration-300">
                SEMUA KARYA 
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        <div id="works-track" class="flex gap-6 lg:gap-8 px-8 md:px-16 w-max will-change-transform">
            @php
                $cardWidth = "w-[85vw] md:w-[45vw] lg:w-[calc((100vw-14rem)/4)]";
            @endphp
            
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" 
                title="Bumame" 
                category="WEBSITE" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1621619856624-42fd193a0661?q=80&w=800&auto=format&fit=crop" 
                title="Extra Joss" 
                category="BRANDING" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1627393100177-b4297e5ea504?q=80&w=800&auto=format&fit=crop" 
                title="Gioi" 
                category="BRANDING" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop" 
                title="Vivere" 
                category="WEBSITE, GRAFIS" 
            />
            <!-- Ekstra 2 Card sehingga 4 pertama terlihat, dan 2 selanjutnya hasil scroll -->
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1583339824000-60b138676a06?q=80&w=800&auto=format&fit=crop" 
                title="Kopi Kenangan" 
                category="BRANDING, KEMASAN" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=800&auto=format&fit=crop" 
                title="Gojek Global" 
                category="DESAIN APLIKASI, UI/UX" 
            />
        </div>
    </div>
</section>
