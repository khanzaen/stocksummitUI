<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Summit 2025 Recap - CMSC UI</title>
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
    <div class="bg-[#0c0e2c] border-b border-slate-800 py-4 text-center text-sm font-semibold sticky top-0 z-50 backdrop-blur-md bg-opacity-95 flex justify-center gap-4 flex-wrap">
        <span class="text-slate-400">Looking for other events?</span>
        <a href="/archive/2024" class="text-[#af8a3c] hover:underline font-medium">Stock Summit 2024 &rarr;</a>
        <span class="text-slate-700">|</span>
        <a href="/" class="text-[#af8a3c] hover:underline font-medium">Stock Summit 2026 (Current) &rarr;</a>
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
                STOCK SUMMIT <span class="text-[#af8a3c]">2025</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl font-light max-w-2xl mx-auto">
                "Navigating Market Volatility: Empowering Young Investors for Economic Resilience"
            </p>
            
            <!-- Stats Row -->
            <div class="grid grid-cols-3 gap-4 max-w-lg mx-auto pt-6 border-t border-slate-800">
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">3M+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Prize Pool</p>
                </div>
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">200+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Participants</p>
                </div>
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white font-outfit">20+</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Universities</p>
                </div>
            </div></div>
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
                <div class="glass-card border border-slate-800 p-6 rounded-2xl text-center flex flex-col justify-between order-3 md:order-3 hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

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
                <div class="glass-card border-2 border-[#af8a3c] p-6 rounded-3xl text-center flex flex-col justify-between order-1 md:order-2 scale-105 shadow-xl shadow-[#af8a3c]/5 hover:border-[#af8a3c]/50 hover:shadow-[#af8a3c]/10 hover:scale-[1.06] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div>
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-1">GRAND CHAMPION</span>
                        <span class="text-white text-sm font-semibold mb-3 block">1st Place Winners</span>
                    </div>
                    
                    <!-- Team Photo -->
                    <div class="my-4 overflow-hidden rounded-xl border border-slate-700/60 bg-slate-950/40">
                        <img src="{{ asset('images/IMG_2789.JPG') }}" alt="Wolf of BSD - 1st Winner" class="w-full h-44 object-cover hover:scale-105 transition-transform duration-500 pointer-events-none">
                    </div>
 
                    <div class="mt-2">
                        <p class="text-2xl font-black text-white font-outfit">Wolf of BSD</p>
                        <p class="text-xs text-slate-300 mt-1">Universitas Prasetya Mulia</p>
                    </div>
                </div>
 
                <!-- Runner Up 1 (Juara 2) -->
                <div class="glass-card border border-slate-800 p-6 rounded-2xl text-center flex flex-col justify-between order-2 md:order-1 hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

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
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/qisti.png') }}" alt="Qisti Quraini" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Qisti Quraini</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Corporate Strategic Investment</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at PT Kalbe Farma Tbk</p>
                </div>
                <!-- Card 2 -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/akmal.png') }}" alt="Akmal Irsyad" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base">Akmal Irsyad</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Equity Research Analyst</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at Tuntun Sekuritas Indonesia</p>
                </div>
                <!-- Card 3 -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/everson.png') }}" alt="Everson Sugianto" class="w-full h-full object-cover">
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
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/anita.jpg') }}" alt="Ibu Anita Kesia Zonebia" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base leading-tight">Ibu Anita Kesia Zonebia</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Economic Analyst</p>
                    <p class="text-[10px] text-slate-400 mt-0.5">at IDX</p>
                </div>
                <!-- Card 2 -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/putu.jpg') }}" alt="I Putu Saptajaya" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base leading-tight">I Putu Saptajaya, CSA®, CTA®, CFP®, CRP®, CPM (Asia)</h4>
                    <p class="text-xs text-[#af8a3c] font-medium mt-1">Capital Market Investor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Sponsors -->
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
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-[#af8a3c] mb-12 uppercase tracking-wide">Supported 2025</h2>
            
            <div class="space-y-12">
                <!-- Primary Partner (IDX) -->
                <div class="mb-10">
                    <div class="max-w-[160px] sm:max-w-[190px] mx-auto rounded-3xl overflow-hidden glass-card border border-slate-800/80 shadow-2xl hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 transition-all duration-500 hover:scale-[1.01] active:scale-100 group">
                        <div class="relative overflow-hidden p-4 bg-gradient-to-b from-[#161a4f]/40 to-[#0e1138]/60 backdrop-blur-md flex items-center justify-center">
                            <!-- Decorative subtle glow in background -->
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <img src="{{ asset('images/idx_logo_red.png') }}" 
                                 alt="IDX Logo" 
                                 class="w-full h-auto object-contain rounded-xl opacity-90 group-hover:opacity-100 transition-opacity duration-500">
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
            
            <div class="max-w-4xl mx-auto rounded-3xl overflow-hidden glass-card border border-slate-800/80 shadow-2xl hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 transition-all duration-500 hover:scale-[1.01] active:scale-100 group">
                <div class="relative overflow-hidden p-4 sm:p-6 bg-gradient-to-b from-[#161a4f]/40 to-[#0e1138]/60 backdrop-blur-md">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <img src="{{ asset('images/media_partners.png') }}" 
                         alt="Media Partners 2025" 
                         class="w-full h-auto object-contain rounded-2xl opacity-90 group-hover:opacity-100 transition-opacity duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Event Gallery / Highlights -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background with Gradients and Glows -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- Base gradient texture to mimic photo depth -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#161b54]/40 via-[#0e113a]/20 to-[#10143d]"></div>
            <!-- Glowing gradient shapes with increased visibility -->
            <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[450px] h-[450px] bg-[#af8a3c]/18 rounded-full blur-[120px]"></div>
            <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[450px] h-[450px] bg-indigo-500/22 rounded-full blur-[120px]"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <div class="text-center mb-12">
                <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-[#af8a3c] uppercase tracking-wide">2025 Event Highlights</h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">Swipe or use controls to browse photos from Stock Summit 2025</p>
            </div>

            <style>
                #gallerySlider::-webkit-scrollbar {
                    display: none;
                }
            </style>

            <!-- Single large glass-card container wrapping all photos -->
            <div class="w-full rounded-3xl overflow-hidden glass-card border border-slate-800/80 shadow-2xl hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 transition-all duration-500 hover:scale-[1.01] active:scale-100 group">
                <div class="relative overflow-hidden p-4 sm:p-6 bg-gradient-to-b from-[#161a4f]/40 to-[#0e1138]/60 backdrop-blur-md">
                    <!-- Decorative subtle glow in background -->
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <!-- Floating Swipe Buttons inside the Card -->
                    <button id="prevBtn" class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 sm:w-12 sm:h-12 rounded-full flex items-center justify-center border border-slate-700/80 bg-slate-950/90 text-[#af8a3c] hover:bg-[#af8a3c] hover:text-[#10143d] transition-all duration-300 active:scale-90 shadow-2xl backdrop-blur-md opacity-80 sm:opacity-0 sm:group-hover:opacity-100" aria-label="Previous image">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button id="nextBtn" class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 sm:w-12 sm:h-12 rounded-full flex items-center justify-center border border-slate-700/80 bg-slate-950/90 text-[#af8a3c] hover:bg-[#af8a3c] hover:text-[#10143d] transition-all duration-300 active:scale-90 shadow-2xl backdrop-blur-md opacity-80 sm:opacity-0 sm:group-hover:opacity-100" aria-label="Next image">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    </button>

                    <!-- Scrollable Slider Inside the Card -->
                    <div id="gallerySlider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth select-none pb-2 px-4" style="scrollbar-width: none; -ms-overflow-style: none;">
                        <!-- Slide 1 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/IMG_2739.JPG') }}" alt="Seminar Session" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Seminar & Talkshow Session</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/IMG_2838.JPG') }}" alt="Presentation Session" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Grand Final Presentation Session</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/IMG_2812.JPG') }}" alt="Closing Ceremony" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Award Ceremony & Closing Ceremony</p>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/gallery_seminar_award.jpg') }}" alt="Seminar Awarding Screen" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Seminar & Awarding Stock Summit UI 2025 Screen</p>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/gallery_question.jpg') }}" alt="Q&A Session" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Interactive Q&A Session</p>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/gallery_speech.jpg') }}" alt="Opening Speech by CMSC President" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Opening Speech by CMSC 2025 President</p>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="flex-shrink-0 w-[340px] sm:w-[500px] snap-center relative overflow-hidden rounded-2xl border border-slate-800/50 aspect-[4/3] group/slide">
                            <img src="{{ asset('images/gallery_audience.jpg') }}" alt="Seminar Audience" class="w-full h-full object-cover opacity-95 group-hover/slide:scale-105 transition-transform duration-500 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-100 sm:opacity-0 group-hover/slide:opacity-100 transition-opacity duration-300 flex items-end p-4 justify-start text-left">
                                <p class="text-xs font-semibold text-white tracking-wide">Active Participant Audience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Navigation JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.getElementById('gallerySlider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            if (slider && prevBtn && nextBtn) {
                const getScrollAmount = () => {
                    const card = slider.firstElementChild;
                    if (!card) return 300;
                    const cardWidth = card.getBoundingClientRect().width;
                    return cardWidth + 24; // Width + gap
                };

                prevBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: -getScrollAmount(),
                        behavior: 'smooth'
                    });
                });

                nextBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: getScrollAmount(),
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>

    <!-- 6.2. Steering Committee -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background with Gradients and Glows -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- Base gradient texture -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#161b54]/40 via-[#0e113a]/20 to-[#10143d]"></div>
            <!-- Glowing gradient shapes -->
            <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[400px] h-[400px] bg-indigo-500/20 rounded-full blur-[120px]"></div>
            <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[400px] h-[400px] bg-[#af8a3c]/15 rounded-full blur-[120px]"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-center text-[#af8a3c] mb-12 uppercase tracking-wide">Steering Committee</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <!-- Card 1: Reynaldi -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/committee_reynaldi.png') }}" alt="Reynaldi" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base leading-tight">Reynaldi</h4>
                    <p class="text-xs text-slate-400 mt-1">Vokasi '24</p>
                    <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 uppercase tracking-wider">Steering Committee</p>
                </div>

                <!-- Card 2: Yudhistira -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/committee_yudhistira.png') }}" alt="Yudhistira" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base leading-tight">Yudhistira</h4>
                    <p class="text-xs text-slate-400 mt-1">FEB '24</p>
                    <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 uppercase tracking-wider">Steering Committee</p>
                </div>

                <!-- Card 3: Dzikri -->
                <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                    <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                        <img src="{{ asset('images/committee_dzikri.png') }}" alt="Dzikri" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-semibold text-white text-base leading-tight">Dzikri</h4>
                    <p class="text-xs text-slate-400 mt-1">Vokasi '24</p>
                    <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 uppercase tracking-wider">Steering Committee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6.5. Organizing Committee -->
    <section class="relative w-full py-16 md:py-24 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/60 mt-12">
        <!-- Background with Gradients and Glows -->
        <div class="absolute inset-0 pointer-events-none -z-20">
            <!-- Base gradient texture to mimic photo depth -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#161b54]/40 via-[#0e113a]/20 to-[#10143d]"></div>
            <!-- Glowing gradient shapes with increased visibility -->
            <div class="absolute top-1/2 left-1/3 -translate-y-1/2 w-[450px] h-[450px] bg-indigo-500/22 rounded-full blur-[130px]"></div>
            <div class="absolute top-1/2 right-1/3 -translate-y-1/2 w-[400px] h-[400px] bg-[#af8a3c]/18 rounded-full blur-[120px]"></div>
            <!-- Gradients to blend edges -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#10143d] via-transparent to-[#10143d]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
            <h2 class="font-outfit font-bold text-2xl sm:text-3xl text-center text-[#af8a3c] mb-12 uppercase tracking-wide">Organizing Committee</h2>
            
            <!-- Structure Tree Container -->
            <div class="space-y-12 max-w-5xl mx-auto relative">
                
                <!-- Level 1: CEO -->
                <div class="flex justify-center relative">
                    <!-- Vertical Connector line going down to the horizontal line -->
                    <div class="absolute top-full left-1/2 -translate-x-1/2 w-0.5 h-8 bg-slate-800 hidden md:block"></div>
                    
                    <div class="glass-card border border-slate-800/80 p-6 rounded-2xl w-[280px] text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-24 h-24 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_putri.png') }}" alt="Putri" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-semibold text-white text-base leading-tight">Putri</h4>
                        <p class="text-xs text-slate-400 mt-0.5">FIA '24</p>
                        <p class="text-xs text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">CEO</p>
                    </div>
                </div>

                <!-- Horizontal Connector for Desktop (only visible on md and up) -->
                <div class="relative w-full h-8 hidden md:block">
                    <!-- The horizontal connecting line across all 5 lower cards -->
                    <div class="absolute top-0 left-[10%] right-[10%] h-0.5 bg-slate-800"></div>
                    <!-- Vertical down-ticks to each of the 5 cards -->
                    <div class="absolute top-0 left-[10%] w-0.5 h-8 bg-slate-800"></div>
                    <div class="absolute top-0 left-[30%] w-0.5 h-8 bg-slate-800"></div>
                    <div class="absolute top-0 left-[50%] w-0.5 h-8 bg-slate-800"></div>
                    <div class="absolute top-0 left-[70%] w-0.5 h-8 bg-slate-800"></div>
                    <div class="absolute top-0 left-[90%] w-0.5 h-8 bg-slate-800"></div>
                </div>

                <!-- Level 2: Core Officers (5-column Grid) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6 pt-4 md:pt-0">
                    <!-- COO -->
                    <div class="glass-card border border-slate-800/80 p-5 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_arsy.png') }}" alt="Muhammad Arsy" class="w-full h-full object-cover">
                        </div>
                        <h5 class="font-semibold text-white text-sm leading-snug">Muhammad Arsy</h5>
                        <p class="text-[10px] text-slate-400 mt-0.5">Vokasi '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">COO</p>
                    </div>

                    <!-- CFO -->
                    <div class="glass-card border border-slate-800/80 p-5 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_nayla.png') }}" alt="Nayla Huwaida Zarifah" class="w-full h-full object-cover">
                        </div>
                        <h5 class="font-semibold text-white text-sm leading-snug">Nayla Huwaida Zarifah</h5>
                        <p class="text-[10px] text-slate-400 mt-0.5">FIA '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">CFO</p>
                    </div>

                    <!-- CPO -->
                    <div class="glass-card border border-slate-800/80 p-5 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_faikar.png') }}" alt="Izza Faikar" class="w-full h-full object-cover">
                        </div>
                        <h5 class="font-semibold text-white text-sm leading-snug">Izza Faikar</h5>
                        <p class="text-[10px] text-slate-400 mt-0.5">FEB '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">CPO</p>
                    </div>

                    <!-- CHRO -->
                    <div class="glass-card border border-slate-800/80 p-5 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_wira.png') }}" alt="Wira Jati Susanto" class="w-full h-full object-cover">
                        </div>
                        <h5 class="font-semibold text-white text-sm leading-snug">Wira Jati Susanto</h5>
                        <p class="text-[10px] text-slate-400 mt-0.5">Vokasi '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">CHRO</p>
                    </div>

                    <!-- CMO -->
                    <div class="glass-card border border-slate-800/80 p-5 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.01] transition-all duration-500 relative overflow-hidden group">
                        <!-- Decorative subtle glow in background -->
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                        
                        <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30">
                            <img src="{{ asset('images/committee_zahra.png') }}" alt="Zahra Aulia" class="w-full h-full object-cover">
                        </div>
                        <h5 class="font-semibold text-white text-sm leading-snug">Zahra Aulia</h5>
                        <p class="text-[10px] text-slate-400 mt-0.5">FISIP '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-0.5 tracking-wider uppercase">CMO</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. Call to Action (Mengarahkan ke 2026) -->
    <section class="max-w-4xl mx-auto px-4 py-16 text-center">
        <div class="glass-card border border-slate-800 p-8 sm:p-12 rounded-3xl space-y-6">
            <h3 class="font-outfit font-black text-2xl sm:text-3xl text-white">Ready for the Next Summit?</h3>
            <p class="text-slate-400 text-sm sm:text-base max-w-md mx-auto">
                Stock Summit 2026 is back and registration is currently open. Secure your chance to lead the market.
            </p>
            <div class="pt-2">
                <a href="/" class="inline-flex items-center justify-center px-8 py-3.5 rounded-full font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all">
                    Register for Stock Summit 2026
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
