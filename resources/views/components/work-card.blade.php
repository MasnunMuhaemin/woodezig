@props([
    'image', 
    'title', 
    'category',
    'tags' => [],
    'href' => '#',
    'class' => ''
])
<a href="{{ $href }}" 
   class="flex flex-col group cursor-pointer shrink-0 {{ $class }}">
    <div class="w-full aspect-square overflow-hidden mb-4 md:mb-5 relative bg-[#111]">
        <img src="{{ $image }}" 
             alt="{{ $title }}"
             loading="lazy" 
             class="w-full h-full object-cover transition-transform duration-700 ease-[cubic-bezier(0.2,0.8,0.2,1)] group-hover:scale-105">
    </div>
    <h3 class="text-white text-[22px] font-medium tracking-tight mb-1.5 
               group-hover:text-white/80 transition-colors duration-300">
        {{ $title }}
    </h3>
    <p class="text-[#777] text-[10px] font-semibold tracking-[1.5px] uppercase mb-2">
        {{ $category }}
    </p>
    @if(!empty($tags))
        <div class="flex flex-wrap gap-2 mt-2">
            @foreach($tags as $tag)
                <span class="text-[10px] px-2 py-1 bg-white/10 text-white/70 rounded">
                    {{ trim($tag) }}
                </span>
            @endforeach
        </div>
    @endif
</a>