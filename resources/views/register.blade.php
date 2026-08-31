<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition Registration | Stock Summit 2026</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        outfit: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        .glassmorphism {
            background: rgba(22, 26, 75, 0.45);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        input, select, textarea {
            background-color: #ffffff !important;
            border-color: #cbd5e1 !important;
            color: #0f172a !important;
        }
        input::placeholder, textarea::placeholder {
            color: #94a3b8 !important;
        }
        input:focus, select:focus, textarea:focus {
            border-color: rgba(175, 138, 60, 0.8) !important;
            box-shadow: 0 0 0 1px rgba(175, 138, 60, 0.8) !important;
        }
        .glow-gold {
            box-shadow: 0 0 40px -5px rgba(175, 138, 60, 0.35);
        }
        html, body {
            overflow-x: hidden !important;
            max-width: 100vw;
            width: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-[#10143d] text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-amber-500/30 selection:text-amber-200 overflow-x-hidden relative w-full">
    
    <!-- Glowing background mesh grid -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#161a4f_1px,transparent_1px),linear-gradient(to_bottom,#161a4f_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] -z-10"></div>
    
    <!-- Background Image Overlay -->
    <div class="absolute inset-0 pointer-events-none -z-20">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-60" style="background-image: url('{{ asset('images/oprec_bg.png') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
    </div>
    
    <!-- Ambient glows -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#af8a3c]/5 rounded-full blur-[120px] -z-10"></div>

    <!-- Header navigation -->
    <header class="w-full border-b border-slate-200 bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-[#af8a3c] transition-colors">
                <!-- Back Arrow SVG -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Home
            </a>
            
            <a href="/" class="flex items-center gap-2 group">
                <img src="{{ asset('images/stock_summit_logo.png') }}" alt="Stock Summit Logo" class="h-8 w-auto rounded-md group-hover:scale-105 transition-transform duration-300">
                <span class="font-outfit font-black text-sm tracking-tight text-slate-900 group-hover:text-[#af8a3c] transition-colors">STOCK <span class="text-[#af8a3c]">SUMMIT UI</span></span>
            </a>
        </div>
    </header>

    <main class="flex-grow max-w-4xl mx-auto px-4 py-16 w-full relative z-10">
        <!-- Page Header -->
        <div class="text-center mb-12 space-y-3">
            <span class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase block">Competition Registration</span>
            <h1 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-tight leading-tight">Register Your Team<br>Stock <span class="text-[#af8a3c]">Summit</span> 2026</h1>
            <p class="text-slate-400 text-sm sm:text-base font-light max-w-xl mx-auto">
                Participate in Stock Summit 2026. Select your track below to register via Google Forms.
            </p>
        </div>

        <!-- Countdown Timer -->
        <div class="mb-10 text-center relative flex justify-center">
            <div class="glassmorphism border-2 border-[#af8a3c]/30 p-6 rounded-3xl inline-block max-w-md w-full shadow-2xl relative overflow-hidden group">
                <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-30 pointer-events-none rounded-3xl"></div>
                <h4 id="countdown-title" class="font-outfit font-bold text-xs sm:text-sm text-[#af8a3c] uppercase tracking-widest mb-4">Registration Ends In</h4>
                
                <div id="countdown-numbers" class="grid grid-cols-4 gap-3 text-center">
                    <!-- Days -->
                    <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800/80 p-3 rounded-2xl">
                        <span id="countdown-days" class="font-outfit font-black text-xl sm:text-3xl text-white block">00</span>
                        <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider block mt-1">Days</span>
                    </div>
                    <!-- Hours -->
                    <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800/80 p-3 rounded-2xl">
                        <span id="countdown-hours" class="font-outfit font-black text-xl sm:text-3xl text-white block">00</span>
                        <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider block mt-1">Hours</span>
                    </div>
                    <!-- Minutes -->
                    <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800/80 p-3 rounded-2xl">
                        <span id="countdown-minutes" class="font-outfit font-black text-xl sm:text-3xl text-white block">00</span>
                        <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider block mt-1">Mins</span>
                    </div>
                    <!-- Seconds -->
                    <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800/80 p-3 rounded-2xl">
                        <span id="countdown-seconds" class="font-outfit font-black text-xl sm:text-3xl text-[#af8a3c] block">00</span>
                        <span class="text-[9px] text-[#af8a3c]/80 font-bold uppercase tracking-wider block mt-1">Secs</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Selection Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto mt-12">
            <!-- Card 1: ERC -->
            <div class="glassmorphism border border-[#af8a3c]/30 rounded-3xl p-8 flex flex-col justify-between space-y-6 hover:border-[#af8a3c]/60 hover:shadow-lg hover:shadow-[#af8a3c]/10 hover:scale-[1.02] transition-all duration-300 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#af8a3c]/10 border border-[#af8a3c]/20 flex items-center justify-center text-[#af8a3c] group-hover:bg-[#af8a3c] group-hover:text-[#10143d] transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 .125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>
                    <h3 class="font-outfit font-black text-xl text-white uppercase tracking-wide">Equity Research</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
                        Analyze public companies, construct comprehensive valuation reports, and pitch investment recommendation models.
                    </p>
                </div>
                <a href="{{ route('register.erc') }}" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center px-6 py-3.5 rounded-2xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-md hover:shadow-[#af8a3c]/25 transform active:scale-95 transition-all text-center">
                    Register for ERC
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                </a>
            </div>

            <!-- Card 2: TC -->
            <div class="glassmorphism border border-slate-800/80 rounded-3xl p-8 flex flex-col justify-between space-y-6 hover:border-[#af8a3c]/60 hover:shadow-lg hover:shadow-[#af8a3c]/10 hover:scale-[1.02] transition-all duration-300 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 group-hover:bg-[#af8a3c] group-hover:text-[#10143d] transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v-2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/>
                        </svg>
                    </div>
                    <h3 class="font-outfit font-black text-xl text-white uppercase tracking-wide">Trading Competition</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
                        Put your real-time trading strategies to the test in a simulated market environment. Manage virtual portfolios and trade live shares.
                    </p>
                </div>
                <a href="{{ route('register.tc') }}" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center px-6 py-3.5 rounded-2xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] hover:shadow-md hover:shadow-[#af8a3c]/25 transform active:scale-95 transition-all text-center">
                    Register for TC
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-8 text-center text-xs text-slate-500 border-t border-slate-200 bg-white">
        <p>&copy; 2026 Stock Summit. All rights reserved.</p>
    </footer>

    <!-- Countdown Handler Script -->
    <script>
        // Parse the dates safely by splitting elements, preventing UTC timezone offset parsing issues in browser
        const parseDate = (str) => {
            const cleanStr = str.replace('T', ' ');
            const [datePart, timePart] = cleanStr.split(' ');
            const [year, month, day] = datePart.split('-').map(Number);
            const [hour, minute, second] = (timePart || '00:00:00').split(':').map(Number);
            return new Date(year, month - 1, day, hour, minute, second || 0);
        };
        const compStartDate = parseDate('{{ $competitionStartDate }}').getTime();
        const compEndDate = parseDate('{{ $competitionEndDate }}').getTime();

        // Dynamic countdown timer
        const timerInterval = setInterval(() => {
            const now = new Date().getTime();
            
            if (now < compStartDate) {
                document.getElementById('countdown-title').textContent = "Registration Opens In";
                const diff = compStartDate - now;
                updateCountdownDisplay(diff);
            } else if (now < compEndDate) {
                document.getElementById('countdown-title').textContent = "Registration Ends In";
                const diff = compEndDate - now;
                updateCountdownDisplay(diff);
            } else {
                clearInterval(timerInterval);
                document.getElementById('countdown-title').textContent = "Registration Closed";
                document.getElementById('countdown-days').textContent = "00";
                document.getElementById('countdown-hours').textContent = "00";
                document.getElementById('countdown-minutes').textContent = "00";
                document.getElementById('countdown-seconds').textContent = "00";
            }
        }, 1000);

        function updateCountdownDisplay(diff) {
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('countdown-days').textContent = String(days).padStart(2, '0');
            document.getElementById('countdown-hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('countdown-minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('countdown-seconds').textContent = String(seconds).padStart(2, '0');
        }
    </script>
</body>
</html>
