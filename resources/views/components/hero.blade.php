<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24 flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
    <!-- Left Content Column -->
    <div class="flex-1 space-y-8 text-center lg:text-left">
        <!-- Registration Open Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#af8a3c]/10 border border-[#af8a3c]/30 text-[#af8a3c] text-xs font-semibold uppercase tracking-wider mx-auto lg:mx-0">
            <span class="w-2 h-2 rounded-full bg-[#af8a3c] animate-ping"></span>
            Registration is Now Open!
        </div>

        <div class="space-y-3">
            <!-- Organization Tag -->
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs sm:text-sm uppercase">
                CMSC UI PRESENTS
            </p>

            <!-- Main Headline -->
            <h1 class="font-outfit font-black text-4xl sm:text-5xl lg:text-6xl tracking-tight text-white leading-none uppercase">
                STOCK SUMMIT <span class="text-[#af8a3c]">2026</span>
            </h1>

            <!-- Tagline -->
            <p class="text-slate-200 text-lg sm:text-xl font-light tracking-wide font-outfit">
                Rising Star, Rising Nation
            </p>
        </div>

        <!-- Subtext Description -->
        <p class="text-slate-400 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed font-light">
            Join StockSummit 2026, the premier national stock trading simulation and valuation competition. Bridge academic finance theory with live execution, analyze market patterns, and pitch to elite industry judges.
        </p>

        <!-- Interactive Countdown Widget -->
        <div class="glassmorphism border border-slate-800/70 p-6 rounded-2xl max-w-md mx-auto lg:mx-0 glow-purple space-y-3">
            <h3 class="text-xs uppercase tracking-widest text-slate-400 font-semibold text-center lg:text-left">Registration Ends In</h3>
            <div class="flex justify-center lg:justify-start gap-4">
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
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
            <a href="#register" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] transition-all duration-300 shadow-lg shadow-[#af8a3c]/20 text-center">
                Register Now
            </a>
            <a href="#about" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold border-2 border-white hover:bg-white/10 text-white transition-all duration-300 text-center">
                Learn More
            </a>
        </div>
    </div>

    <!-- Right Visual Column -->
    <div class="flex-1 w-full max-w-lg lg:max-w-none relative flex justify-center items-center">
        <!-- Decorative Glow Background Behind Image -->
        <div class="absolute inset-0 bg-gradient-to-tr from-[#af8a3c]/15 to-indigo-600/35 rounded-3xl blur-[40px] -z-10 opacity-70"></div>
        <!-- Glass Card container for the image -->
        <div class="glassmorphism border border-slate-800 p-3 sm:p-4 rounded-3xl shadow-2xl glow-gold transform hover:scale-[1.02] hover:-rotate-1 transition-all duration-500">
            <img src="{{ asset('images/hero_trading_chart.png') }}" alt="Stock Trading Graph" class="rounded-2xl max-w-full h-auto max-h-[420px] object-cover">
        </div>
    </div>
</section>
