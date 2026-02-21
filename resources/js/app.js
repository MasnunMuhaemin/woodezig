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

// Script untuk Animasi Horizontal Scroll pada Works
document.addEventListener("DOMContentLoaded", () => {
    const section = document.getElementById("works-section");
    const track = document.getElementById("works-track");

    if (!section || !track) return;

    function handleHorizontalScroll() {
        const rect = section.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        // Jarak vertikal yang dialokasikan untuk menyelesaikan scroll horizontal (misal total tinggi section dikurangi satu window)
        const maxScrollDist = section.offsetHeight - viewportHeight;

        // Lebar sisa track yang harus digeser ke kiri (panjang total konten dikurangi layar)
        const maxTranslateDist = track.scrollWidth - window.innerWidth;

        // Jika jumlah card tidak melebihi layar, maka tidak perlu scroll menyamping
        if (maxTranslateDist <= 0) return;

        // Progress scroll secara Spesifik ketika layar berada di area Works (Bernilai dari 0.0 hingga 1.0)
        let progress = -rect.top / maxScrollDist;
        progress = Math.max(0, Math.min(1, progress));

        // Hitung perpindahan (mulus dari 0 hingga jarak maksimum)
        const translateX = progress * maxTranslateDist;

        // Aplikasikan Transform langsung pada Track-nya
        track.style.transform = `translateX(-${translateX}px)`;
    }

    window.addEventListener("scroll", handleHorizontalScroll, {
        passive: true,
    });

    // Inisiasi awal
    handleHorizontalScroll();
});

// Script untuk Hover Image pada Services/Expertise (dengan Auto-Loop)
document.addEventListener("DOMContentLoaded", () => {
    const serviceItems = document.querySelectorAll(".service-item");
    const serviceImages = document.querySelectorAll(".service-img");

    if (!serviceItems.length || !serviceImages.length || !serviceImages[0])
        return;

    let currentIndex = 0;
    let autoLoopInterval;
    let isHovering = false;

    function showImage(id) {
        serviceImages.forEach((img) => {
            if (img.getAttribute("data-service") === id) {
                img.classList.remove("opacity-0");
                img.classList.add("opacity-100");
            } else {
                img.classList.remove("opacity-100");
                img.classList.add("opacity-0");
            }
        });
    }

    function startAutoLoop() {
        autoLoopInterval = setInterval(() => {
            if (!isHovering) {
                currentIndex = (currentIndex + 1) % serviceImages.length;
                const nextId =
                    serviceImages[currentIndex].getAttribute("data-service");
                showImage(nextId);
            }
        }, 3000); // Ganti gambar setiap 3 detik
    }

    serviceItems.forEach((item, index) => {
        item.addEventListener("mouseenter", () => {
            isHovering = true;
            clearInterval(autoLoopInterval);
            currentIndex = index;
            const serviceId = item.getAttribute("data-service-id");
            showImage(serviceId);
        });

        item.addEventListener("mouseleave", () => {
            isHovering = false;
            startAutoLoop();
        });
    });

    // Jalankan auto-loop pertama kali
    startAutoLoop();
});
