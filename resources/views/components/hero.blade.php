<!-- Hero Section -->
<section class="relative w-full pt-8 pb-20 md:pt-12 md:pb-36 flex flex-col items-center justify-center text-center overflow-hidden">
    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none -z-20">
        <!-- The Trading Chart Background -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-15 mix-blend-lighten" style="background-image: url('{{ asset('images/image copy 3.png') }}');"></div>
        <!-- Linear Gradients to blend edges smoothly with the dark background -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
    </div>
    
    <!-- Decorative Glow Background -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 sm:w-[600px] sm:h-[600px] bg-gradient-to-tr from-[#af8a3c]/20 to-indigo-600/25 rounded-full blur-[120px] -z-10 opacity-80"></div>

    <!-- Content Container -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 flex flex-col items-center relative z-10">
        <div class="space-y-4">
            <!-- Organization Tag -->
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.25em] text-xs sm:text-sm uppercase">
                CMSC UI PRESENTS
            </p>

            <!-- Main Headline -->
            <h1 class="font-outfit font-black text-4xl sm:text-6xl lg:text-7xl tracking-tight text-white leading-tight uppercase">
                STOCKSUMMIT <span class="text-[#af8a3c]">2026</span>
            </h1>

            <!-- Tagline -->
            <p class="text-slate-200 text-lg sm:text-2xl font-light tracking-wide font-outfit">
                Rising Star, Rising Nation
            </p>
        </div>

        <!-- Subtext Description -->
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed font-light">
            Join StockSummit 2026, the premier national stock trading simulation and valuation competition. Bridge academic finance theory with live execution, analyze market patterns, and pitch to elite industry judges.
        </p>

        <!-- Interactive Countdown Widget -->
        <div class="glassmorphism border border-slate-800/70 p-6 rounded-2xl w-full max-w-md mx-auto glow-purple space-y-3">
            <h3 class="text-xs uppercase tracking-widest text-slate-400 font-semibold text-center">Registration Ends In</h3>
            <div class="flex justify-center gap-4">
                <div class="text-center">
                    <span id="days" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">24</span>
                    <p class="text-[10px] uppercase text-slate-500">Days</p>
                </div>
                <span class="text-slate-600 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="hours" class="font-outfit font-extrabold text-2xl sm:text-3xl text-white">12</span>
                    <p class="text-[10px] uppercase text-slate-500">Hours</p>
                </div>
                <span class="text-slate-600 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="minutes" class="font-outfit font-extrabold text-2xl sm:text-3xl text-white">45</span>
                    <p class="text-[10px] uppercase text-slate-500">Mins</p>
                </div>
                <span class="text-slate-600 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="seconds" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">30</span>
                    <p class="text-[10px] uppercase text-slate-500">Secs</p>
                </div>
            </div>
        </div>

        <!-- Call to actions -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <a href="#register" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] transition-all duration-300 shadow-lg shadow-[#af8a3c]/20 text-center">
                Register Now
            </a>
            <a href="#about" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold border-2 border-white hover:bg-white/10 text-white transition-all duration-300 text-center">
                Learn More
            </a>
        </div>
    </div>
</section>
