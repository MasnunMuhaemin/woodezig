<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamarupa - Landing Page</title>
    <!-- Modern Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-['Inter',sans-serif] overflow-x-hidden antialiased">

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full flex justify-between items-center py-7 px-8 md:px-16 z-50 bg-[#060606]/85 backdrop-blur-xl border-b border-white/5">
        <a href="#home" class="flex items-center gap-3 font-['Outfit',sans-serif] font-medium text-[15px] tracking-[3px] uppercase text-white no-underline">
            <!-- Basic SVG replicating K letter aesthetic -->
            <svg viewBox="0 0 40 40" fill="none" class="h-6 w-auto" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 5V35H16V5H10Z" fill="white"/>
                <path d="M18 19L32 5H24L16 13L18 19Z" fill="white"/>
                <path d="M16 27L24 35H32L18 21L16 27Z" fill="white"/>
            </svg>
            KAMARUPA
        </a>

        <ul class="hidden md:flex gap-10 list-none m-0 p-0">
            <li><a href="#about" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">About</a></li>
            <li><a href="#works" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Works</a></li>
            <li><a href="#services" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Services</a></li>
            <li><a href="#journal" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Journal</a></li>
            <li><a href="#contact" class="text-white/80 no-underline text-[11px] font-medium tracking-[1.5px] uppercase transition-all duration-300 hover:text-white">Contact</a></li>
        </ul>
    </nav>

    <!-- Main Hero Section -->
    <section class="relative h-screen flex flex-col justify-center items-center overflow-hidden" id="home">
        
        <div class="flex w-full max-w-[1600px] gap-5 flex-col md:flex-row h-[80vh] md:h-[65vh] mt-[100px] md:mt-[60px] px-5 md:px-10 relative z-10">
            
            <!-- Left Screen -->
            <div class="flex-1 min-h-[30%] md:min-h-0 bg-cover bg-center rounded relative overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group" style="background-image: url('https://images.unsplash.com/photo-1478131143081-80f7f84ca84d?q=80&w=800&auto=format&fit=crop');">
                <div class="absolute inset-0 bg-black/50 transition-colors duration-500 group-hover:bg-transparent"></div>
            </div>
            
            <!-- Center Screen (Focus) -->
            <div class="flex-1 md:flex-[1.2] min-h-[30%] md:min-h-0 bg-cover bg-center rounded relative overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.8)] group" style="background-image: url('https://images.unsplash.com/photo-1542224566-6e85f2e6772f?q=80&w=1200&auto=format&fit=crop');">
                <div class="absolute inset-0 bg-black/10 transition-colors duration-500 group-hover:bg-transparent"></div>
            </div>
            
            <!-- Right Screen -->
            <div class="flex-1 min-h-[30%] md:min-h-0 bg-cover bg-center rounded relative overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group" style="background-image: url('https://images.unsplash.com/photo-1455849318743-b2233052fcff?q=80&w=800&auto=format&fit=crop');">
                <div class="absolute inset-0 bg-black/50 transition-colors duration-500 group-hover:bg-transparent"></div>
            </div>

        </div>

        <!-- Floor Lighting Effect -->
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-[100px] bg-[radial-gradient(ellipse_at_top,rgba(255,255,255,0.05)_0%,transparent_70%)] pointer-events-none z-0"></div>

        <!-- Scroll Indicator -->
        <a href="#about" class="absolute bottom-[50px] left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 text-[11px] font-['Outfit',sans-serif] tracking-[2px] uppercase no-underline text-white/60 transition-opacity duration-300 hover:text-white z-20 group">
            Discover Now &darr;
            <div class="w-[100px] h-[1px] bg-white/20 transition-all duration-300 group-hover:w-[140px] group-hover:bg-white/60"></div>
        </a>

    </section>

    <!-- Content Sections representing the Single Page structure -->
    <section class="min-h-screen py-[100px] px-8 md:px-16 flex items-center justify-center bg-[#060606] border-t border-white/5" id="about">
        <h2 class="font-['Outfit',sans-serif] text-3xl md:text-5xl font-light tracking-[2px] text-[#555] uppercase">About Section</h2>
    </section>

    <section class="min-h-screen py-[100px] px-8 md:px-16 flex items-center justify-center bg-[#060606] border-t border-white/5" id="works">
        <h2 class="font-['Outfit',sans-serif] text-3xl md:text-5xl font-light tracking-[2px] text-[#555] uppercase">Works Section</h2>
    </section>

    <section class="min-h-screen py-[100px] px-8 md:px-16 flex items-center justify-center bg-[#060606] border-t border-white/5" id="services">
        <h2 class="font-['Outfit',sans-serif] text-3xl md:text-5xl font-light tracking-[2px] text-[#555] uppercase">Services Section</h2>
    </section>

    <section class="min-h-screen py-[100px] px-8 md:px-16 flex items-center justify-center bg-[#060606] border-t border-white/5" id="journal">
        <h2 class="font-['Outfit',sans-serif] text-3xl md:text-5xl font-light tracking-[2px] text-[#555] uppercase">Journal Section</h2>
    </section>

    <section class="min-h-screen py-[100px] px-8 md:px-16 flex items-center justify-center bg-[#060606] border-t border-white/5" id="contact">
        <h2 class="font-['Outfit',sans-serif] text-3xl md:text-5xl font-light tracking-[2px] text-[#555] uppercase">Contact Section</h2>
    </section>

    <!-- Floating WhatsApp Action Button -->
    <a href="https://wa.me/1234567890" class="fixed bottom-10 right-10 w-14 h-14 bg-white rounded-full flex justify-center items-center shadow-[0_10px_25px_rgba(0,0,0,0.5)] z-[100] transition-transform duration-300 hover:scale-110 hover:-translate-y-1" target="_blank" rel="noopener noreferrer" title="Chat with us via WhatsApp">
        <svg viewBox="0 0 24 24" class="w-8 h-8 fill-black" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.031 0C5.385 0 0 5.378 0 12.016c0 2.128.552 4.195 1.6 6.012L.416 22.316l4.42-1.157A11.97 11.97 0 0012.03 24c6.645 0 12.03-5.383 12.03-12.03C24.06 5.38 18.675 0 12.03 0zm0 21.986c-1.801 0-3.565-.487-5.115-1.408l-.367-.216-3.284.86.877-3.193-.238-.38A9.975 9.975 0 011.968 12.02c0-5.541 4.512-10.046 10.063-10.046 5.548 0 10.06 4.512 10.06 10.06 0 5.547-4.51 10.048-10.06 10.048H12.03v-.096zm5.526-7.536c-.302-.152-1.789-.884-2.065-.986-.275-.102-.477-.152-.678.151-.202.304-.78 1.01-.955 1.213-.176.202-.352.228-.654.076-.301-.151-1.275-.469-2.428-1.503-.896-.803-1.501-1.796-1.678-2.1-.176-.303-.019-.467.132-.618.136-.137.302-.353.453-.531.152-.178.203-.304.303-.506.101-.202.051-.38-.025-.53-.075-.152-.677-1.632-.927-2.235-.243-.588-.49-.508-.678-.518-.175-.008-.376-.01-.577-.01-.2 0-.527.075-.803.38-.276.303-1.055 1.03-1.055 2.511 0 1.482 1.08 2.915 1.23 3.118.151.202 2.126 3.242 5.148 4.545.718.31 1.278.495 1.714.633.722.229 1.38.196 1.898.119.58-.086 1.789-.731 2.04-1.439.251-.707.251-1.314.176-1.442-.075-.126-.276-.202-.578-.353z"/>
        </svg>
    </a>

</body>
</html>
