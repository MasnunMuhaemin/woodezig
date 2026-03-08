@extends('layouts.app')
@section('content')
    <section id="catalog" class="w-full min-h-screen bg-black text-white py-20 px-6 md:px-16">
        <div class="mb-12">
            <h2 class="text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold leading-tight py-2 uppercase">
                CATALOG
            </h2>
        </div>
        <div class="flex flex-wrap gap-6 mb-12 text-lg">
            <a href="{{ route('catalog.index') }}"
            class="{{ !isset($subcategory) ? 'text-white' : 'text-gray-400' }}">
                All
            </a>
            @foreach($subcategories as $sub)
                <a href="{{ route('catalog.index', $sub->slug) }}"
                class="{{ isset($subcategory) && $subcategory->id == $sub->id ? 'text-white' : 'text-gray-400' }} hover:text-white transition">
                    {{ $sub->name }}
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($products as $product)
                <x-work-card
                    :image="asset('storage/'.$product->image)"
                    :title="$product->name"
                    :category="$product->subcategory->name"
                />
            @endforeach
        </div>
    </section>
@endsection