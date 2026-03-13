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

                            <div class="flex flex-col sm:flex-row items-center gap-8 pt-6">
                                <a href="{{ route('catalog.show', $product->slug) }}" 
                                   class="px-12 py-4 bg-transparent border-2 border-white text-white text-sm uppercase font-bold tracking-[2px] rounded-full hover:bg-primary hover:border-primary hover:text-white transition-all duration-300 w-full sm:w-fit text-center">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
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

