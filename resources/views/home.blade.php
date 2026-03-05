@extends('layouts.app')

@section('content')

<div id="home" class="sticky top-0 h-screen w-full z-[15]">
    <div class="absolute inset-0 bg-[#060606] -z-10"></div>
    <div id="hero-content" class="h-full w-full">
        <x-hero />
    </div>
</div>
<div class="relative z-[20] bg-[#060606] lg:mb-[100vh]">
    @include('sections.about')
    @include('sections.products')
    @include('sections.works')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.clients')
    @include('sections.journal')
</div>
<div id="contact" class="relative lg:fixed lg:bottom-0 lg:left-0 w-full z-[30] lg:z-[10]">
    @include('sections.contact')
</div>

@endsection

@push('scripts')

<script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>

<script>
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    wheelMultiplier: 1.1,
    touchMultiplier: 2,
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

window.lenis = lenis;

// ===============================
// FIX ANCHOR (IMPORTANT FIX)
// ===============================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#contact') {
            lenis.scrollTo(document.body.scrollHeight, {
                duration: 1.2
            });
            return;
        }
        if (targetId === '#home') {
            lenis.scrollTo(0, {
                duration: 1.2
            });
            return;
        }
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            lenis.scrollTo(targetElement, {
                offset: -80,
                duration: 1.2
            });
        }
    });
});

const heroContent = document.getElementById('hero-content');
lenis.on('scroll', ({ scroll }) => {
    const vh = window.innerHeight;

    if (heroContent) {
        const progress = Math.min(scroll / vh, 1);
        heroContent.style.opacity = 1 - progress;
    }
});
</script>

@endpush