@extends('layouts.app')

@section('navbar')
{{-- Kosongkan navbar kalau mau --}}
@endsection

@section('content')

<section class="min-h-screen bg-[#060606] flex items-center justify-center px-8 relative overflow-hidden">
    <div class="absolute w-[600px] h-[600px] bg-white/5 blur-[140px] rounded-full"></div>
    <div class="text-center relative z-10 max-w-3xl">
        <p class="text-white/40 tracking-[4px] uppercase text-sm mb-6 font-sans">
            Segera Hadir
        </p>
        <h1 class="text-white text-5xl md:text-7xl lg:text-[90px] font-bold leading-[0.95] tracking-tight font-sans mb-8">
            Sedang Dalam<br>Pengembangan
        </h1>
        <p class="text-white/60 text-lg md:text-xl leading-relaxed font-sans mb-12">
            Kami sedang mempersiapkan sesuatu yang istimewa.  
            Pengalaman digital yang lebih elegan dan profesional akan segera hadir.
        </p>
        <a href="{{ route('home') }}" 
           class="inline-block border border-white/30 px-8 py-4 text-white text-sm tracking-[3px] uppercase font-sans 
                  hover:bg-white hover:text-black transition-all duration-500">
            Kembali ke Beranda
        </a>
    </div>
</section>

@endsection