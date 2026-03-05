<nav id="navbar"
     class="fixed top-0 left-0 w-full 
            flex justify-between items-center 
            py-6 px-8 md:px-16 
            bg-transparent border-transparent
            transition-all duration-500 ease-out
            font-sans
            z-50">
    <a href="#home"
       class="flex items-center gap-3">
        <img src="{{ asset('logo/White-Orange.svg') }}" alt="Woodezig Logo" class="h-5 md:h-6 w-auto">
    </a>
    <!-- DESKTOP MENU -->
    <ul class="hidden lg:flex lg:gap-6 xl:gap-10">
        <li>
            <a href="#about"
            class="relative text-white transition duration-300
                    after:content-['']
                    after:absolute
                    after:left-0
                    after:-bottom-1
                    after:w-0
                    after:h-[1px]
                    after:bg-primary
                    after:transition-all
                    after:duration-300
                    hover:after:w-full">
                Tentang
            </a>
        </li>
        <li>
            <a href="#products-section"
            class="relative text-white transition duration-300
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[1px] after:bg-primary
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Produk
            </a>
        </li>
        <li>
            <a href="#works-section"
            class="relative text-white transition duration-300
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[1px] after:bg-primary
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Karya
            </a>
        </li>
        <li>
            <a href="#services"
            class="relative text-white transition duration-300
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[1px] after:bg-primary
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Layanan
            </a>
        </li>

        <li>
            <a href="#journal"
            class="relative text-white transition duration-300
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[1px] after:bg-primary
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Artikel
            </a>
        </li>
        <li>
            <a href="#contact"
            class="relative text-white transition duration-300
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[1px] after:bg-primary
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Kontak
            </a>
        </li>
    </ul>
    <!-- SINGLE HAMBURGER -->
    <button id="menu-btn"
            class="lg:hidden flex flex-col gap-1.5 z-50">
        <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
        <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
        <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
    </button>
</nav>
    <!-- MOBILE MENU -->
    <div id="mobile-menu"
        class="fixed inset-0
                flex items-center justify-end pr-8 md:pr-16
                bg-black/70 backdrop-blur-2xl
                opacity-0 invisible
                transition-all duration-500
                lg:hidden z-40">

        <div class="flex flex-col items-end gap-10 text-2xl uppercase">
            <a href="#about" class="mobile-link">Tentang</a>
            <a href="#products-section" class="mobile-link">Produk</a>
            <a href="#works-section" class="mobile-link">Karya</a>
            <a href="#services" class="mobile-link">Layanan</a>
            <a href="#journal" class="mobile-link">Artikel</a>
            <a href="#contact" class="mobile-link">Kontak</a>
            <a href="https://wa.me/62823456789" target="_blank" class="mobile-link sm:hidden flex items-center gap-2">
                WhatsApp
                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path>
                </svg>
            </a>
        </div>
    </div>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('opacity-0');
        mobileMenu.classList.toggle('opacity-100');
        mobileMenu.classList.toggle('invisible');
        body.classList.toggle('overflow-hidden');
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('opacity-0','invisible');
            mobileMenu.classList.remove('opacity-100');
            body.classList.remove('overflow-hidden');
        });
    });
</script>