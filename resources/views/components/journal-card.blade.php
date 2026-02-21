@props([
    'image',
    'date',
    'title',
    'isLarge' => false
])

<div class="flex flex-col group cursor-pointer">
    <div class="overflow-hidden mb-6 relative bg-[#111] {{ $isLarge ? 'aspect-video lg:aspect-[16/10]' : 'aspect-video lg:aspect-square' }}">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 ease-[cubic-bezier(0.2,0.8,0.2,1)] group-hover:scale-105">
    </div>
    
    <div class="flex flex-col flex-grow">
        <span class="text-[#777] text-[12px] font-['Inter',sans-serif] mb-3">{{ $date }}</span>
        
        <h3 class="journal-title {{ $isLarge ? 'text-2xl md:text-3xl lg:text-[32px]' : 'text-xl md:text-[22px]' }} text-white font-['Inter',sans-serif] font-medium leading-[1.4] mb-6 group-hover:text-white/80 transition-colors duration-300">
            {{ $title }}
        </h3>
        
        <a href="#" class="mt-auto flex items-center gap-2 text-white/60 text-[11px] font-['Outfit',sans-serif] tracking-[2px] uppercase no-underline hover:text-white transition-colors duration-300">
            READ MORE 
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>
</div>
