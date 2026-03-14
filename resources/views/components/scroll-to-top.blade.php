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
    <div class="absolute inset-0 rounded-full
                bg-white/5 opacity-0 blur-xl
                transition duration-500
                group-hover:opacity-100"></div>
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
