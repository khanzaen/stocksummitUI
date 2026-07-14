<!-- Header / Navigation -->
<header class="sticky top-0 z-50 w-full border-b border-slate-800/60 glassmorphism transition-all duration-300" id="main-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center gap-3 group">
            <img src="{{ asset('images/stock_summit_logo.png') }}" alt="StockSummit Logo" class="h-10 w-auto rounded-lg group-hover:scale-105 transition-transform duration-300">
            <span class="font-outfit font-black text-xl tracking-tight text-white group-hover:text-[#af8a3c] transition-colors">STOCK<span class="text-[#af8a3c]">SUMMIT UI</span></span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
            <a href="#about" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">About</a>
            <a href="#tracks" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">Tracks</a>
            <a href="#timeline" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">Timeline</a>
            <a href="#prizes" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">Prizes</a>
            <a href="#faq" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">FAQ</a>
        </nav>

        <!-- Action CTA & Mobile Trigger -->
        <div class="flex items-center gap-4">
            <a href="#register" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-lg hover:shadow-[#af8a3c]/20 active:scale-95 transition-all duration-300">
                Register Now
            </a>
            
            <!-- Mobile Hamburger -->
            <button class="md:hidden flex flex-col justify-center items-center w-8 h-8 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800/50 transition-colors focus:outline-none" id="mobile-menu-btn" aria-label="Toggle menu">
                <span class="w-5 h-[2px] bg-current rounded transition-all duration-300" id="burger-top"></span>
                <span class="w-5 h-[2px] bg-current rounded my-1 transition-all duration-200" id="burger-mid"></span>
                <span class="w-5 h-[2px] bg-current rounded transition-all duration-300" id="burger-bottom"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div class="hidden md:hidden border-t border-slate-800 glassmorphism transition-all duration-300" id="mobile-menu">
        <div class="px-4 py-6 flex flex-col gap-4 text-base font-semibold text-slate-200">
            <a href="#about" class="px-3 py-2 rounded-lg hover:bg-slate-800/40 hover:text-[#af8a3c] transition-colors">About</a>
            <a href="#tracks" class="px-3 py-2 rounded-lg hover:bg-slate-800/40 hover:text-[#af8a3c] transition-colors">Tracks</a>
            <a href="#timeline" class="px-3 py-2 rounded-lg hover:bg-slate-800/40 hover:text-[#af8a3c] transition-colors">Timeline</a>
            <a href="#prizes" class="px-3 py-2 rounded-lg hover:bg-slate-800/40 hover:text-[#af8a3c] transition-colors">Prizes</a>
            <a href="#faq" class="px-3 py-2 rounded-lg hover:bg-slate-800/40 hover:text-[#af8a3c] transition-colors">FAQ</a>
            <a href="#register" class="mt-2 flex items-center justify-center w-full py-3 rounded-full text-sm font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b]">
                Register Now
            </a>
        </div>
    </div>
</header>
