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
        <img src="{{ asset('logo/Logo-White.svg') }}" alt="Woodezig Logo" class="h-5 md:h-6 w-auto">
    </a>
    <!-- DESKTOP MENU -->
    <ul class="hidden lg:flex lg:gap-6 xl:gap-10">
        <li>
            <a href="#about"
            class="relative text-white transition duration-300
                    hover:text-primary
                    after:content-['']
                    after:absolute
                    after:left-0
                    after:-bottom-1
                    after:w-0
                    after:h-[2px]
                    after:bg-white
                    after:transition-all
                    after:duration-300
                    hover:after:w-full">
                Tentang
            </a>
        </li>
        <li>
            <a href="#products-section"
            class="relative text-white transition duration-300 hover:text-primary
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[2px] after:bg-white
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Produk
            </a>
        </li>
        <li>
            <a href="#works-section"
            class="relative text-white transition duration-300 hover:text-primary
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[2px] after:bg-white
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Karya
            </a>
        </li>
        <li>
            <a href="#services"
            class="relative text-white transition duration-300 hover:text-primary
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[2px] after:bg-white
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Layanan
            </a>
        </li>

        <li>
            <a href="#journal"
            class="relative text-white transition duration-300 hover:text-primary
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[2px] after:bg-white
                    after:transition-all after:duration-300
                    hover:after:w-full">
                Artikel
            </a>
        </li>
        <li>
            <a href="#contact"
            class="relative text-white transition duration-300 hover:text-primary
                    after:content-[''] after:absolute after:left-0 after:-bottom-1
                    after:w-0 after:h-[2px] after:bg-white
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
                flex items-center justify-center
                bg-black/70 backdrop-blur-2xl
                opacity-0 invisible
                transition-all duration-500
                lg:hidden z-40">

        <div class="flex flex-col items-center gap-10 text-2xl uppercase">
            <a href="#about" class="mobile-link">Tentang</a>
            <a href="#products-section" class="mobile-link">Produk</a>
            <a href="#works-section" class="mobile-link">Karya</a>
            <a href="#services" class="mobile-link">Layanan</a>
            <a href="#journal" class="mobile-link">Artikel</a>
            <a href="#contact" class="mobile-link">Kontak</a>
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