<button id="scrollToTop"
    class="flex fixed bottom-24 right-5 md:bottom-28 md:right-10
           group
           w-12 h-12 md:w-14 md:h-14 rounded-full
           bg-white/5 backdrop-blur-2xl
           border border-white/10
           shadow-[0_10px_40px_rgba(0,0,0,0.4)]
           justify-center items-center
           opacity-0 invisible translate-y-4
           transition-all duration-500 ease-out
           hover:translate-y-0 hover:scale-110
           hover:border-white/30
           z-[100]">
           
    <!-- Glow -->
    <div class="absolute inset-0 rounded-full
                bg-white/5 opacity-0 blur-xl
                transition duration-500
                group-hover:opacity-100"></div>

    <!-- Arrow -->
    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-4 h-4 md:w-5 md:h-5 text-white relative z-10
                transition-transform duration-300
                group-hover:-translate-y-1"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor"
         stroke-width="1.5">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M15 11l-3-3-3 3M12 8v8" />
    </svg>
</button>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const scrollBtn = document.getElementById("scrollToTop");

    function showButton() {
        scrollBtn.classList.remove("opacity-0", "invisible", "translate-y-4");
        scrollBtn.classList.add("opacity-100", "translate-y-0");
    }

    function hideButton() {
        scrollBtn.classList.add("opacity-0", "invisible", "translate-y-4");
        scrollBtn.classList.remove("opacity-100", "translate-y-0");
    }

    function toggleButton(scroll) {
        if (scroll > window.innerHeight * 0.8) {
            showButton();
        } else {
            hideButton();
        }
    }

    if (window.lenis) {
        window.lenis.on('scroll', ({ scroll }) => {
            toggleButton(scroll);
        });

        scrollBtn.addEventListener("click", () => {
            window.lenis.scrollTo(0, {
                duration: 1.4
            });
        });
    } else {
        window.addEventListener("scroll", () => {
            toggleButton(window.scrollY);
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

});
</script>