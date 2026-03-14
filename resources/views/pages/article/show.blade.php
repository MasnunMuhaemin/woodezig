@extends('layouts.app')

@section('content')
<article class="min-h-screen bg-black text-white py-28 font-sans">
    <div class="px-8 md:px-16">
        {{-- WRAPPER FOR ALIGNMENT --}}
        <div class="max-w-7xl mx-auto">
            {{-- HEADER --}}
            <div class="mb-20">
                <a href="{{ route('article.index') }}" class="flex items-center gap-2 text-gray-500 hover:text-white transition group mb-12 text-sm uppercase tracking-[0.2em] w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
                    <span>Kembali ke Semua Artikel</span>
                </a>
                
                <div class="flex items-center gap-4 text-[10px] uppercase tracking-[0.4em] text-primary font-bold mb-8">
                    <span>{{ $article->created_at->translatedFormat('d F Y') }}</span>
                </div>
                
                <h2 class="text-white text-4xl md:text-6xl lg:text-7xl font-sans font-bold leading-tight py-2 uppercase">
                    {{ $article->title }}
                </h2>
            </div>

            {{-- HERO IMAGE - CENTERED & SHORTER --}}
            <div class="max-w-5xl mx-auto mb-24 overflow-hidden bg-[#111]">
                <div class="w-full aspect-[16/9]">
                    <img 
                        src="{{ $article->first_image_url }}" 
                        alt="{{ $article->title }}"
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>

            {{-- TEXT CONTENT --}}
            <div class="max-w-4xl mx-auto mb-32">
                <div class="prose prose-invert prose-xl max-w-none prose-p:text-gray-300 prose-p:leading-[1.9] prose-headings:text-white prose-a:text-primary font-light">
                    {!! $article->content !!}
                </div>
            </div>

            {{-- GALLERY WITH DESCRIPTIONS --}}
            @if($article->images->count() > 1)
            <div class="space-y-48 mb-32">
                @foreach($article->images->skip(1) as $index => $img)
                    <div class="flex flex-col {{ $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center gap-16 md:gap-24">
                        <div class="w-full md:w-2/3 aspect-[16/10] overflow-hidden bg-[#111]">
                            <img 
                                src="{{ str_starts_with($img->image, 'http') ? $img->image : asset('storage/'.$img->image) }}" 
                                class="w-full h-full object-cover hover:scale-105 transition duration-700"
                            >
                        </div>
                        <div class="w-full md:w-1/3 space-y-8">
                            <div class="flex items-center gap-4 text-primary font-bold text-[11px] uppercase tracking-[0.4em]">
                                <span class="w-10 h-[1px] bg-primary"></span>
                                <span>Detail {{ $index + 1 }}</span>
                            </div>
                            <p class="text-gray-300 text-lg leading-[1.8] font-light">
                                {{ $img->description ?? 'Deskripsi untuk gambar ini belum tersedia.' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif

            {{-- FOOTER / NAVIGATION --}}
            <div class="border-t border-white/10 pt-20 mt-32">
                <h4 class="text-xs font-bold uppercase tracking-[0.4em] mb-16 text-gray-500">Artikel Terkait</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    @foreach($relatedArticles as $rel)
                    <x-journal-card 
                        :image="$rel->first_image_url"
                        :date="$rel->created_at->format('M d, Y')"
                        :title="$rel->title"
                        :href="route('article.show', $rel->slug)" 
                    />
                    @endforeach
                </div>
            </div>
            
            <div class="flex justify-start mt-32 pb-20">
                <a href="{{ route('article.index') }}" class="group px-16 py-5 border border-white/10 hover:border-primary hover:text-primary transition-all uppercase text-[11px] font-bold tracking-[0.4em] flex items-center gap-4">
                    Lihat Semua Artikel
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</article>
@endsection
