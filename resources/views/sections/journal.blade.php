<section class="py-24 px-8 md:px-16 bg-[#060606] relative border-t border-white/5 font-sans" id="journal">    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
        <h2 class="journal-section-title text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold leading-tight py-2 uppercase">
            Artikel
        </h2>
        <a href="{{ route('article.index') }}" 
           class="group flex items-center gap-3 text-white text-[13px] font-sans tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-primary transition-colors duration-300">
            SEMUA ARTIKEL 
            <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:text-primary transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-8">
        @forelse($articles as $article)
            <div class="{{ $loop->first ? 'lg:col-span-3' : 'lg:col-span-1' }}">
                <x-journal-card 
                    :isLarge="$loop->first"
                    :image="$article->first_image_url"
                    :date="$article->created_at->translatedFormat('d F Y')"
                    :title="$article->title"
                    :href="route('article.show', $article->slug)" 
                />
            </div>
        @empty
            <div class="lg:col-span-5 text-center py-10 opacity-50 italic">
                Segera hadir artikel menarik lainnya.
            </div>
        @endforelse
    </div>
</section>