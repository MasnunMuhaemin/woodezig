<section id="products-section" class="relative bg-[#060606] border-t border-white/5 h-auto lg:h-[300vh] py-16 lg:py-0">
    <!-- Container Sticky -->
    <div class="lg:sticky lg:top-0 lg:h-screen w-full flex flex-col justify-center overflow-hidden">        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-16 gap-4 px-8 md:px-16 w-full shrink-0">
            <h2 class="products-section-title text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold tracking-tighter leading-none uppercase">
                PRODUK
            </h2>           
            <a href="{{ route('works.maintenance') }}" class="group flex items-center gap-3 text-white text-[13px] font-sans tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-primary transition-colors duration-300">
                SEMUA PRODUK 
                <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:text-primary transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        <!-- Horizontal Track -->
        <div id="products-track" class="flex gap-6 lg:gap-8 px-8 md:px-16 w-full lg:w-max overflow-x-auto lg:overflow-visible snap-x snap-mandatory lg:snap-none lg:will-change-transform [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            @php
                $cardWidth = "w-[85vw] md:w-[45vw] lg:w-[calc((100vw-14rem)/4)] shrink-0 snap-center lg:snap-align-none";
            @endphp            
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=800&auto=format&fit=crop" 
                title="Produk 1" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5?q=80&w=800&auto=format&fit=crop" 
                title="Produk 2" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1544457070-4cd773b4d71e?q=80&w=800&auto=format&fit=crop" 
                title="Produk 3" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1610701596007-11502861dcfa?q=80&w=800&auto=format&fit=crop" 
                title="Produk 4" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1505843490538-5133c6c7d0e1?q=80&w=800&auto=format&fit=crop" 
                title="Produk 5" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=800&auto=format&fit=crop" 
                title="Produk 6" 
                category="KATEGORI"
                :href="route('works.maintenance')" 
            />
        </div>
    </div>
</section>
