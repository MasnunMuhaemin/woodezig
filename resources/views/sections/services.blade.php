<section class="py-24 px-8 md:px-16 bg-[#060606] relative border-t border-white/5" id="services">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Kolom 1: Label -->
        <div class="lg:col-span-2 pt-4">
            <span class="text-[#555] text-lg font-['Outfit',sans-serif] tracking-[2px] font-medium uppercase">/ KEAHLIAN</span>
        </div>

        <!-- Kolom 2: Dinamis Image (Tampil berdasarkan hover) -->
        <div class="lg:col-span-4 hidden lg:block relative aspect-[4/5] overflow-hidden bg-[#111]">
            <div id="service-images-container" class="w-full h-full relative">
                <!-- Branding Image -->
                <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=800&auto=format&fit=crop" 
                     data-service="branding"
                     class="service-img absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-700" alt="Branding">
                <!-- Website Image -->
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=800&auto=format&fit=crop" 
                     data-service="website"
                     class="service-img absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" alt="Website">
                <!-- Graphic Design Image -->
                <img src="https://images.unsplash.com/photo-1626785774625-ddcddc3445e9?q=80&w=800&auto=format&fit=crop" 
                     data-service="graphic"
                     class="service-img absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" alt="Graphic Design">
                <!-- Interior Image -->
                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop" 
                     data-service="interior"
                     class="service-img absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" alt="Interior">
            </div>
        </div>

        <!-- Kolom 3: Service Titles -->
        <div class="lg:col-span-6 flex flex-col group/list">
            @php
                $services = [
                    ['id' => 'branding', 'title' => 'BRANDING'],
                    ['id' => 'website', 'title' => 'WEBSITE'],
                    ['id' => 'graphic', 'title' => 'DESAIN GRAFIS'],
                    ['id' => 'interior', 'title' => 'INTERIOR'],
                ];
            @endphp

            @foreach($services as $service)
            <div class="service-item relative py-4 md:py-6 cursor-pointer" data-service-id="{{ $service['id'] }}">
                <h3 class="service-title text-4xl md:text-6xl lg:text-[80px] font-bold tracking-tighter leading-none transition-all duration-500 
                           text-white group-hover/list:text-[#333] hover:!text-white">
                    {{ $service['title'] }}
                </h3>
            </div>
            @endforeach
        </div>

    </div>
</section>
