<!-- Footer -->
<footer class="border-t border-[#af8a3c]/20 bg-[#0c0e2c] pt-16 pb-12 relative overflow-hidden text-slate-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
        <!-- Top Row: Grid of Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 pb-8 border-b border-slate-800/60">
            <!-- Column 1: Branding & Description -->
            <div class="space-y-4 text-left">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/stock_summit_logo.png') }}" alt="Stock Summit Logo" class="h-8 w-auto">
                    <span class="font-outfit font-bold text-sm tracking-widest text-white uppercase">STOCK <span class="text-[#af8a3c]">SUMMIT UI</span></span>
                </div>
                <p class="text-xs text-[#af8a3c] font-outfit font-bold tracking-wider uppercase">Shaping Market, Shaping Futures</p>
                <p class="text-xs text-slate-400 font-light leading-relaxed max-w-sm">
                    Indonesia's premier national stock trading simulation and valuation competition. Empowering undergraduate students to bridge academic theory with live market execution.
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="space-y-4 text-left">
                <h4 class="font-outfit font-bold text-xs uppercase tracking-widest text-[#af8a3c]">Quick Links</h4>
                <ul class="grid grid-cols-2 gap-2 text-xs font-light text-slate-400">
                    <li><a href="{{ Request::is('/') ? '#about' : '/#about' }}" class="hover:text-[#af8a3c] transition-colors">About Event</a></li>
                    <li><a href="{{ Request::is('/') ? '#tracks' : '/#tracks' }}" class="hover:text-[#af8a3c] transition-colors">Categories</a></li>
                    <li><a href="{{ Request::is('/') ? '#timeline' : '/#timeline' }}" class="hover:text-[#af8a3c] transition-colors">Timeline</a></li>
                    <li><a href="{{ Request::is('/') ? '#faq' : '/#faq' }}" class="hover:text-[#af8a3c] transition-colors">FAQ</a></li>
                    <li><a href="{{ Request::is('/') ? '#archives' : '/#archives' }}" class="hover:text-[#af8a3c] transition-colors">Past Events</a></li>
                    <li><a href="{{ Request::is('/') ? '#contact' : '/#contact' }}" class="hover:text-[#af8a3c] transition-colors">Contact Us</a></li>
                    <li><a href="/committee" class="hover:text-[#af8a3c] transition-colors">Committee</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact & Info -->
            <div class="space-y-4 text-left">
                <h4 class="font-outfit font-bold text-xs uppercase tracking-widest text-[#af8a3c]">Connect With Us</h4>
                <ul class="space-y-2.5 text-xs text-slate-400 font-light">
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:stocksummit.ui@gmail.com" class="hover:text-[#af8a3c] transition-colors">stocksummit.ui@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                        <a href="https://instagram.com/stocksummit.ui" target="_blank" class="hover:text-[#af8a3c] transition-colors">@stocksummit.ui</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#af8a3c] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span>Vokasi UI, Depok</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Row: Copyright -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 font-light">
            <p>&copy; 2026 Stock Summit. All rights reserved.</p>
        </div>
    </div>
</footer>
