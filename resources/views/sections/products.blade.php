<section id="products-section" class="relative bg-[#060606] border-t border-white/5 h-auto lg:h-[300vh] py-16 lg:py-0">
    <!-- Container Sticky -->
    <div class="lg:sticky lg:top-0 lg:h-screen w-full flex flex-col justify-center overflow-hidden">        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 md:mb-16 gap-4 px-8 md:px-16 w-full shrink-0">
            <h2 class="products-section-title text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold  leading-tight py-2 uppercase">
                PRODUK
            </h2>           
            <a href="{{ route('works.maintenance') }}" class="group flex items-center gap-3 text-white text-[13px] font-sans tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-primary transition-colors duration-300">
                SEMUA PRODUK 
                <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:text-primary transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        <div id="products-track" class="flex gap-6 lg:gap-8 px-8 md:px-16 w-full lg:w-max overflow-x-auto lg:overflow-visible snap-x snap-mandatory lg:snap-none lg:will-change-transform [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            @php
                $cardWidth = "w-[85vw] md:w-[45vw] lg:w-[calc((100vw-14rem)/4)] shrink-0 snap-center lg:snap-align-none";
                $count = 0;
            @endphp            
            @foreach($catalogProducts as $product)
                @php $count++; @endphp
                <x-work-card 
                    class="{{ $cardWidth }}"
                    image="{{ $product->image ? (str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)) : 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=800&auto=format&fit=crop' }}" 
                    title="{{ $product->name }}" 
                    category="{{ strtoupper($product->subCategory->name ?? 'PRODUK') }}"
                    :href="route('works.maintenance')" 
                />
            @endforeach

            @for ($i = $count; $i < 6; $i++)
                <x-work-card 
                    class="{{ $cardWidth }} opacity-50 grayscale"
                    image="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=800&auto=format&fit=crop" 
                    title="Segera Hadir" 
                    category="PRODUK BARU"
                    :href="'#'" 
                />
            @endfor
        </div>
    </div>
</section>
