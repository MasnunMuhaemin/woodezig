@extends('layouts.app')

@section('content')
    <section id="articles" class="w-full min-h-screen bg-black text-white py-20 px-6 md:px-16 pb-48">
        <div class="mb-24 flex flex-col items-start">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-gray-500 hover:text-white transition group mb-12 text-sm uppercase tracking-[0.2em] w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
                <span>Kembali ke Beranda</span>
            </a>            
            <div class="flex flex-col items-center w-fit">
                <h2 class="text-primary text-4xl md:text-6xl lg:text-7xl font-sans font-bold leading-tight py-2 uppercase">
                    RUANG CERITA
                </h2>
            </div>
            <p class="text-gray-400 max-w-2xl text-lg font-light leading-relaxed">
                Menjelajahi persimpangan antara desain, fungsionalitas, dan narasi visual <br class="hidden md:block"> dalam setiap langkah kami.
            </p>
        </div>
        @if($articles->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:gap-10">
                @foreach($articles as $article)
                    <x-journal-card 
                        :image="$article->first_image_url"
                        :date="$article->created_at->translatedFormat('d F Y')"
                        :title="$article->title"
                        :href="route('article.show', $article->slug)" 
                    />
                @endforeach
            </div>
            <div class="mt-20">
                {{ $articles->links() }}
            </div>
        @else
            <div class="py-20 text-center border border-white/5 bg-white/5">
                <p class="text-gray-500 italic">Belum ada artikel yang dipublikasikan.</p>
            </div>
        @endif
    </section>
@endsection
