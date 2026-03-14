@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-black text-white py-28 px-6 font-jakarta">
<div class="max-w-4xl mx-auto">
    {{-- REF NUMBER --}}
    <div class="flex justify-between items-center mb-10">
        <span class="text-gray-500 text-[10px] uppercase tracking-[0.3em]">
            {{ $product->subcategory->name }}
        </span>
    </div>
    {{-- HERO IMAGE --}}
    <div class="w-full aspect-[16/9] overflow-hidden mb-6 group">
        <img 
            id="mainImage"
            src="{{ asset('storage/'.$product->images->first()->image_path) }}"
            class="w-full h-full object-cover"
        >
    </div>

    {{-- PRODUCT GALLERY --}}
    @if($product->images->count())
    <div class="flex gap-4 mb-10 overflow-x-auto">
        @foreach($product->images as $img)
            <img 
                src="{{ asset('storage/'.$img->image_path) }}"
                onclick="document.getElementById('mainImage').src=this.src"
                class="w-28 h-16 object-cover rounded-lg cursor-pointer hover:opacity-70 transition"
            >
        @endforeach
    </div>
    @endif
    {{-- TAGS --}}
    <div class="flex flex-wrap gap-3 mb-8">
        @if($product->tags)
            @foreach(explode(',', $product->tags) as $tag)
            <span class="text-[10px] px-4 py-1 bg-white/5 border border-white/10 text-gray-400 uppercase tracking-[0.2em]">
                {{ trim($tag) }}
            </span>
            @endforeach
        @endif
    </div>
    {{-- TITLE --}}
    <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight mb-10 leading-tight">
        {{ $product->name }}
    </h1>
    {{-- DESCRIPTION --}}
    <div class="space-y-6 text-gray-300 leading-[2] text-lg font-light max-w-3xl">
        <p class="selection:bg-primary selection:text-black">
            {!! nl2br(e($product->description)) !!}
        </p>
    </div>
    {{-- ACTION --}}
    <div class="flex items-center gap-10 pt-16 border-t border-white/5 mt-16">
        <button class="group relative px-10 py-4 bg-white text-black transition-all duration-500 hover:bg-primary">
            <span class="text-[11px] font-bold uppercase tracking-[0.4em]">
                Pesan Sekarang
            </span>
        </button>
        <a href="{{ route('catalog.subcategory', $product->subcategory->slug) }}"
        class="text-[10px] uppercase tracking-[0.4em] text-gray-500 hover:text-white transition-all flex items-center gap-4">
            <span>Back to Gallery</span>
            <span class="h-[1px] w-8 bg-gray-800 group-hover:bg-white"></span>
        </a>
    </div>
</div>
</section>
@endsection