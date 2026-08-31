<section id="tracks" class="relative w-full pt-20 md:pt-28 pb-8 md:pb-12 flex flex-col items-center justify-center text-center overflow-hidden border-t border-[#af8a3c]/15">
    <!-- Background glows -->
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[350px] h-[350px] bg-[#af8a3c]/10 rounded-full blur-[100px] -z-10"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[350px] h-[350px] bg-[#af8a3c]/8 rounded-full blur-[100px] -z-10"></div>

    <!-- Left Floating Decorative Elements (Outside Grid) -->
    <!-- Rings -->
    <div class="absolute -left-12 top-1/3 w-40 h-40 border border-dashed border-[#af8a3c]/15 rounded-full animate-[spin_55s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-20 top-1/4 w-32 h-32 border border-dotted border-[#af8a3c]/10 rounded-full animate-[spin_35s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-28 top-1/2 w-24 h-24 border border-dashed border-[#af8a3c]/10 rounded-full animate-[spin_20s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-8 top-[15%] w-16 h-16 border border-dotted border-[#af8a3c]/15 rounded-full animate-[spin_40s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    
    <!-- Squares & Shapes -->
    <div class="absolute -left-6 top-1/2 w-6 h-6 border border-[#af8a3c]/25 rounded-md rotate-45 animate-pulse -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-16 bottom-1/3 w-4 h-4 border border-[#af8a3c]/20 rounded-md -rotate-12 animate-[pulse_3s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1.5s;"></div>
    
    <!-- Plus Signs -->
    <div class="absolute -left-16 top-10 font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>
    <div class="absolute -left-32 bottom-20 font-outfit text-[#af8a3c]/15 text-2xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 2s;">+</div>
    <div class="absolute -left-10 bottom-[10%] font-outfit text-[#af8a3c]/15 text-lg font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 0.5s;">+</div>
    <div class="absolute -left-24 top-[40%] font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>

    <!-- Right Floating Decorative Elements (Outside Grid) -->
    <!-- Rings -->
    <div class="absolute -right-16 bottom-1/3 w-48 h-48 border border-dashed border-[#af8a3c]/15 rounded-full animate-[spin_45s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-24 bottom-1/4 w-36 h-36 border border-dotted border-[#af8a3c]/10 rounded-full animate-[spin_25s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-32 bottom-1/2 w-28 h-28 border border-dashed border-[#af8a3c]/10 rounded-full animate-[spin_15s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-10 top-[25%] w-20 h-20 border border-dotted border-[#af8a3c]/15 rounded-full animate-[spin_30s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    
    <!-- Circles & Shapes -->
    <div class="absolute -right-8 bottom-1/2 w-8 h-8 border border-dashed border-[#af8a3c]/35 rounded-full animate-[pulse_4s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-20 bottom-[15%] w-5 h-5 border border-dotted border-[#af8a3c]/20 rounded-full animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1s;"></div>
    
    <!-- Plus Signs -->
    <div class="absolute -right-12 top-20 font-outfit text-[#af8a3c]/20 text-2xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-28 bottom-10 font-outfit text-[#af8a3c]/15 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1s;">+</div>
    <div class="absolute -right-16 top-[45%] font-outfit text-[#af8a3c]/15 text-lg font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 2.5s;">+</div>
    <div class="absolute -right-32 top-[10%] font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>

    @php
        $ercBookletPath = 'booklets/Booklet ERC Stock Summit UI 2026.pdf';
        $ercBookletExists = file_exists(public_path($ercBookletPath));

        $tcBookletPath = 'booklets/Booklet TC Stock Summit UI 2026.pdf';
        $tcBookletExists = file_exists(public_path($tcBookletPath));
    @endphp

    <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
        <div class="text-center mb-16 space-y-3">
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase">Choose Your Category</p>
            <h2 class="font-outfit font-black text-3xl sm:text-4xl text-white uppercase">Competition Categories</h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto">
                Select your path and showcase your financial expertise in Indonesia's premier stock market competition.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <!-- Track 1: Equity Research -->
            @if($ercBookletExists)
                <a href="{{ route('booklet.show', 'erc') }}" class="glassmorphism border border-slate-800/80 p-6 sm:p-8 rounded-3xl text-left hover:border-[#af8a3c]/40 hover:shadow-[#af8a3c]/5 hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group flex flex-col justify-between cursor-pointer">
            @else
                <div onclick="openGuidebookModal('Equity Research')" class="glassmorphism border border-slate-800/80 p-6 sm:p-8 rounded-3xl text-left hover:border-[#af8a3c]/40 hover:shadow-[#af8a3c]/5 hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group flex flex-col justify-between cursor-pointer">
            @endif
                <!-- Decorative subtle glow in background -->
                <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                <div class="space-y-5">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-[#af8a3c]/10 border border-[#af8a3c]/20 flex items-center justify-center text-[#af8a3c] group-hover:bg-[#af8a3c] group-hover:text-[#10143d] transition-all duration-500">
                        <!-- Analysis / Search SVG -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 .125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-outfit font-bold text-lg sm:text-xl text-white">Equity Research Competition</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Analyze public companies, construct comprehensive valuation reports, and pitch investment recommendation models to a panel of professional market analysts.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <ul class="space-y-2.5 text-slate-400 text-xs">
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            Individual or Team-based (1-3 members)
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            DCF & Relative Valuation modeling
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            Pitch presentation to top judges
                        </li>
                    </ul>
                </div>

                <!-- CTA Button -->
                <div class="pt-6">
                    <div class="inline-flex items-center gap-2 text-xs font-semibold text-[#af8a3c] group-hover:text-[#cba14b] transition-colors">
                        Open Guidebook
                        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </div>
            @if($ercBookletExists)
                </a>
            @else
                </div>
            @endif

            <!-- Track 2: Trading Competition -->
            @if($tcBookletExists)
                <a href="{{ route('booklet.show', 'tc') }}" class="glassmorphism border border-slate-800/80 p-6 sm:p-8 rounded-3xl text-left hover:border-[#af8a3c]/40 hover:shadow-[#af8a3c]/5 hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group flex flex-col justify-between cursor-pointer">
            @else
                <div onclick="openGuidebookModal('Trading')" class="glassmorphism border border-slate-800/80 p-6 sm:p-8 rounded-3xl text-left hover:border-[#af8a3c]/40 hover:shadow-[#af8a3c]/5 hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group flex flex-col justify-between cursor-pointer">
            @endif
                <!-- Decorative subtle glow in background -->
                <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                <div class="space-y-5">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-[#af8a3c]/10 border border-[#af8a3c]/20 flex items-center justify-center text-[#af8a3c] group-hover:bg-[#af8a3c] group-hover:text-[#10143d] transition-all duration-500">
                        <!-- Chart Bar SVG -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/>
                        </svg>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-outfit font-bold text-lg sm:text-xl text-white">Trading Competition</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Put your real-time trading strategies to the test in a simulated market environment. Manage virtual portfolios and trade live shares with actual price feed variables.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <ul class="space-y-2.5 text-slate-400 text-xs">
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            Individual or Team-based (1-3 members)
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            Real-time virtual trading dashboard
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            Portfolio optimization & returns contest
                        </li>
                    </ul>
                </div>

                <!-- CTA Button -->
                <div class="pt-6">
                    <div class="inline-flex items-center gap-2 text-xs font-semibold text-[#af8a3c] group-hover:text-[#cba14b] transition-colors">
                        Open Guidebook
                        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </div>
            @if($tcBookletExists)
                </a>
            @else
                </div>
            @endif
        </div>
    </div>

    <!-- Guidebook Modal Popup -->
    <div id="guidebook-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm z-[999] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <div class="bg-[#131744] border border-[#af8a3c]/30 p-8 rounded-3xl max-w-sm w-full mx-4 text-center shadow-2xl shadow-[#af8a3c]/10 relative transform scale-95 transition-transform duration-300" id="guidebook-modal-card">
            <!-- Close Button -->
            <button onclick="closeGuidebookModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            
            <div class="space-y-5 flex flex-col items-center pt-2">
                
                <div class="space-y-1">
                    <span class="text-[9px] text-amber-500 font-bold uppercase tracking-widest bg-amber-500/10 px-2 py-0.5 rounded">Announcement</span>
                    <h3 class="font-outfit font-black text-xl text-white uppercase tracking-wide pt-1"><span id="modal-track-name">Guidebook</span> Not Yet Available</h3>
                </div>
                
                <p class="text-xs text-slate-300 font-light leading-relaxed">
                    We apologize, but the <span id="modal-track-detail">competition guidebook</span> is currently being finalized by the Stock Summit 2026 committee. It will be released on this website soon.
                </p>
                
                <button onclick="closeGuidebookModal()" class="w-full py-2.5 border border-transparent text-xs font-bold rounded-xl text-brand-dark bg-[#af8a3c] hover:bg-[#cba14b] shadow-lg shadow-[#af8a3c]/10 transition-all duration-300 uppercase tracking-wider">
                    Got It
                </button>
            </div>
        </div>
    </div>

    <script>
        function openGuidebookModal(trackName) {
            document.getElementById('modal-track-name').innerText = trackName + ' Guidebook';
            document.getElementById('modal-track-detail').innerText = trackName + ' Competition guidebook';

            const modal = document.getElementById('guidebook-modal');
            const card = document.getElementById('guidebook-modal-card');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');
                card.classList.remove('scale-95');
                card.classList.add('scale-100');
            }, 10);
        }

        function closeGuidebookModal() {
            const modal = document.getElementById('guidebook-modal');
            const card = document.getElementById('guidebook-modal-card');
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');
            card.classList.remove('scale-100');
            card.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</section>
