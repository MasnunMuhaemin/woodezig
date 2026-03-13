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
    <!-- @include('sections.clients') -->
    @include('sections.journal')
</div>

@endsection

@section('footer')
<div id="contact" class="relative lg:fixed lg:bottom-0 lg:left-0 w-full z-[30] lg:z-[10]">
    @include('sections.contact')
</div>
@endsection