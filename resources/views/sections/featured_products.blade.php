<section class="w-full bg-[#060606] py-24 px-8 md:px-16 overflow-hidden relative border-t border-white/5" id="featured-products">
    <div class="w-full">
        <div class="relative">
            {{-- Carousel Container --}}
            <div id="featured-carousel" class="relative overflow-hidden">
                <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out">
                    @forelse($featuredProducts as $product)
                    <div class="w-full shrink-0 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                        {{-- Image Side --}}
                        <div class="relative flex justify-center items-center">
                            <div class="w-full md:aspect-[4/3] overflow-hidden">
                                <img 
                                    src="{{ $product->first_image_url }}" 
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                                >
                            </div>
                        </div>
                        {{-- Info Side --}}
                        <div class="flex flex-col justify-center space-y-8">
                            <h2 class="text-white text-4xl md:text-5xl lg:text-6xl font-sans font-bold leading-tight uppercase tracking-tight">
                                {{ $product->name }}
                            </h2>
                            <div class="prose prose-lg prose-invert max-w-none font-light leading-relaxed text-white/70">
                                {!! nl2br(e($product->description)) !!}
                            </div>
                            <div class="flex flex-col sm:flex-row items-center gap-6 pt-6">
                                <a href="https://wa.me/6281234567890?text={{ urlencode('Halo, saya tertarik dengan produk '.$product->name.' '.$product->slug) }}"
                                target="_blank"
                                class="px-8 py-3 md:px-12 md:py-4 bg-transparent border-2 border-white text-white text-[11px] md:text-sm uppercase font-bold tracking-[2px] rounded-full hover:bg-primary hover:border-primary hover:text-white transition-all duration-300 w-fit text-center">
                                Belanja Sekarang
                                </a>
                                {{-- Social Links next to button --}}
                                <div class="flex items-center gap-5 pl-2">
                                    <div class="w-px h-8 bg-white/10 hidden sm:block"></div>
                                    <a href="https://instagram.com/woodezig" target="_blank" class="text-white/40 hover:text-primary transition-all duration-300 hover:scale-110">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <rect x="3" y="3" width="18" height="18" rx="5" ry="5" stroke-width="1.5"/>
                                            <circle cx="12" cy="12" r="4" stroke-width="1.5"/>
                                            <circle cx="17" cy="7" r="1.2" fill="currentColor"/>
                                        </svg>
                                    </a>
                                    <a href="https://tiktok.com/@woodezig" target="_blank" class="text-white/40 hover:text-primary transition-all duration-300 hover:scale-110">
                                        <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M14 3v8.5a3.5 3.5 0 11-2-3.163V3h2zm0 0c1.2 2 3 3 5 3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    {{-- EMPTY STATE --}}
                    <div class="w-full shrink-0 flex flex-col items-center justify-center text-center py-24 space-y-6">
                        <div class="text-white/30 text-6xl">
                            ★
                        </div>
                        <h3 class="text-white text-2xl font-semibold">
                            Featured Products Coming Soon
                        </h3>
                        <p class="text-white/50 max-w-md">
                            We are preparing our highlighted wood products. Please check back later to discover our featured collection.
                        </p>
                        <a href="{{ route('catalog.index') }}"
                        class="px-10 py-3 border border-white/20 text-white text-sm uppercase tracking-wider rounded-full hover:bg-primary hover:border-primary transition">
                            Browse Catalog
                        </a>
                    </div>
                    @endforelse
                </div>
            </div>
            {{-- Navigation --}}
            @if($featuredProducts->count() > 1)
            <div class="hidden md:flex absolute top-1/2 -translate-y-1/2 left-0 right-0 justify-between pointer-events-none">
                <button id="carousel-prev" class="pointer-events-auto -translate-x-full lg:-translate-x-12 w-12 h-12 rounded-full border border-white/10 flex items-center justify-center bg-black/40 backdrop-blur-md text-white shadow-lg hover:bg-primary transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button id="carousel-next" class="pointer-events-auto translate-x-full lg:translate-x-12 w-12 h-12 rounded-full border border-white/10 flex items-center justify-center bg-black/40 backdrop-blur-md text-white shadow-lg hover:bg-primary transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
            @endif

        </div>
    </div>
</section>

