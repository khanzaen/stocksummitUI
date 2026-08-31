<!-- CTA footer card -->
<section id="register" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative overflow-hidden">
    <!-- Ambient Glow behind card -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-gradient-to-tr from-[#af8a3c]/20 to-[#af8a3c]/5 rounded-full blur-[90px] -z-10 pointer-events-none"></div>

    <!-- Left Floating Decorative Elements (Outside Card) -->
    <div class="absolute -left-10 top-10 w-24 h-24 bg-[#af8a3c]/10 rounded-full blur-2xl animate-[pulse_4s_ease-in-out_infinite] -z-10 pointer-events-none hidden xl:block"></div>
    <div class="absolute -left-16 top-1/2 -translate-y-1/2 w-48 h-48 border border-dashed border-[#af8a3c]/20 rounded-full animate-[spin_40s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-8 top-1/3 w-8 h-8 border border-[#af8a3c]/30 rounded-lg rotate-12 animate-[pulse_3s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block"></div>

    <!-- Right Floating Decorative Elements (Outside Card) -->
    <div class="absolute -right-10 bottom-10 w-28 h-28 bg-indigo-500/10 rounded-full blur-2xl animate-[pulse_5s_ease-in-out_infinite] -z-10 pointer-events-none hidden xl:block" style="animation-delay: 1.5s;"></div>
    <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-56 h-56 border border-dashed border-indigo-500/20 rounded-full animate-[spin_50s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-12 bottom-1/3 w-10 h-10 border border-indigo-500/30 rounded-full animate-[pulse_4s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1s;"></div>

    <div class="relative rounded-3xl overflow-hidden bg-[#0f123d]/60 border border-[#af8a3c]/40 backdrop-blur-md py-16 px-8 sm:px-16 text-center space-y-6 shadow-2xl hover:border-[#af8a3c]/60 hover:shadow-[#af8a3c]/10 transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-tr from-[#af8a3c]/15 to-indigo-500/5 -z-10"></div>
        <h3 class="font-outfit font-black text-3xl sm:text-4xl text-[#af8a3c] uppercase tracking-wide">Are You Ready to Join Us?</h3>
        <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base font-light">
            Register your team for the competition and showcase your investment strategies.
        </p>
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('register.erc') }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-lg hover:shadow-[#af8a3c]/25 transform hover:-translate-y-0.5 active:scale-95 transition-all text-center">
                Register for ERC
            </a>
            <a href="{{ route('register.tc') }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-lg hover:shadow-[#af8a3c]/25 transform hover:-translate-y-0.5 active:scale-95 transition-all text-center">
                Register for TC
            </a>
        </div>
    </div>
</section>
