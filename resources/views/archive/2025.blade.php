<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StockSummit 2025 Recap - CMSC UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800;900&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass-card {
            background: rgba(12, 15, 46, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
    </style>
</head>
<body class="bg-[#10143d] text-slate-100 antialiased overflow-x-hidden">

    <!-- Subtle Glows -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-indigo-500/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute top-[800px] left-0 w-[450px] h-[450px] bg-amber-500/5 rounded-full blur-[110px] -z-10"></div>

    <!-- Back to Active Year Nav -->
    <div class="bg-[#0c0e2c] border-b border-slate-800 py-4 text-center text-sm font-semibold sticky top-0 z-50 backdrop-blur-md bg-opacity-95">
        <span class="text-slate-400">Looking for the current event?</span>
        <a href="/" class="text-[#af8a3c] hover:underline ml-1">Go to StockSummit 2026 &rarr;</a>
    </div>

    <!-- 1. Hero Section -->
    <header class="relative w-full py-20 md:py-32 flex flex-col items-center justify-center text-center overflow-hidden">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50 mix-blend-lighten" style="background-image: url('{{ asset('images/IMG_2739.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase">RETROSPECTIVE RECAP</p>
            <h1 class="font-outfit font-black text-4xl sm:text-6xl text-white uppercase leading-tight">
                STOCKSUMMIT <span class="text-[#af8a3c]">2025</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl font-light max-w-2xl mx-auto">
                "Navigating Market Volatility: Empowering Young Investors for Economic Resilience"
            </p>
            
            <!-- Stats Row -->
            <div class="grid grid-cols-3 gap-4 max-w-lg mx-auto pt-6 border-t border-slate-800">
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">Rp 30M+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Prize Pool</p>
                </div>
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">1,200+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Participants</p>
                </div>
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">45+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Universities</p>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Hall of Fame (Pemenang) -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-25 mix-blend-lighten blur-[3px]" style="background-image: url('{{ asset('images/IMG_2812 copy.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-[#af8a3c] mb-12 uppercase tracking-wide">2025 Winners</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Runner Up 2 (Juara 3) -->
                <div class="glass-card border border-slate-800 p-6 rounded-2xl text-center flex flex-col justify-between order-2 md:order-1">
                    <div>
                        <span class="text-slate-400 text-sm font-semibold mb-3 block">3rd Place Winners</span>
                    </div>

                    <!-- Team Photo -->
                    <div class="my-4 overflow-hidden rounded-xl border border-slate-700/60 bg-slate-950/40">
                        <img src="{{ asset('images/IMG_2758.JPG') }}" alt="Cuanalyst - 3rd Winner" class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="mt-2">
                        <p class="text-xl font-bold text-white font-outfit">Cuanalyst</p>
                        <p class="text-xs text-slate-400 mt-1">Binus University</p>
                    </div>
                </div>

                <!-- Grand Winner (Juara 1) -->
                <div class="glass-card border-2 border-[#af8a3c] p-6 rounded-3xl text-center flex flex-col justify-between order-1 md:order-2 scale-105 shadow-xl shadow-[#af8a3c]/5">
                    <div>
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-1">GRAND CHAMPION</span>
                        <span class="text-white text-sm font-semibold mb-3 block">1st Place Winners</span>
                    </div>
                    
                    <!-- Team Photo -->
                    <div class="my-4 overflow-hidden rounded-xl border border-slate-700/60 bg-slate-950/40">
                        <img src="{{ asset('images/IMG_2789.JPG') }}" alt="Wolf of BSD - 1st Winner" class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="mt-2">
                        <p class="text-2xl font-black text-white font-outfit">Wolf of BSD</p>
                        <p class="text-xs text-slate-300 mt-1">Universitas Prasetya Mulia</p>
                    </div>
                </div>

                <!-- Runner Up 1 (Juara 2) -->
                <div class="glass-card border border-slate-800 p-6 rounded-2xl text-center flex flex-col justify-between order-3">
                    <div>
                        <span class="text-slate-400 text-sm font-semibold mb-3 block">2nd Place Winners</span>
                    </div>

                    <!-- Team Photo -->
                    <div class="my-4 overflow-hidden rounded-xl border border-slate-700/60 bg-slate-950/40">
                        <img src="{{ asset('images/IMG_2773.JPG') }}" alt="Odyssey Capital - 2nd Winner" class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="mt-2">
                        <p class="text-xl font-bold text-white font-outfit">Odyssey Capital</p>
                        <p class="text-xs text-slate-400 mt-1">Universitas Prasetya Mulia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Keynote Judges -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50 mix-blend-lighten blur-[8px]" style="background-image: url('{{ asset('images/IMG_2653.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-center text-[#af8a3c] mb-12 uppercase tracking-wide">Judges 2025</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-slate-900/50 border border-slate-800 p-6 rounded-xl text-center backdrop-blur-sm hover:border-[#af8a3c]/30 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200" alt="Qisti Quraini" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Qisti Quraini</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Corporate Strategic Investment</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at PT Kalbe Farma Tbk</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-slate-900/50 border border-slate-800 p-6 rounded-xl text-center backdrop-blur-sm hover:border-[#af8a3c]/30 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200" alt="Akmal Irsyad" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Akmal Irsyad</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Equity Research Analyst</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at Tuntun Sekuritas Indonesia</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-slate-900/50 border border-slate-800 p-6 rounded-xl text-center backdrop-blur-sm hover:border-[#af8a3c]/30 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200" alt="Everson Sugianto" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Everson Sugianto</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Investment Analyst</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at Stockbit/Bibit</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Keynote Speakers -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50 mix-blend-lighten blur-[8px]" style="background-image: url('{{ asset('images/IMG_2653.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-center text-[#af8a3c] mb-12 uppercase tracking-wide">Speakers 2025</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-slate-900/50 border border-slate-800 p-6 rounded-xl text-center backdrop-blur-sm hover:border-[#af8a3c]/30 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200" alt="Andini Wulandari" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Andini Wulandari</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Portfolio Manager</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at PT Syailendra Capital</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-slate-900/50 border border-slate-800 p-6 rounded-xl text-center backdrop-blur-sm hover:border-[#af8a3c]/30 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200" alt="Dewi Lestari" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Dewi Lestari</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Founder</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at StockEdu Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Sponsors -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50 mix-blend-lighten blur-[8px]" style="background-image: url('{{ asset('images/IMG_2838.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-[#af8a3c] mb-12 uppercase tracking-wide">Sponsors 2025</h2>
            
            <div class="space-y-12">
                <!-- Primary Partner (IDX) -->
                <div class="mb-10">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Supported by</p>
                    <div class="flex items-center justify-center opacity-85 hover:opacity-100 transition-opacity duration-300">
                        <div class="h-36 flex items-center justify-center">
                            <img src="{{ asset('images/image.png') }}" alt="IDX Logo" class="h-32 w-auto object-contain">
                        </div>
                    </div>
                </div>

                <div>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Sponsors</p>
                    <div class="flex flex-wrap items-center justify-center gap-12 md:gap-16 opacity-75 hover:opacity-100 transition-opacity duration-300">
                        <!-- Mandiri Sekuritas SVG Logo -->
                        <div class="h-16 flex items-center justify-center">
                            <svg class="h-11 w-auto" viewBox="0 0 120 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 18C10 12 18 12 22 17C26 22 30 20 32 18" stroke="#ffc627" stroke-width="3" stroke-linecap="round"/>
                                <path d="M8 22C13 17 19 17 23 21" stroke="#00529b" stroke-width="2" stroke-linecap="round"/>
                                <text x="38" y="14" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="900" font-size="12px" letter-spacing="-0.03em">mandırı</text>
                                <text x="38" y="24" fill="#ffc627" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="8px" letter-spacing="0.05em">SEKURITAS</text>
                            </svg>
                        </div>

                        <!-- Indo Premier SVG Logo -->
                        <div class="h-16 flex items-center justify-center">
                            <svg class="h-11 w-auto" viewBox="0 0 125 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="8" width="5" height="14" rx="1.5" fill="#0066a4"/>
                                <rect x="13" y="4" width="5" height="18" rx="1.5" fill="#e31b23"/>
                                <path d="M21 15L25 11L29 15" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="36" y="14" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="800" font-size="12px">INDO</text>
                                <text x="36" y="24" fill="#e31b23" font-family="'Outfit', sans-serif" font-weight="800" font-size="10px" letter-spacing="0.05em">PREMIER</text>
                            </svg>
                        </div>

                        <!-- Syailendra Capital SVG Logo -->
                        <div class="h-16 flex items-center justify-center">
                            <svg class="h-11 w-auto" viewBox="0 0 130 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="8" stroke="#af8a3c" stroke-width="2"/>
                                <path d="M15 9V21M11 13H19" stroke="#af8a3c" stroke-width="1.5"/>
                                <text x="30" y="14" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="800" font-size="10px" letter-spacing="0.05em">SYAILENDRA</text>
                                <text x="30" y="24" fill="#slate-400" font-family="'Plus Jakarta Sans', sans-serif" font-weight="600" font-size="7px" letter-spacing="0.15em">CAPITAL</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Media Partners -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background Image with Gradient Overlays -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- The Image background -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50 mix-blend-lighten blur-[8px]" style="background-image: url('{{ asset('images/IMG_2649.JPG') }}');"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-[#af8a3c] mb-12 uppercase tracking-wide">Media Partners 2025</h2>
            
            <div class="flex flex-wrap items-center justify-center gap-12 md:gap-16 opacity-65 hover:opacity-100 transition-opacity duration-300">
                <!-- Bisnis Indonesia SVG Logo -->
                <div class="h-14 flex items-center justify-center">
                    <svg class="h-8 w-auto" viewBox="0 0 115 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <text x="5" y="17" fill="#ffffff" font-family="Georgia, serif" font-weight="bold" font-style="italic" font-size="12px" letter-spacing="-0.02em">Bisnis Indonesia</text>
                    </svg>
                </div>

                <!-- Kontan News SVG Logo -->
                <div class="h-14 flex items-center justify-center">
                    <svg class="h-8 w-auto" viewBox="0 0 100 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="5" y="3" width="16" height="16" rx="3" fill="#e31b23"/>
                        <text x="9" y="16" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="900" font-size="12px">K</text>
                        <text x="26" y="16" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="900" font-size="11px" letter-spacing="0.05em">KONTAN</text>
                    </svg>
                </div>

                <!-- CNBC Indonesia SVG Logo -->
                <div class="h-14 flex items-center justify-center">
                    <svg class="h-8 w-auto" viewBox="0 0 110 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 14C5 12 6.5 10 8.5 10C10.5 10 12 12 12 14" fill="#ffc627"/>
                        <path d="M13 13C13 11 14.5 9 16.5 9C18.5 9 20 11 20 13" fill="#e31b23"/>
                        <text x="26" y="13" fill="#ffffff" font-family="'Outfit', sans-serif" font-weight="900" font-size="11px">CNBC</text>
                        <text x="26" y="20" fill="#0066a4" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="6px" letter-spacing="0.05em">INDONESIA</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Call to Action (Mengarahkan ke 2026) -->
    <section class="max-w-4xl mx-auto px-4 py-16 text-center">
        <div class="glass-card border border-slate-800 p-8 sm:p-12 rounded-3xl space-y-6">
            <h3 class="font-outfit font-black text-2xl sm:text-3xl text-white">Ready for the Next Summit?</h3>
            <p class="text-slate-400 text-sm sm:text-base max-w-md mx-auto">
                StockSummit 2026 is back and registration is currently open. Secure your chance to lead the market.
            </p>
            <div class="pt-2">
                <a href="/" class="inline-flex items-center justify-center px-8 py-3.5 rounded-full font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all">
                    Register for StockSummit 2026
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 text-center text-xs text-slate-500 border-t border-slate-900 bg-[#0c0e2c]">
        <p>&copy; 2026 CMSC UI. All rights reserved.</p>
    </footer>

</body>
</html>
