import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    // ===============================
    // REVEAL TEXT SCROLL (SYNC LENIS)
    // ===============================
    const textElement = document.getElementById("reveal-text");

    if (textElement) {
        const textArea = textElement.innerText.trim();
        const words = textArea.split(/\s+/);
        textElement.innerHTML = "";

        words.forEach((word) => {
            const span = document.createElement("span");
            span.innerText = word + " ";
            span.className =
                "text-[#333] transition-colors duration-[3000ms] ease-[cubic-bezier(0.1,0.9,0.2,1)]";
            textElement.appendChild(span);
        });

        const spans = textElement.querySelectorAll("span");

        window.lenis?.on("scroll", ({ scroll }) => {
            const windowHeight = window.innerHeight;
            const containerRect = textElement.getBoundingClientRect();

            const startY = windowHeight * 0.85;
            const endY = windowHeight * 0.15;

            let progress = (startY - containerRect.top) / (startY - endY);
            progress = Math.max(0, Math.min(1, progress));

            const totalWords = spans.length;
            const activeCount = Math.ceil(progress * totalWords);

            spans.forEach((span, index) => {
                if (index < activeCount) {
                    span.classList.remove("text-[#333]");
                    span.classList.add("text-white");
                } else {
                    span.classList.remove("text-white");
                    span.classList.add("text-[#333]");
                }
            });
        });
    }

    // ===============================
    // HORIZONTAL SCROLL WORKS
    // ===============================
    const section = document.getElementById("works-section");
    const track = document.getElementById("works-track");

    if (section && track) {
        window.lenis?.on("scroll", () => {
            const rect = section.getBoundingClientRect();
            const viewportHeight = window.innerHeight;

            const maxScrollDist = section.offsetHeight - viewportHeight;
            const maxTranslateDist = track.scrollWidth - window.innerWidth;

            if (maxTranslateDist <= 0) return;

            let progress = -rect.top / maxScrollDist;
            progress = Math.max(0, Math.min(1, progress));

            const translateX = progress * maxTranslateDist;

            track.style.transform = `translateX(-${translateX}px)`;
        });
    }

    // ===============================
    // SERVICES IMAGE HOVER LOOP
    // ===============================
    const serviceItems = document.querySelectorAll(".service-item");
    const serviceImages = document.querySelectorAll(".service-img");

    if (serviceItems.length && serviceImages.length) {
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
                        serviceImages[currentIndex].getAttribute(
                            "data-service",
                        );
                    showImage(nextId);
                }
            }, 3000);
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

        startAutoLoop();
    }

    // ===============================
    // SECTION TITLE REVEAL
    // ===============================
    const sectionTitles = document.querySelectorAll(
        ".journal-section-title, .works-section-title",
    );

    sectionTitles.forEach((title) => {
        const text = title.innerText.trim();
        title.innerHTML = "";

        [...text].forEach((char) => {
            const wrapper = document.createElement("span");
            wrapper.style.display = "inline-block";
            wrapper.style.overflow = "hidden";

            const innerChar = document.createElement("span");
            innerChar.innerText = char === " " ? "\u00A0" : char;
            innerChar.style.display = "inline-block";
            innerChar.style.transform = "translateY(110%)";
            innerChar.style.transition =
                "transform 1.2s cubic-bezier(0.16, 1, 0.3, 1)";
            innerChar.className = "reveal-section-char";

            wrapper.appendChild(innerChar);
            title.appendChild(wrapper);
        });

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    const chars = entry.target.querySelectorAll(
                        ".reveal-section-char",
                    );

                    if (entry.isIntersecting) {
                        chars.forEach((char, index) => {
                            setTimeout(() => {
                                char.style.transform = "translateY(0)";
                            }, index * 40);
                        });
                    } else {
                        chars.forEach((char) => {
                            char.style.transform = "translateY(110%)";
                        });
                    }
                });
            },
            { threshold: 0.1, rootMargin: "0px 0px -50px 0px" },
        );

        observer.observe(title);
    });

    // ===============================
    // JOURNAL TITLE WORD REVEAL
    // ===============================
    const journalTitles = document.querySelectorAll(".journal-title");

    journalTitles.forEach((title) => {
        const text = title.innerText.trim();
        const words = text.split(/\s+/);
        title.innerHTML = "";

        words.forEach((word) => {
            const wrapper = document.createElement("span");
            wrapper.style.display = "inline-block";
            wrapper.style.overflow = "hidden";

            const innerWord = document.createElement("span");
            innerWord.innerText = word + "\u00A0";
            innerWord.style.display = "inline-block";
            innerWord.style.transform = "translateY(110%)";
            innerWord.style.transition =
                "transform 0.8s cubic-bezier(0.16, 1, 0.3, 1)";
            innerWord.className = "reveal-word";

            wrapper.appendChild(innerWord);
            title.appendChild(wrapper);
        });

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    const words = entry.target.querySelectorAll(".reveal-word");

                    if (entry.isIntersecting) {
                        words.forEach((word, index) => {
                            setTimeout(() => {
                                word.style.transform = "translateY(0)";
                            }, index * 40);
                        });
                    } else {
                        words.forEach((word) => {
                            word.style.transform = "translateY(110%)";
                        });
                    }
                });
            },
            { threshold: 0.1, rootMargin: "0px 0px -100px 0px" },
        );

        observer.observe(title);
    });

    // ===============================
    // NAVBAR SCROLL EFFECT (LENIS)
    // ===============================
    const navbar = document.getElementById("navbar");

    if (navbar && window.lenis) {
        window.lenis.on("scroll", ({ scroll }) => {
            if (scroll > 50) {
                navbar.classList.add(
                    "bg-black/80",
                    "backdrop-blur-xl",
                    "border-white/10",
                );
                navbar.classList.remove("bg-transparent", "border-transparent");
            } else {
                navbar.classList.remove(
                    "bg-black/80",
                    "backdrop-blur-xl",
                    "border-white/10",
                );
                navbar.classList.add("bg-transparent", "border-transparent");
            }
        });
    }
    
});
