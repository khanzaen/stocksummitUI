<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Committee - Stock Summit UI 2026</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Tailwind CSS Integration -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            brand: {
                                bg: '#10143d',
                                card: '#181d58',
                                gold: '#af8a3c',
                                hovergold: '#cba14b',
                                dark: '#0c0e2c',
                            }
                        },
                        fontFamily: {
                            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
        <style>
            .glow-gold {
                box-shadow: 0 0 40px -5px rgba(175, 138, 60, 0.35);
            }
            .glassmorphism {
                background: rgba(22, 26, 75, 0.45);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }
            .glass-card {
                background: rgba(12, 15, 46, 0.7);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
            }
        </style>
    </head>
    <body class="bg-[#10143d] text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-amber-500/30 selection:text-amber-200">
        
        <!-- Glowing background mesh grid -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#161a4f_1px,transparent_1px),linear-gradient(to_bottom,#161a4f_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] -z-10"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-[120px] -z-10"></div>
        <div class="absolute top-[800px] left-0 w-[400px] h-[400px] bg-amber-500/5 rounded-full blur-[100px] -z-10"></div>
        <div class="absolute bottom-[400px] right-10 w-[450px] h-[450px] bg-indigo-500/10 rounded-full blur-[110px] -z-10"></div>

        <!-- Header / Navigation -->
        <x-navbar />

        <!-- Hero Section -->
        <section class="relative w-full pt-32 pb-12 flex flex-col items-center justify-center text-center overflow-hidden">
            <div class="max-w-4xl mx-auto px-4 space-y-6 relative z-10">
                <span class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase block">Stock Summit 2026</span>
                <h1 class="font-outfit font-black text-4xl sm:text-6xl text-white uppercase leading-tight tracking-tight">
                    Stock Summit <span class="text-[#af8a3c]">Committee</span>
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-transparent via-[#af8a3c] to-transparent mx-auto mt-4"></div>
            </div>
        </section>

        <!-- Steering Committee Section -->
        <section class="relative w-full py-16 flex flex-col items-center justify-center text-center overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
                <div class="text-center mb-12 space-y-2">
                    <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.15em] text-xs uppercase">Strategic Advisors</p>
                    <h2 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-wide">Steering Committee</h2>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <!-- Card 1: Zahra Aulia -->
                    <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                        <div class="w-28 h-28 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                            @if(file_exists(public_path('images/committee_zahra.png')))
                                <img src="{{ asset('images/committee_zahra.png') }}" alt="Zahra Aulia" class="w-full h-full object-cover">
                            @else
                                <svg class="w-14 h-14 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            @endif
                        </div>
                        <h4 class="font-outfit font-bold text-white text-lg leading-tight">Zahra Aulia</h4>
                        <p class="text-xs text-slate-400 mt-1">FISIP '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-1.5 uppercase tracking-wider bg-[#af8a3c]/10 px-3 py-1 rounded-full inline-block">Steering Committee</p>
                    </div>

                    <!-- Card 2: Mohammad Syahrul -->
                    <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                        <div class="w-28 h-28 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                            @if(file_exists(public_path('images/committee_syahrul.png')))
                                <img src="{{ asset('images/committee_syahrul.png') }}" alt="Mohammad Syahrul" class="w-full h-full object-cover">
                            @else
                                <svg class="w-14 h-14 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            @endif
                        </div>
                        <h4 class="font-outfit font-bold text-white text-lg leading-tight">Mohammad Syahrul</h4>
                        <p class="text-xs text-slate-400 mt-1">FIB '24</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-1.5 uppercase tracking-wider bg-[#af8a3c]/10 px-3 py-1 rounded-full inline-block">Steering Committee</p>
                    </div>

                    <!-- Card 3: Mumtaz Nazilla -->
                    <div class="glass-card border border-slate-800/80 p-6 rounded-2xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                        <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                        <div class="w-28 h-28 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                            <img src="{{ asset('images/IMG_7953.JPG') }}" alt="Mumtaz Nazilla" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-outfit font-bold text-white text-lg leading-tight">Mumtaz Nazilla</h4>
                        <p class="text-xs text-slate-400 mt-1">FIA '25</p>
                        <p class="text-[10px] text-[#af8a3c] font-semibold mt-1.5 uppercase tracking-wider bg-[#af8a3c]/10 px-3 py-1 rounded-full inline-block">Steering Committee</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- C-Level Officers Section -->
        <section class="relative w-full py-16 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/40">
            <!-- Background Glows -->
            <div class="absolute inset-0 pointer-events-none -z-20">
                <div class="absolute top-1/2 left-1/3 -translate-y-1/2 w-[450px] h-[450px] bg-indigo-500/10 rounded-full blur-[130px]"></div>
                <div class="absolute top-1/2 right-1/3 -translate-y-1/2 w-[400px] h-[400px] bg-[#af8a3c]/8 rounded-full blur-[120px]"></div>
            </div>

            <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
                <div class="text-center mb-16 space-y-2">
                    <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.15em] text-xs uppercase">Executive Board</p>
                    <h2 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-wide">C-Level Officers</h2>
                </div>
                
                <!-- Tree Container -->
                <div class="space-y-12 max-w-5xl mx-auto relative">
                    
                    <!-- Level 1: CEO -->
                    <div class="flex justify-center relative">
                        <!-- Vertical Connector line down to the horizontal connector -->
                        <div class="absolute top-full left-1/2 -translate-x-1/2 w-0.5 h-8 bg-slate-800 hidden md:block"></div>
                        
                        <div class="glass-card border border-slate-800/80 p-6 rounded-2xl w-[280px] text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-28 h-28 rounded-full bg-slate-800 mx-auto mb-4 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_haafizh.png')))
                                    <img src="{{ asset('images/committee_haafizh.png') }}" alt="Haafizh Muhammad Taqi" class="w-full h-full object-cover object-top">
                                @else
                                    <svg class="w-14 h-14 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h4 class="font-outfit font-bold text-white text-lg leading-tight">Haafizh Muhammad Taqi</h4>
                            <p class="text-xs text-slate-400 mt-1">Vokasi '24</p>
                            <p class="text-xs text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-4 py-1.5 rounded-full inline-block">CEO</p>
                        </div>
                    </div>

                    <!-- Horizontal Connector line (only visible on md and up) -->
                    <div class="relative w-full h-8 hidden md:block">
                        <div class="absolute top-0 left-[8.3%] right-[8.3%] h-0.5 bg-slate-800"></div>
                        <div class="absolute top-0 left-[8.3%] w-0.5 h-8 bg-slate-800"></div>
                        <div class="absolute top-0 left-[25%] w-0.5 h-8 bg-slate-800"></div>
                        <div class="absolute top-0 left-[41.7%] w-0.5 h-8 bg-slate-800"></div>
                        <div class="absolute top-0 left-[58.3%] w-0.5 h-8 bg-slate-800"></div>
                        <div class="absolute top-0 left-[75%] w-0.5 h-8 bg-slate-800"></div>
                        <div class="absolute top-0 left-[91.7%] w-0.5 h-8 bg-slate-800"></div>
                    </div>

                    <!-- Level 2: Core Officers (6-column Grid) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 gap-4 pt-4 md:pt-0">
                        <!-- COO: Khanza Haura -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_khanza.png')))
                                    <img src="{{ asset('images/committee_khanza.png') }}" alt="Khanza Haura" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">Khanza Haura</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">FT '24</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">COO</p>
                        </div>

                        <!-- CFO 1: M Alif Al Ghifari -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_ghifari.png')))
                                    <img src="{{ asset('images/committee_ghifari.png') }}" alt="M Alif Al Ghifari" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">M Alif Al Ghifari</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">FISIP '25</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">CFO</p>
                        </div>

                        <!-- CFO 2: Merlinda Nur Amalia -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_melinda.png')))
                                    <img src="{{ asset('images/committee_melinda.png') }}" alt="Merlinda Nur Amalia" class="w-full h-full object-cover object-top">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">Merlinda Nur Amalia</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">Vokasi '25</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">CFO</p>
                        </div>

                        <!-- CPO: Saefudin Ilham -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_ilham.png')))
                                    <img src="{{ asset('images/committee_ilham.png') }}" alt="Saefudin Ilham" class="w-full h-full object-cover object-top">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">Saefudin Ilham</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">FMIPA '24</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">CPO</p>
                        </div>

                        <!-- CHRO: Kyna Maimana Izza -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_kyna.png')))
                                    <img src="{{ asset('images/committee_kyna.png') }}" alt="Kyna Maimana Izza" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">Kyna Maimana Izza</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">Vokasi '25</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">CHRO</p>
                        </div>

                        <!-- CMO: Amanda Ayudi -->
                        <div class="glass-card border border-slate-800/80 p-4 rounded-xl text-center backdrop-blur-md hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl hover:scale-[1.02] transition-all duration-500 relative overflow-hidden group">
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <div class="w-20 h-20 rounded-full bg-slate-800 mx-auto mb-3 overflow-hidden border-2 border-[#af8a3c]/30 group-hover:border-[#af8a3c]/60 transition-all duration-300 flex items-center justify-center">
                                @if(file_exists(public_path('images/committee_amanda.png')))
                                    <img src="{{ asset('images/committee_amanda.png') }}" alt="Amanda Ayudi" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                @endif
                            </div>
                            <h5 class="font-outfit font-bold text-white text-sm leading-snug">Amanda Ayudi</h5>
                            <p class="text-[10px] text-slate-400 mt-0.5">Vokasi '24</p>
                            <p class="text-[10px] text-[#af8a3c] font-semibold mt-2 tracking-wider uppercase bg-[#af8a3c]/10 px-2 py-1 rounded-full inline-block">CMO</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Divisions Section -->
        <section class="relative w-full py-16 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/40 bg-[#0e1138]/20">
            <!-- Background Glows -->
            <div class="absolute inset-0 pointer-events-none -z-20">
                <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[400px] h-[400px] bg-[#af8a3c]/5 rounded-full blur-[110px]"></div>
                <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[400px] h-[400px] bg-indigo-500/10 rounded-full blur-[110px]"></div>
            </div>

            <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
                <div class="text-center mb-16 space-y-2">
                    <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.15em] text-xs uppercase">Divisional Leaders</p>
                    <h2 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-wide">Division Managers & Vice Managers</h2>
                </div>

                <!-- Divisions Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    @php
                        $divisions = [
                            // COO Divisions
                            [
                                'name' => 'Logistics',
                                'manager' => 'Athallah Muammar Nadhir Syarif',
                                'manager_faculty' => "Vokasi '24",
                                'manager_image' => 'images/committee_athallah.png',
                                'vice' => 'Aqib Java Abdullah',
                                'vice_faculty' => "FT '25",
                                'vice_image' => 'images/committee_aqib.png',
                                'staff_members' => [
                                    ['name' => 'Muhammad Nabil Sakha Alefqi', 'faculty' => "FT '25", 'image' => 'images/staff_nabil.png'],
                                    ['name' => 'Ahmad Faizulhakim', 'faculty' => "FT '25", 'image' => 'images/staff_faizulhakim.png'],
                                    ['name' => 'Syauqi Fuadi Pelu', 'faculty' => 'FEB'],
                                    ['name' => 'Delvin Athallah Fassah', 'faculty' => "FT '26", 'image' => 'images/staff_delvin.png'],
                                ]
                            ],
                            [
                                'name' => 'Operation',
                                'manager' => 'Rijalul Magfirah',
                                'manager_faculty' => "Vokasi '24",
                                'vice' => 'Yola Cathrine Angeli De Frete',
                                'vice_faculty' => "FT '24",
                                'vice_image' => 'images/committee_yola.png',
                                'staff_members' => [
                                    ['name' => 'Fadhlurrahman Alfarisi', 'faculty' => 'FT', 'image' => 'images/staff_alfarisi.png'],
                                    ['name' => 'Arzel Artemio Haristaki', 'faculty' => 'FEB', 'image' => 'images/staff_arzel.png'],
                                    ['name' => 'Ilyas Ahmad Mulkinegara', 'faculty' => 'FEB', 'image' => 'images/staff_ilyas.png'],
                                    ['name' => 'Muhammad Alfin Mulya', 'faculty' => 'FT', 'image' => 'images/staff_alfin.png'],
                                ]
                            ],
                            // CFO Divisions
                            [
                                'name' => 'Sponsorship',
                                'manager' => 'Maulidia Fakhirah',
                                'manager_faculty' => "FEB '25",
                                'manager_image' => 'images/committee_maulidia.png',
                                'vice' => 'Diandra Olivia Amira',
                                'vice_faculty' => "Vokasi '25",
                                'vice_image' => 'images/committee_diandra.png',
                                'staff_members' => [
                                    ['name' => 'Griselda Sherly Ariella', 'faculty' => 'FIB'],
                                    ['name' => 'Siti Qottrunnada', 'faculty' => 'Vokasi', 'image' => 'images/staff_siti.png'],
                                    ['name' => 'Laura Gaby Liviana Sinaga', 'faculty' => 'Fasilkom'],
                                ]
                            ],
                            [
                                'name' => 'Creative Income',
                                'manager' => 'Latifahtun Nur Faqihah Saena',
                                'manager_faculty' => "Vokasi '25",
                                'manager_image' => 'images/committee_latifah.jpg',
                                'vice' => 'Amalia Ratu Ferlinda',
                                'vice_faculty' => "Vokasi '25",
                                'staff_members' => [
                                    ['name' => 'Anadya Rahmadani', 'faculty' => 'FEB'],
                                    ['name' => 'Sultan Aufa', 'faculty' => 'FIA'],
                                ]
                            ],
                            // CPO Divisions
                            [
                                'name' => 'Competition',
                                'manager' => 'Muhammad Fahmi Prasetyo',
                                'manager_faculty' => "FMIPA '24",
                                'manager_image' => 'images/committee_fahmi.jpg',
                                'vice' => 'Syifa Shafira',
                                'vice_faculty' => "FMIPA '24",
                                'vice_image' => 'images/committee_syifa.jpg',
                                'staff_members' => [
                                    ['name' => 'Allen Ahmad Taqy', 'faculty' => 'FIA'],
                                    ['name' => 'Ardyastuti Riska Wulandari', 'faculty' => 'FEB', 'image' => 'images/staff_ardyastuti.png'],
                                    ['name' => 'Felicia Gunawan', 'faculty' => 'FEB'],
                                    ['name' => 'Hosea Ignatio Lim', 'faculty' => 'FEB'],
                                ]
                            ],
                            [
                                'name' => 'Event',
                                'manager' => 'Rai Bagus Dewaduta Jiwanta',
                                'manager_faculty' => "FEB '24",
                                'manager_image' => 'images/committee_rai.png',
                                'vice' => 'Hanifa Sofia Az-zahra',
                                'vice_faculty' => "Vokasi '25",
                                'vice_image' => 'images/committee_hanifa.png',
                                'staff_members' => [
                                    ['name' => 'Victor Lase', 'faculty' => 'FEB', 'image' => 'images/staff_victor.png'],
                                    ['name' => 'Nabila Aulia Hadi', 'faculty' => 'Vokasi', 'image' => 'images/staff_nabila.png'],
                                    ['name' => 'Ribka Angelina Simatupang', 'faculty' => 'Vokasi', 'image' => 'images/staff_ribka.png'],
                                ]
                            ],
                            // CHRO Divisions
                            [
                                'name' => 'Human Relation',
                                'manager' => 'Dimas Nugraha',
                                'manager_faculty' => "FIB '24",
                                'manager_image' => 'images/committee_dimas.png',
                                'vice' => 'Marcheline Najwa Santoso',
                                'vice_faculty' => "FIB '25",
                                'vice_image' => 'images/committee_marcheline.jpg',
                                'staff_members' => [
                                    ['name' => 'Anisa Purwanti', 'faculty' => 'FIB'],
                                    ['name' => 'Muhammad Rafi Khadafi', 'faculty' => 'FIB'],
                                ]
                            ],
                            [
                                'name' => 'Corporate Administration',
                                'manager' => 'Raisah Ramadhani',
                                'manager_faculty' => "Vokasi '24",
                                'manager_image' => 'images/committee_corp_admin.jpg',
                                'vice' => 'Ilma Azizah',
                                'vice_faculty' => "FISIP '25",
                                'staff_members' => [
                                    ['name' => 'Nazwa Reviana Nursabilla', 'faculty' => 'Vokasi'],
                                    ['name' => 'Anatolia Marrakesh', 'faculty' => 'FEB', 'image' => 'images/staff_anatolia.png'],
                                ]
                            ],
                            // CMO Divisions
                            [
                                'name' => 'Creative Media',
                                'manager' => 'Syakira Nayla Putri',
                                'manager_faculty' => "Vokasi '24",
                                'manager_image' => 'images/committee_anissa.png',
                                'vice' => 'Alika Aisya Kamila',
                                'vice_faculty' => "Vokasi '24",
                                'vice_image' => 'images/committee_vm_creative_media.png',
                                'staff_members' => [
                                    ['name' => 'Najla Muna Qarira', 'faculty' => 'Vokasi'],
                                    ['name' => 'Cecilia Linda Kusuma', 'faculty' => 'Vokasi'],
                                    ['name' => 'Kalisha Salsabila', 'faculty' => 'FEB', 'image' => 'images/staff_kalisha.jpg'],
                                ]
                            ],
                            [
                                'name' => 'Social Media Specialist',
                                'manager' => 'Rifa Irene Cechyllia Hutauruk',
                                'manager_faculty' => "Vokasi '25",
                                'manager_image' => 'images/committee_rifa.png',
                                'vice' => 'Mirza \'Adlina Quartariz',
                                'vice_faculty' => "Vokasi '25",
                                'vice_image' => 'images/committee_mirza.png',
                                'staff_members' => [
                                    ['name' => 'Ariva Zweena', 'faculty' => 'FT', 'image' => 'images/staff_ariva.png'],
                                    ['name' => 'Nihla Ghybtah Azkiya', 'faculty' => 'Vokasi'],
                                    ['name' => 'Gian Cenwi Faatina Rizki', 'faculty' => 'Vokasi'],
                                ]
                            ],
                            [
                                'name' => 'External Relation',
                                'manager' => 'Balqis Maharani',
                                'manager_image' => 'images/committee_balqis.png',
                                'staff_members' => [
                                    ['name' => 'Ryan Ricardo', 'faculty' => 'FEB'],
                                    ['name' => 'Azzahra Nurul Ilma', 'faculty' => 'Vokasi'],
                                    ['name' => 'Ar Rayyan Regansyah Putra', 'faculty' => 'FEB'],
                                    ['name' => 'Muhammad Evant Ibrahim', 'faculty' => 'Vokasi'],
                                ]
                            ],
                        ];
                    @endphp

                    @foreach($divisions as $div)
                        <div class="glass-card border border-slate-800/80 p-6 rounded-3xl text-left hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl transition-all duration-500 relative overflow-hidden group">
                            <!-- Decorative subtle glow in background -->
                            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                            
                            <!-- Division Title -->
                            <h3 class="font-outfit font-black text-[#af8a3c] text-lg uppercase tracking-wider border-b border-slate-800/60 pb-3 mb-4 flex items-center justify-between">
                                <span>{{ $div['name'] }}</span>
                                <span class="text-[10px] text-slate-500 font-normal normal-case">Division</span>
                            </h3>

                            <!-- Leader Cards (Manager & Vice Manager) -->
                            <div class="grid {{ !empty($div['vice']) ? 'grid-cols-2' : 'grid-cols-1' }} gap-4">
                                <!-- Manager -->
                                <div class="space-y-3">
                                    <div class="w-16 h-16 rounded-full bg-slate-800 border border-slate-700/60 overflow-hidden flex items-center justify-center text-slate-500 mx-auto">
                                        @if(!empty($div['manager_image']) && file_exists(public_path($div['manager_image'])))
                                            <img src="{{ asset($div['manager_image']) }}" alt="{{ $div['manager'] }}" class="w-full h-full object-cover">
                                        @else
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <h5 class="font-outfit font-bold text-white text-xs leading-snug truncate" title="{{ $div['manager'] }}">{{ $div['manager'] }}</h5>
                                        @if(!empty($div['manager_faculty']))
                                            <p class="text-[10px] text-slate-400 mt-0.5">{{ $div['manager_faculty'] }}</p>
                                        @endif
                                        <p class="text-[9px] text-[#af8a3c] uppercase font-semibold tracking-wider mt-1">Manager</p>
                                    </div>
                                </div>

                                @if(!empty($div['vice']))
                                    <!-- Vice Manager -->
                                    <div class="space-y-3">
                                        <div class="w-16 h-16 rounded-full bg-slate-800 border border-slate-700/60 overflow-hidden flex items-center justify-center text-slate-500 mx-auto">
                                            @if(!empty($div['vice_image']) && file_exists(public_path($div['vice_image'])))
                                                <img src="{{ asset($div['vice_image']) }}" alt="{{ $div['vice'] }}" class="w-full h-full object-cover">
                                            @else
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <h5 class="font-outfit font-bold text-white text-xs leading-snug truncate" title="{{ $div['vice'] }}">{{ $div['vice'] }}</h5>
                                            @if(!empty($div['vice_faculty']))
                                                <p class="text-[10px] text-slate-400 mt-0.5">{{ $div['vice_faculty'] }}</p>
                                            @endif
                                            <p class="text-[9px] text-[#af8a3c] uppercase font-semibold tracking-wider mt-1">Vice Manager</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Division Staff Section -->
        <section class="relative w-full py-20 flex flex-col items-center justify-center text-center overflow-hidden border-t border-slate-800/40 bg-[#0e1138]/20">
            <!-- Background Glows -->
            <div class="absolute inset-0 pointer-events-none -z-20">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[550px] h-[550px] bg-[#af8a3c]/5 rounded-full blur-[140px]"></div>
                <div class="absolute bottom-0 right-1/4 w-[350px] h-[350px] bg-indigo-500/5 rounded-full blur-[100px]"></div>
            </div>

            <div class="max-w-6xl mx-auto px-4 w-full relative z-10">
                <div class="text-center mb-16 space-y-2">
                    <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.15em] text-xs uppercase">Behind The Scenes</p>
                    <h2 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-wide">Division Staff Members</h2>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-xl mx-auto mt-2">The list of supporting staff members actively contributing to the success of each division at Stock Summit 2026.</p>
                </div>

                <!-- Staff Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    @foreach($divisions as $div)
                        @if(isset($div['staff_members']) && count($div['staff_members']) > 0)
                            @php
                                $staffCount = count($div['staff_members']);
                            @endphp
                            <div class="glass-card border border-slate-800/80 p-6 rounded-3xl text-left hover:border-[#af8a3c]/30 hover:shadow-[#af8a3c]/5 hover:shadow-xl transition-all duration-500 relative overflow-hidden group">
                                <!-- Decorative subtle glow in background -->
                                <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                                
                                <!-- Division Header -->
                                <h3 class="font-outfit font-black text-[#af8a3c] text-lg uppercase tracking-wider border-b border-slate-800/60 pb-3 mb-4 flex items-center justify-between">
                                    <span>{{ $div['name'] }}</span>
                                    <span class="text-[10px] text-slate-500 font-normal normal-case">Staff</span>
                                </h3>

                                <!-- Staff List (MVM Style Grid) -->
                                <div class="grid @if($staffCount == 2) grid-cols-2 @elseif($staffCount == 3) grid-cols-3 @else grid-cols-2 sm:grid-cols-4 @endif gap-4">
                                    @foreach($div['staff_members'] as $staff)
                                        <div class="space-y-3">
                                            <div class="w-16 h-16 rounded-full bg-slate-800 border border-slate-700/60 flex items-center justify-center overflow-hidden mx-auto">
                                                @if(!empty($staff['image']) && file_exists(public_path($staff['image'])))
                                                    <img src="{{ asset($staff['image']) }}" alt="{{ $staff['name'] }}" class="w-full h-full object-cover">
                                                @else
                                                    <svg class="w-8 h-8 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                    </svg>
                                                @endif
                                            </div>
                                            <div class="text-center">
                                                <h5 class="font-outfit font-bold text-white text-xs leading-snug truncate" title="{{ $staff['name'] }}">{{ $staff['name'] }}</h5>
                                                <p class="text-[10px] text-slate-400 mt-0.5">{{ $staff['faculty'] }}</p>
                                                <p class="text-[9px] text-[#af8a3c] uppercase font-semibold tracking-wider mt-1">Staff</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <x-footer />

        <!-- Scripts -->
        <script>
            // Sticky header scroll behavior
            window.addEventListener('scroll', () => {
                const header = document.getElementById('main-header');
                if (window.scrollY > 20) {
                    header.classList.add('py-2', 'shadow-xl');
                    header.querySelector('div').classList.remove('h-20');
                    header.querySelector('div').classList.add('h-16');
                } else {
                    header.classList.remove('py-2', 'shadow-xl');
                    header.querySelector('div').classList.remove('h-16');
                    header.querySelector('div').classList.add('h-20');
                }
            });

            // Mobile menu toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const burgerTop = document.getElementById('burger-top');
            const burgerMid = document.getElementById('burger-mid');
            const burgerBottom = document.getElementById('burger-bottom');

            menuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    burgerTop.classList.add('transform', 'rotate-45', 'translate-y-[6px]');
                    burgerMid.classList.add('opacity-0');
                    burgerBottom.classList.add('transform', '-rotate-45', '-translate-y-[6px]');
                } else {
                    mobileMenu.classList.add('hidden');
                    burgerTop.classList.remove('transform', 'rotate-45', 'translate-y-[6px]');
                    burgerMid.classList.remove('opacity-0');
                    burgerBottom.classList.remove('transform', '-rotate-45', '-translate-y-[6px]');
                }
            });
        </script>
    </body>
</html>
