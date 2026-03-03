<section id="works-section" class="relative bg-[#060606] border-t border-white/5 h-auto lg:h-[300vh] py-16 lg:py-0">
    <div class="lg:sticky lg:top-0 lg:h-screen w-full flex flex-col justify-center overflow-hidden">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-16 gap-4 px-8 md:px-16 w-full shrink-0">
            <h2 class="works-section-title text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold tracking-tighter leading-none uppercase">
                KARYA
            </h2>           
            <a href="{{ route('works.maintenance') }}" class="group flex items-center gap-3 text-white text-[13px] font-sans tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-primary transition-colors duration-300">
                SEMUA KARYA 
                <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:text-primary transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        <div id="works-track" class="flex gap-6 lg:gap-8 px-8 md:px-16 w-full lg:w-max overflow-x-auto lg:overflow-visible snap-x snap-mandatory lg:snap-none lg:will-change-transform [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            @php
                $cardWidth = "w-[85vw] md:w-[45vw] lg:w-[calc((100vw-14rem)/4)] shrink-0 snap-center lg:snap-align-none";
            @endphp            
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" 
                title="Bumame" 
                category="WEBSITE"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1621619856624-42fd193a0661?q=80&w=800&auto=format&fit=crop" 
                title="Extra Joss" 
                category="BRANDING"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1627393100177-b4297e5ea504?q=80&w=800&auto=format&fit=crop" 
                title="Gioi" 
                category="BRANDING"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop" 
                title="Vivere" 
                category="WEBSITE, GRAFIS"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1583339824000-60b138676a06?q=80&w=800&auto=format&fit=crop" 
                title="Kopi Kenangan" 
                category="BRANDING, KEMASAN"
                :href="route('works.maintenance')" 
            />
            <x-work-card 
                class="{{ $cardWidth }}"
                image="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=800&auto=format&fit=crop" 
                title="Gojek Global" 
                category="DESAIN APLIKASI, UI/UX"
                :href="route('works.maintenance')" 
            />
        </div>
    </div>
</section>