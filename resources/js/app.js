import "./bootstrap";
import Lenis from "@studio-freight/lenis";

// ===============================
// INIT LENIS
// ===============================
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    wheelMultiplier: 1.1,
    touchMultiplier: 2,
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

window.lenis = lenis;

// ===============================
// DOM READY
// ===============================
document.addEventListener("DOMContentLoaded", () => {
    // ===============================
    // MOBILE MENU
    // ===============================
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const body = document.body;

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("opacity-0");
            mobileMenu.classList.toggle("opacity-100");
            mobileMenu.classList.toggle("invisible");
            body.classList.toggle("overflow-hidden");
        });

        document.querySelectorAll(".mobile-link").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("opacity-0", "invisible");
                mobileMenu.classList.remove("opacity-100");
                body.classList.remove("overflow-hidden");
            });
        });
    }

    // ===============================
    // FIX ANCHOR SCROLL (SPA + MULTI PAGE)
    // ===============================
    document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const url = new URL(this.href);
            const currentPath = window.location.pathname;

            // jika beda page → biarkan pindah page
            if (url.pathname !== currentPath) return;

            const targetId = url.hash;
            const targetElement = document.querySelector(targetId);

            if (!targetElement) return;

            e.preventDefault();

            if (targetId === "#contact") {
                lenis.scrollTo(document.body.scrollHeight, {
                    duration: 1.2,
                });
                return;
            }

            if (targetId === "#home") {
                lenis.scrollTo(0, {
                    duration: 1.2,
                });
                return;
            }

            lenis.scrollTo(targetElement, {
                offset: -80,
                duration: 1.2,
            });
        });
    });

    // ===============================
    // SCROLL HASH AFTER PAGE LOAD
    // (FIX MULTI PAGE #CONTACT)
    // ===============================
    if (window.location.hash) {
        const targetId = window.location.hash;
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.addEventListener("load", () => {
                setTimeout(() => {
                    if (targetId === "#contact") {
                        lenis.scrollTo(document.body.scrollHeight, {
                            duration: 1.2,
                        });
                        return;
                    }

                    if (targetId === "#home") {
                        lenis.scrollTo(0, {
                            duration: 1.2,
                        });
                        return;
                    }

                    lenis.scrollTo(targetElement, {
                        offset: -80,
                        duration: 1.2,
                    });
                }, 300);
            });
        }
    }

    // ===============================
    // HERO FADE OUT
    // ===============================
    const heroContent = document.getElementById("hero-content");

    lenis.on("scroll", ({ scroll }) => {
        const vh = window.innerHeight;

        if (heroContent) {
            const progress = Math.min(scroll / vh, 1);
            heroContent.style.opacity = 1 - progress;
        }
    });

    // ===============================
    // REVEAL TEXT SCROLL
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

        lenis.on("scroll", () => {
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
    // HORIZONTAL SCROLL
    // ===============================
    const horizontalSections = [
        {
            section: document.getElementById("works-section"),
            track: document.getElementById("works-track"),
        },
        {
            section: document.getElementById("products-section"),
            track: document.getElementById("products-track"),
        },
    ];

    horizontalSections.forEach(({ section, track }) => {
        if (!section || !track) return;

        lenis.on("scroll", () => {
            if (window.innerWidth < 1024) {
                track.style.transform = "none";
                return;
            }

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
    });

    // ===============================
    // NAVBAR SCROLL EFFECT
    // ===============================
    const navbar = document.getElementById("navbar");

    if (navbar) {
        lenis.on("scroll", ({ scroll }) => {
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

    // ===============================
    // PAGE LOADER
    // ===============================
    const loader = document.getElementById("page-loader");

    if (loader) {
        loader.style.opacity = "1";
        loader.style.display = "flex";

        window.addEventListener("load", () => {
            setTimeout(() => {
                loader.style.opacity = "0";

                setTimeout(() => {
                    loader.style.display = "none";
                }, 500);
            }, 300);
        });
    }
});
