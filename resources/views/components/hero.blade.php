@php
    $compStartDate = $competitionStartDate ?? '2026-06-01 00:00:00';
    $compEndDate = $competitionEndDate ?? '2026-08-15 23:59:59';
@endphp
<!-- Hero Section -->
<section class="relative w-full pt-28 pb-20 md:pt-36 md:pb-36 flex flex-col items-center justify-center text-center overflow-hidden">
    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none -z-20">
        <!-- The Trading Chart Background -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-25 mix-blend-lighten" style="background-image: url('{{ asset('images/hero_bg.png') }}');"></div>
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
                STOCK SUMMIT <span class="text-[#af8a3c]">2026</span>
            </h1>

            <!-- Tagline -->
            <p class="text-slate-200 text-lg sm:text-2xl font-light tracking-wide font-outfit">
                Shaping Market, Shaping Futures
            </p>
        </div>

        <!-- Subtext Description -->
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed font-light">
            Join Stock Summit 2026, the premier national stock trading simulation and valuation competition. Bridge academic finance theory with live execution, analyze market patterns, and pitch to elite industry judges.
        </p>

        <!-- Interactive Countdown Widget -->
        <div class="glassmorphism border border-[#af8a3c]/30 p-6 rounded-2xl w-full max-w-md mx-auto hover:border-[#af8a3c]/50 transition-all duration-300 space-y-3">
            <h3 id="competition-countdown-title" class="text-xs uppercase tracking-widest text-slate-400 font-semibold text-center">Registration Ends In</h3>
            <div id="competition-countdown-numbers" class="flex justify-center gap-4">
                <div class="text-center">
                    <span id="days" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">24</span>
                    <p class="text-[10px] uppercase text-slate-500">Days</p>
                </div>
                <span class="text-[#af8a3c]/40 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="hours" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">12</span>
                    <p class="text-[10px] uppercase text-slate-500">Hours</p>
                </div>
                <span class="text-[#af8a3c]/40 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="minutes" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">45</span>
                    <p class="text-[10px] uppercase text-slate-500">Mins</p>
                </div>
                <span class="text-[#af8a3c]/40 text-2xl font-bold">:</span>
                <div class="text-center">
                    <span id="seconds" class="font-outfit font-extrabold text-2xl sm:text-3xl text-[#af8a3c]">30</span>
                    <p class="text-[10px] uppercase text-slate-500">Secs</p>
                </div>
            </div>

            <div id="competition-coming-soon" class="hidden font-outfit font-black text-2xl sm:text-3xl text-[#af8a3c] uppercase tracking-widest py-1.5 text-center">
                Coming Soon
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDate = new Date('{{ str_replace(' ', 'T', $compStartDate) }}').getTime();
        const endDate = new Date('{{ str_replace(' ', 'T', $compEndDate) }}').getTime();
        
        const titleEl = document.getElementById('competition-countdown-title');
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        const comingSoonEl = document.getElementById('competition-coming-soon');
        const numbersEl = document.getElementById('competition-countdown-numbers');

        function updateCompetitionCountdown() {
            const now = new Date().getTime();

            if (now < startDate) {
                if (titleEl) titleEl.innerText = "Registration";
                if (comingSoonEl) comingSoonEl.classList.remove('hidden');
                if (numbersEl) numbersEl.classList.add('hidden');
                return;
            } else {
                if (comingSoonEl) comingSoonEl.classList.add('hidden');
                if (numbersEl) numbersEl.classList.remove('hidden');
            }

            if (now >= endDate) {
                if (titleEl) titleEl.innerText = "Registration Closed";
                if (daysEl) daysEl.innerText = '00';
                if (hoursEl) hoursEl.innerText = '00';
                if (minutesEl) minutesEl.innerText = '00';
                if (secondsEl) secondsEl.innerText = '00';
                return;
            }

            if (titleEl) titleEl.innerText = "Registration Ends In";
            const distance = endDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (daysEl) daysEl.innerText = days < 10 ? '0' + days : days;
            if (hoursEl) hoursEl.innerText = hours < 10 ? '0' + hours : hours;
            if (minutesEl) minutesEl.innerText = minutes < 10 ? '0' + minutes : minutes;
            if (secondsEl) secondsEl.innerText = seconds < 10 ? '0' + seconds : seconds;
        }

        updateCompetitionCountdown();
        setInterval(updateCompetitionCountdown, 1000);
    });
</script>
