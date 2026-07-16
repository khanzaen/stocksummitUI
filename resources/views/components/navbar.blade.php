<!-- Header / Navigation -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/90 backdrop-blur-md shadow-sm transition-all duration-300" id="main-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center gap-3 group">
            <img src="{{ asset('images/stock_summit_logo.png') }}" alt="StockSummit Logo" class="h-10 w-auto rounded-lg group-hover:scale-105 transition-transform duration-300">
            <span class="font-outfit font-black text-xl tracking-tight text-slate-900 group-hover:text-[#af8a3c] transition-colors">STOCK<span class="text-[#af8a3c]">SUMMIT UI</span></span>
        </a>

        <!-- Right Section: Navigation & CTA -->
        <div class="flex items-center gap-8">
            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-base font-bold text-slate-600">
                <a href="#about" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">About</a>
                <a href="#tracks" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">Tracks</a>
                <a href="#timeline" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">Timeline</a>
                <a href="#faq" class="hover:text-[#af8a3c] transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-[#af8a3c] hover:after:w-full after:transition-all after:duration-300">FAQ</a>
                <!-- Dropdown Archive -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-[#af8a3c] transition-colors py-2 focus:outline-none font-bold">
                        Archive
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div class="absolute left-0 mt-0 w-48 rounded-2xl bg-white border border-slate-200 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 py-2">
                        <a href="/archive/2025" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-[#af8a3c] transition-colors font-medium">
                            StockSummit 2025
                        </a>
                        <a href="https://2024.stocksummit.id" target="_blank" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-[#af8a3c] transition-colors font-medium">
                            StockSummit 2024
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Action CTA & Mobile Trigger -->
            <div class="flex items-center gap-4">
                <a href="#register" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-lg hover:shadow-[#af8a3c]/20 active:scale-95 transition-all duration-300">
                    Register Now
                </a>
                
                <!-- Mobile Hamburger -->
                <button class="md:hidden flex flex-col justify-center items-center w-8 h-8 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors focus:outline-none" id="mobile-menu-btn" aria-label="Toggle menu">
                    <span class="w-5 h-[2px] bg-current rounded transition-all duration-300" id="burger-top"></span>
                    <span class="w-5 h-[2px] bg-current rounded my-1 transition-all duration-200" id="burger-mid"></span>
                    <span class="w-5 h-[2px] bg-current rounded transition-all duration-300" id="burger-bottom"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div class="hidden md:hidden border-t border-slate-200 bg-white/95 backdrop-blur-md transition-all duration-300" id="mobile-menu">
        <div class="px-4 py-6 flex flex-col gap-4 text-lg font-semibold text-slate-700">
            <a href="#about" class="px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">About</a>
            <a href="#tracks" class="px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">Tracks</a>
            <a href="#timeline" class="px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">Timeline</a>
            <a href="#faq" class="px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">FAQ</a>
            
            <!-- Mobile Archive Section -->
            <div class="border-t border-slate-100 my-1 pt-3">
                <p class="px-3 text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Previous Years</p>
                <a href="/archive/2025" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-600 hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">
                    StockSummit 2025
                </a>
                <a href="https://2024.stocksummit.id" target="_blank" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-600 hover:bg-slate-50 hover:text-[#af8a3c] transition-colors">
                    StockSummit 2024
                </a>
            </div>

            <a href="#register" class="mt-2 flex items-center justify-center w-full py-3 rounded-full text-sm font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b]">
                Register Now
            </a>
        </div>
    </div>
</header>
