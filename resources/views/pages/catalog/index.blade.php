@extends('layouts.app')
@section('content')
    <section id="catalog" class="w-full min-h-screen bg-black text-white py-20 px-6 md:px-16 pb-48">
        <div class="mb-12 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group mb-2 text-sm md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
                    <span>Kembali ke Beranda</span>
                </a>
                <h2 class="text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold leading-tight py-2 uppercase">
                    CATALOG
                </h2>
            </div>
        </div>
        <div class="flex flex-wrap gap-6 mb-12 text-lg">
            <a href="{{ route('catalog.index') }}"
            class="{{ !isset($subcategory) ? 'text-white' : 'text-gray-400' }}">
                All
            </a>
            @foreach($subcategories as $sub)
                <a href="{{ route('catalog.subcategory', $sub->slug) }}"
                class="{{ isset($subcategory) && $subcategory->id == $sub->id ? 'text-white' : 'text-gray-400' }} hover:text-white transition">
                    {{ $sub->name }}
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($products as $product)
                <x-work-card 
                    image="{{ $product->first_image_url }}" 
                    title="{{ $product->name }}" 
                    category="{{ strtoupper($product->subCategory->name ?? 'PRODUK') }}"
                    :tags="$product->tags ? explode(',', $product->tags) : []"
                    :href="route('catalog.show', $product->slug)" 
                />
            @endforeach
        </div>
    </section>
@endsection