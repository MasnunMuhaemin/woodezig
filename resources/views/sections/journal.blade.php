<section class="py-24 px-8 md:px-16 bg-[#060606] relative border-t border-white/5" id="journal">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
        <h2 class="journal-section-title text-white text-6xl md:text-8xl lg:text-[110px] font-['Inter',sans-serif] font-bold tracking-tighter leading-none uppercase">
            / JURNAL
        </h2>

        <a href="#" class="group flex items-center gap-3 text-white text-[13px] font-['Outfit',sans-serif] tracking-[2px] uppercase no-underline pb-2 border-b border-white/20 hover:border-white transition-colors duration-300">
            SEMUA JURNAL 
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-8">
        <!-- Big Featured Post (60% width) -->
        <div class="lg:col-span-3">
            <x-journal-card 
                :isLarge="true"
                image="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop"
                date="January 8, 2026"
                title="Keunggulan Jasa Pembuatan Website Custom CMS yang Tidak Dimiliki WordPress"
            />
        </div>

        <!-- Smaller Side Post 1 (20% width) -->
        <div class="lg:col-span-1">
            <x-journal-card 
                image="https://images.unsplash.com/photo-1557838923-2985c318be48?q=80&w=800&auto=format&fit=crop"
                date="June 8, 2025"
                title="Apa itu Rebranding? Strategi Jitu Mengubah Citra Bisnis Anda"
            />
        </div>

        <!-- Smaller Side Post 2 (20% width) -->
        <div class="lg:col-span-1">
            <x-journal-card 
                image="https://images.unsplash.com/photo-1586717791821-3f44a563eb4c?q=80&w=800&auto=format&fit=crop"
                date="February 13, 2025"
                title="10 Vital Components of an Ideal Company Profile Design"
            />
        </div>
    </div>
</section>
