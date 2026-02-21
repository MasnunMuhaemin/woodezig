<nav id="navbar" class="fixed top-0 left-0 w-full flex justify-between items-center py-7 px-8 md:px-16 z-50 bg-transparent border-b border-transparent transition-all duration-300">
    <a href="#home" class="flex items-center gap-3 font-['Outfit',sans-serif] font-medium text-[15px] tracking-[3px] uppercase text-white no-underline">
        <!-- Basic SVG replicating K letter aesthetic -->
        <svg viewBox="0 0 40 40" fill="none" class="h-6 w-auto" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 5V35H16V5H10Z" fill="white"/>
            <path d="M18 19L32 5H24L16 13L18 19Z" fill="white"/>
            <path d="M16 27L24 35H32L18 21L16 27Z" fill="white"/>
        </svg>
        WOODEZIG
    </a>

    <ul class="hidden md:flex gap-10 list-none m-0 p-0">
        <li><a href="#about" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">About</a></li>
        <li><a href="#works" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Works</a></li>
        <li><a href="#services" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Services</a></li>
        <li><a href="#journal" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Journal</a></li>
        <li><a href="#contact" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Contact</a></li>
    </ul>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            // Ketika di-scroll lebih dari 50px (sebelumnya transparan)
            if (window.scrollY > 50) {
                navbar.classList.add('bg-[#060606]/85', 'backdrop-blur-xl', 'border-white/5');
                navbar.classList.remove('bg-transparent', 'border-transparent');
            } else {
                navbar.classList.remove('bg-[#060606]/85', 'backdrop-blur-xl', 'border-white/5');
                navbar.classList.add('bg-transparent', 'border-transparent');
            }
        });
    });
</script>
