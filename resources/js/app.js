import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const textElement = document.getElementById("reveal-text");
    if (!textElement) return;

    // Ambil text dan bersihkan
    const textArea = textElement.innerText.trim();
    const words = textArea.split(/\s+/);
    textElement.innerHTML = "";

    // Membungkus masing-masing kata ke dalam span
    words.forEach((word) => {
        const span = document.createElement("span");
        span.innerText = word + " ";

        // Eksekusi semua transisi lambat murni menggunakan utility class bawaan TailwindCSS
        span.className =
            "text-[#333] transition-colors duration-[3000ms] ease-[cubic-bezier(0.1,0.9,0.2,1)]";

        textElement.appendChild(span);
    });

    const spans = textElement.querySelectorAll("span");

    function handleScroll() {
        const windowHeight = window.innerHeight;
        const containerRect = textElement.getBoundingClientRect();

        // Rentang scroll difokuskan lebih sempit agar pemicu per katanya lebih terkendali
        const startY = windowHeight * 0.85;
        const endY = windowHeight * 0.15;

        // Progress scroll dari wadah teks (0.0 sampai 1.0)
        let progress = (startY - containerRect.top) / (startY - endY);
        progress = Math.max(0, Math.min(1, progress));

        // Menghitung berapa kata yang harus dalam warna 'putih' berdasarkan progress scroll
        const totalWords = spans.length;
        const activeCount = Math.ceil(progress * totalWords);

        spans.forEach((span, index) => {
            // Terapkan warna Putih / Abu sesuai urutan lewat TailwindCSS class
            if (index < activeCount) {
                span.classList.remove("text-[#333]");
                span.classList.add("text-white");
            } else {
                span.classList.remove("text-white");
                span.classList.add("text-[#333]");
            }
        });
    }

    // Terapkan saat scroll dengan performa tinggi
    window.addEventListener("scroll", handleScroll, { passive: true });

    // Panggil di awal jika user sudah di tengah halaman
    handleScroll();
});
