@props([
    'image', 
    'title', 
    'category',
    'class' => ''
])

<div class="flex flex-col group cursor-pointer shrink-0 {{ $class }}">    
    <div class="w-full aspect-square overflow-hidden mb-4 md:mb-5 relative bg-[#111]">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover transition-transform duration-700 ease-[cubic-bezier(0.2,0.8,0.2,1)] group-hover:scale-105">
    </div>
    <h3 class="text-white text-[22px] font-medium tracking-tight mb-1.5 
               group-hover:text-white/80 transition-colors duration-300">
        {{ $title }}
    </h3>
    <p class="text-[#777] text-[10px] font-semibold tracking-[1.5px] uppercase">
        {{ $category }}
    </p>
</div>