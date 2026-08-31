<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Recruitment Staff | Stock Summit 2026</title>
    
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
    </style>
</head>
<body class="bg-[#10143d] text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-amber-500/30 selection:text-amber-200 overflow-x-hidden relative">
    
    <!-- Glowing background mesh grid -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#161a4f_1px,transparent_1px),linear-gradient(to_bottom,#161a4f_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] -z-10"></div>
    
    <!-- Background Image with Gradient Overlay (Luxury Blue Silk & Gold Waves) -->
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

    <main class="flex-grow max-w-3xl mx-auto px-4 py-16 w-full relative z-10">
        <!-- Page Header -->
        <div class="text-center mb-12 space-y-3">
            <span class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase block">Committee Oprec</span>
            <h1 class="font-outfit font-black text-2xl sm:text-4xl text-white uppercase tracking-tight leading-tight">Open Recruitment Staff<br>Stock <span class="text-[#af8a3c]">Summit</span> 2026</h1>
            <p class="text-slate-400 text-sm sm:text-base font-light max-w-xl mx-auto">
                Join the organizing team for Stock Summit 2026. Fill in your details below to submit your application.
            </p>
        </div>

        <!-- Countdown Timer -->
        <div class="mb-10 text-center relative flex justify-center">
            <div class="glassmorphism border-2 border-[#af8a3c]/30 p-6 rounded-3xl inline-block max-w-md w-full shadow-2xl relative overflow-hidden group">
                <!-- Golden glowing background blur -->
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

                <div id="countdown-coming-soon" class="hidden font-outfit font-black text-2xl sm:text-3xl text-[#af8a3c] uppercase tracking-widest py-3">
                    Coming Soon
                </div>
            </div>
        </div>

        <!-- Validation Error Message Alert box -->
        <div id="error-alert" class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm hidden">
            <h4 class="font-bold font-outfit uppercase tracking-wider mb-2">Please fix the following errors:</h4>
            <ul id="error-list" class="list-disc list-inside space-y-1"></ul>
        </div>

        <!-- Oprec Form -->
        <form 
            id="oprec-form"
            action="{{ route('oprec.submit') }}" 
            method="POST" 
            enctype="multipart/form-data"
            class="glassmorphism border-2 border-[#af8a3c] p-8 sm:p-10 rounded-3xl space-y-6 shadow-2xl relative glow-gold"
        >
            @csrf
            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/5 to-transparent opacity-30 pointer-events-none rounded-3xl"></div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 relative z-10">
                <!-- SECTION 1: PERSONAL INFORMATION -->
                <div class="sm:col-span-2 flex items-center gap-3 pb-2 border-b border-slate-800/60 mb-2">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-[#af8a3c]/10 border border-[#af8a3c]/30 text-xs font-bold text-[#af8a3c]">01</span>
                    <h3 class="font-outfit font-bold text-sm tracking-wide text-white uppercase">Personal Information</h3>
                </div>

                <!-- Full Name -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="full_name">Full Name *</label>
                    <input 
                        type="text" 
                        id="full_name" 
                        name="full_name" 
                        required 
                        placeholder="e.g. Haafizh Muhammad Taqi"
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    >
                </div>

                <!-- NPM -->
                <div class="space-y-1.5 text-left">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="npm">NPM *</label>
                    <input 
                        type="text" 
                        id="npm" 
                        name="npm" 
                        required 
                        placeholder="e.g. 2406123456"
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    >
                </div>

                <!-- Faculty -->
                <div class="space-y-1.5 text-left">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="faculty">Faculty *</label>
                    <select 
                        id="faculty" 
                        name="faculty" 
                        required
                        class="w-full rounded-xl px-4 py-3 text-sm border cursor-pointer"
                    >
                        <option value="" disabled selected>Select Faculty...</option>
                        <option value="Fakultas Kedokteran (FKUI)">Fakultas Kedokteran (FK UI)</option>
                        <option value="Fakultas Hukum (FHUI)">Fakultas Hukum (FH UI)</option>
                        <option value="Fakultas Ekonomi dan Bisnis (FEBUI)">Fakultas Ekonomi dan Bisnis (FEB UI)</option>
                        <option value="Fakultas Teknik (FTUI)">Fakultas Teknik (FT UI)</option>
                        <option value="Fakultas Ilmu Pengetahuan Budaya (FIBUI)">Fakultas Ilmu Pengetahuan Budaya (FIB UI)</option>
                        <option value="Fakultas Psikologi (FPsiUI)">Fakultas Psikologi (FPsi UI)</option>
                        <option value="Fakultas Ilmu Komputer (FasilkomUI)">Fakultas Ilmu Komputer (Fasilkom UI)</option>
                        <option value="Fakultas Ilmu Keperawatan (FIKUI)">Fakultas Ilmu Keperawatan (FIK UI)</option>
                        <option value="Fakultas Kesehatan Masyarakat (FKMaUI)">Fakultas Kesehatan Masyarakat (FKM UI)</option>
                        <option value="Fakultas Ilmu Administrasi (FIAUI)">Fakultas Ilmu Administrasi (FIA UI)</option>
                        <option value="Fakultas Kedokteran Gigi (FKG)">Fakultas Kedokteran Gigi (FKGUI)</option>
                        <option value="Fakultas Farmasi (FFUI)">Fakultas Farmasi (FF UI)</option>
                        <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)">Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA UI)</option>
                        <option value="Fakultas Ilmu Sosial dan Ilmu Politik (FISIPUI)">Fakultas Ilmu Sosial dan Ilmu Politik (FISIP UI)</option>
                        <option value="Program Pendidikan Vokasi (PPVUI)">Program Pendidikan Vokasi (Vokasi UI)</option>
                    </select>
                </div>

                <!-- Study Program -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="study_program">Study Program *</label>
                    <input 
                        type="text" 
                        id="study_program" 
                        name="study_program" 
                        required 
                        placeholder="e.g. Keuangan dan Perbankan"
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    >
                </div>

                <!-- Email -->
                <div class="space-y-1.5 text-left">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="email">Email *</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        placeholder="e.g. haafizh.taqi@gmail.com"
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    >
                </div>

                <!-- WhatsApp / Line ID -->
                <div class="space-y-1.5 text-left">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="whatsapp">Id Line / WhatsApp Number *</label>
                    <input 
                        type="text" 
                        id="whatsapp" 
                        name="whatsapp" 
                        required 
                        placeholder="e.g. 081234567890 / haafizhmt"
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    >
                </div>

                <!-- SECTION 2: REQUIRED ATTACHMENTS -->
                <div class="sm:col-span-2 flex items-center gap-3 pb-2 border-b border-slate-800/60 mb-2 mt-6">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-[#af8a3c]/10 border border-[#af8a3c]/30 text-xs font-bold text-[#af8a3c]">02</span>
                    <h3 class="font-outfit font-bold text-sm tracking-wide text-white uppercase">Required Attachments</h3>
                </div>

                <!-- SIAK-NG Upload -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]">Screenshot of Active SIAK-NG *</label>
                    <div class="relative group border border-dashed border-slate-300 hover:border-[#af8a3c]/50 rounded-xl p-4 transition-all duration-300 bg-white flex flex-col items-center justify-center cursor-pointer">
                        <input 
                            type="file" 
                            name="siak_ng_screenshot" 
                            required
                            onchange="handleFileChange(this)"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        >
                        <div class="file-upload-default flex flex-col items-center justify-center pointer-events-none w-full">
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-[#af8a3c] transition-colors mb-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            <span class="text-xs text-slate-500 font-semibold group-hover:text-[#af8a3c] transition-colors text-center">Click to select file</span>
                            <span class="file-name text-[10px] text-slate-400 mt-1 font-mono text-center">No file chosen</span>
                        </div>
                        <div class="file-upload-preview hidden w-full z-20 flex flex-col gap-2"></div>
                    </div>
                </div>

                <!-- CV Upload -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]">Curriculum Vitae *</label>
                    <div class="relative group border border-dashed border-slate-300 hover:border-[#af8a3c]/50 rounded-xl p-4 transition-all duration-300 bg-white flex flex-col items-center justify-center cursor-pointer">
                        <input 
                            type="file" 
                            name="cv" 
                            required
                            onchange="handleFileChange(this)"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        >
                        <div class="file-upload-default flex flex-col items-center justify-center pointer-events-none w-full">
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-[#af8a3c] transition-colors mb-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="text-xs text-slate-500 font-semibold group-hover:text-[#af8a3c] transition-colors text-center">Click to select file</span>
                            <span class="file-name text-[10px] text-slate-400 mt-1 font-mono text-center">No file chosen</span>
                        </div>
                        <div class="file-upload-preview hidden w-full z-20 flex flex-col gap-2"></div>
                    </div>
                </div>

                <!-- Instagram Proof Upload -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]">Follow Instagram Stock Summit 2026 (<span class="lowercase">@stocksummit.ui</span>) *</label>
                    <div class="relative group border border-dashed border-slate-300 hover:border-[#af8a3c]/50 rounded-xl p-4 transition-all duration-300 bg-white flex flex-col items-center justify-center cursor-pointer">
                        <input 
                            type="file" 
                            name="instagram_follow" 
                            required
                            onchange="handleFileChange(this)"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        >
                        <div class="file-upload-default flex flex-col items-center justify-center pointer-events-none w-full">
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-[#af8a3c] transition-colors mb-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.75 3.75 0 0121 12z" />
                            </svg>
                            <span class="text-xs text-slate-500 font-semibold group-hover:text-[#af8a3c] transition-colors text-center">Click to select file</span>
                            <span class="file-name text-[10px] text-slate-400 mt-1 font-mono text-center">No file chosen</span>
                        </div>
                        <div class="file-upload-preview hidden w-full z-20 flex flex-col gap-2"></div>
                    </div>
                </div>

                <!-- Share Broadcast Proof Upload (multiple files) -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]">Share Broadcast (Minimum 3 Group) *</label>
                    <div class="relative group border border-dashed border-slate-300 hover:border-[#af8a3c]/50 rounded-xl p-4 transition-all duration-300 bg-white flex flex-col items-center justify-center cursor-pointer">
                        <input 
                            type="file" 
                            name="share_broadcast[]" 
                            multiple 
                            required
                            onchange="handleFileChange(this)"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        >
                        <div class="file-upload-default flex flex-col items-center justify-center pointer-events-none w-full">
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-[#af8a3c] transition-colors mb-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 10.742l4.684-2.927m0 0l4.684 2.927m-4.684-2.927v8.835m0 0l-4.684-2.927m4.684 2.927l4.684-2.927M4.06 12.235a4.5 4.5 0 011.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75a4.5 4.5 0 01-2.69-7.265z" />
                            </svg>
                            <span class="text-xs text-slate-500 font-semibold group-hover:text-[#af8a3c] transition-colors text-center">Click to select files (max 5)</span>
                            <span class="file-name text-[10px] text-slate-400 mt-1 font-mono text-center">No files chosen</span>
                        </div>
                        <div class="file-upload-preview hidden w-full z-20 flex flex-col gap-2"></div>
                    </div>
                </div>

                <!-- SECTION 3: PREFERENCES & DIVISION CHOICES -->
                <div class="sm:col-span-2 flex items-center gap-3 pb-2 border-b border-slate-800/60 mb-2 mt-6">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-[#af8a3c]/10 border border-[#af8a3c]/30 text-xs font-bold text-[#af8a3c]">03</span>
                    <h3 class="font-outfit font-bold text-sm tracking-wide text-white uppercase">Preferences & Division Choices</h3>
                </div>

                <!-- First Choice Division -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="first_choice_division">First Choice Division *</label>
                    <select 
                        id="first_choice_division" 
                        name="first_choice_division" 
                        required
                        class="w-full rounded-xl px-4 py-3 text-sm border cursor-pointer"
                    >
                        <option value="" disabled selected>Select division...</option>
                        <option value="Operation">Operation</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Sponsorship">Sponsorship</option>
                        <option value="Creative Income">Creative Income</option>
                        <option value="Competition">Competition</option>
                        <option value="Event">Event</option>
                        <option value="Corporate Administration">Corporate Administration</option>
                        <option value="Human Relation">Human Relation</option>
                        <option value="Creative Marketing">Creative Marketing</option>
                        <option value="External Relation">External Relation</option>
                        <option value="Social Media Specialist">Social Media Specialist</option>
                    </select>
                </div>

                <!-- Reason First Choice -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="first_choice_reason">Reason for Your First Division Choice *</label>
                    <textarea 
                        id="first_choice_reason" 
                        name="first_choice_reason" 
                        rows="4" 
                        required 
                        placeholder="Explain why you choose this division as your first choice..."
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    ></textarea>
                </div>

                <!-- Second Choice Division -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="second_choice_division">Second Choice Division *</label>
                    <select 
                        id="second_choice_division" 
                        name="second_choice_division" 
                        required
                        class="w-full rounded-xl px-4 py-3 text-sm border cursor-pointer"
                    >
                        <option value="" disabled selected>Select division...</option>
                        <option value="Operation">Operation</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Sponsor">Sponsor</option>
                        <option value="Creative Income">Creative Income</option>
                        <option value="Competition">Competition</option>
                        <option value="Event">Event</option>
                        <option value="Corporate Administration">Corporate Administration</option>
                        <option value="Human Relation">Human Relation</option>
                        <option value="Creative Marketing">Creative Marketing</option>
                        <option value="External Relation">External Relation</option>
                        <option value="Social Media Specialist">Social Media Specialist</option>
                    </select>
                </div>

                <!-- Reason Second Choice -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]" for="second_choice_reason">Reason for Your Second Division Choice *</label>
                    <textarea 
                        id="second_choice_reason" 
                        name="second_choice_reason" 
                        rows="4" 
                        required 
                        placeholder="Explain why you choose this division as your second choice..."
                        class="w-full rounded-xl px-4 py-3 text-sm border"
                    ></textarea>
                </div>

                <!-- Portfolio (optional) -->
                <div class="space-y-1.5 text-left sm:col-span-2">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#af8a3c]">Portfolio (For Creative Media Applicants Only)</label>
                    <div class="relative group border border-dashed border-slate-300 hover:border-[#af8a3c]/50 rounded-xl p-4 transition-all duration-300 bg-white flex flex-col items-center justify-center cursor-pointer">
                        <input 
                            type="file" 
                            name="portfolio" 
                            onchange="handleFileChange(this)"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10"
                        >
                        <div class="file-upload-default flex flex-col items-center justify-center pointer-events-none w-full">
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-[#af8a3c] transition-colors mb-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 0A7.5 7.5 0 115.636 18.364m9.9-9.9l-5.656 5.656m0 0l-3.536 3.536m3.536-3.536L15 5.636M9 18.364l-3.536-3.536" />
                            </svg>
                            <span class="text-xs text-slate-500 font-semibold group-hover:text-[#af8a3c] transition-colors text-center">Click to select portfolio</span>
                            <span class="file-name text-[10px] text-slate-400 mt-1 font-mono text-center">No file chosen</span>
                        </div>
                        <div class="file-upload-preview hidden w-full z-20 flex flex-col gap-2"></div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4 relative z-10">
                <button 
                    id="submit-btn"
                    type="submit" 
                    class="w-full py-4 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-[0.98] transition-all duration-300 shadow-lg shadow-[#af8a3c]/15"
                >
                    Submit Application
                </button>
            </div>
        </form>
    </main>

    <!-- Success Modal Popup -->
    <div id="success-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md hidden transition-all duration-300">
        <div class="glassmorphism border-2 border-[#af8a3c] max-w-xl w-full p-8 rounded-3xl text-center space-y-6 shadow-2xl relative glow-gold">
            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/5 to-transparent opacity-30 pointer-events-none rounded-3xl"></div>
            
            <!-- Logo Stock Summit -->
            <img src="{{ asset('images/stock_summit_logo.png') }}" alt="Stock Summit Logo" class="h-16 w-auto mx-auto relative z-10">

            <div class="w-16 h-16 rounded-full bg-emerald-500/10 text-emerald-400 flex items-center justify-center border border-emerald-500/30 mx-auto relative z-10">
                <!-- Checkmark Icon -->
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </div>
            
            <div class="space-y-4 relative z-10">
                <h3 class="font-outfit font-black text-2xl text-white uppercase tracking-wide">Thank You!</h3>
                <div class="text-sm text-slate-300 font-light leading-relaxed space-y-3">
                    <p>Thank you for taking the time to apply for the Staff position of Stock Summit 2026.</p>
                    <p>We truly appreciate your enthusiasm, passion, and commitment to joining us on this exciting journey.</p>
                    <p>Your application has been successfully recorded. We are excited about your potential and look forward to the energy and fresh ideas you will bring to our team.</p>
                    <p>Please stay tuned! We will contact you via <strong>Email</strong> or <strong>WhatsApp</strong> regarding the details of the next selection stage.</p>
                    <p class="font-bold text-[#af8a3c] font-outfit uppercase tracking-wider text-sm pt-2">Let's rise higher! 🚀</p>
                </div>
            </div>

            <button 
                onclick="closeModal()" 
                class="w-full py-3.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all duration-300 shadow-md shadow-[#af8a3c]/20 relative z-10"
            >
                Back to Summit
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-8 text-center text-xs text-slate-500 border-t border-slate-200 bg-white">
        <p>&copy; 2026 Stock Summit. All rights reserved.</p>
    </footer>

    <!-- Form Handler Script -->
    <script>
        // Parse the dates safely by splitting elements, preventing UTC timezone offset parsing issues in browser
        const parseDate = (str) => {
            const cleanStr = str.replace('T', ' ');
            const [datePart, timePart] = cleanStr.split(' ');
            const [year, month, day] = datePart.split('-').map(Number);
            const [hour, minute, second] = (timePart || '00:00:00').split(':').map(Number);
            return new Date(year, month - 1, day, hour, minute, second || 0);
        };
        const startDate = parseDate('{{ $registrationStartDate }}').getTime();
        const endDate = parseDate('{{ $registrationEndDate }}').getTime();

        const form = document.getElementById('oprec-form');
        const submitBtn = document.getElementById('submit-btn');
        const errorAlert = document.getElementById('error-alert');
        const errorList = document.getElementById('error-list');
        const successModal = document.getElementById('success-modal');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate that we are currently within the active registration period
            const nowTime = new Date().getTime();
            if (nowTime < startDate || nowTime >= endDate) {
                alert('Registration is currently closed.');
                return;
            }

            // Reset states
            errorAlert.classList.add('hidden');
            errorList.innerHTML = '';
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting Application...';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json().then(data => ({ status: response.status, body: data })))
            .then(res => {
                if (res.status === 200 && res.body.success) {
                    // Success! Show Success Modal
                    successModal.classList.remove('hidden');
                } else if (res.status === 422 && res.body.errors) {
                    // Validation Errors
                    res.body.errors.forEach(err => {
                        const li = document.createElement('li');
                        li.textContent = err;
                        errorList.appendChild(li);
                    });
                    errorAlert.classList.remove('hidden');
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } else {
                    // General Fail
                    const li = document.createElement('li');
                    li.textContent = res.body.message || 'An unexpected error occurred. Please try again.';
                    errorList.appendChild(li);
                    errorAlert.classList.remove('hidden');
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            })
            .catch(err => {
                const li = document.createElement('li');
                li.textContent = 'Connection error. Please check your internet connection.';
                errorList.appendChild(li);
                errorAlert.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Application';
            });
        });

        function closeModal() {
            window.location.href = "/";
        }

        let activeObjectUrls = new Map();
        let accumulatedFilesMap = new Map();

        function handleFileChange(input) {
            const container = input.closest('.group');
            const defaultEl = container.querySelector('.file-upload-default');
            const previewEl = container.querySelector('.file-upload-preview');
            
            // If it's a multiple input, we accumulate files
            if (input.multiple) {
                if (!accumulatedFilesMap.has(input)) {
                    accumulatedFilesMap.set(input, []);
                }
                let currentFiles = accumulatedFilesMap.get(input);
                
                // Add new files from input.files to our accumulated array
                if (input.files) {
                    Array.from(input.files).forEach(file => {
                        // Prevent duplicate files by checking name and size
                        const isDuplicate = currentFiles.some(f => f.name === file.name && f.size === file.size);
                        if (!isDuplicate) {
                            currentFiles.push(file);
                        }
                    });
                }
                
                // Limit to max 5 files as per controller validation
                if (currentFiles.length > 5) {
                    alert('You can upload a maximum of 5 files.');
                    currentFiles.splice(5);
                }
                
                // Update the input element's files property using DataTransfer
                const dt = new DataTransfer();
                currentFiles.forEach(file => dt.items.add(file));
                input.files = dt.files;
            }
            
            // Revoke previous URLs for this specific input
            if (activeObjectUrls.has(input)) {
                activeObjectUrls.get(input).forEach(url => URL.revokeObjectURL(url));
            }
            const urls = [];
            activeObjectUrls.set(input, urls);
            
            previewEl.innerHTML = '';
            
            // Determine the source list of files to display
            const filesToDisplay = input.multiple ? (accumulatedFilesMap.get(input) || []) : (input.files ? Array.from(input.files) : []);
            
            if (filesToDisplay.length > 0) {
                defaultEl.classList.add('hidden');
                previewEl.classList.remove('hidden');
                
                // Adjust input layout when file is chosen
                input.classList.remove('absolute', 'inset-0');
                input.classList.add('w-0', 'h-0', 'opacity-0');
                
                container.classList.remove('cursor-pointer');
                container.classList.add('cursor-default');
                
                // Render a container for cards and a "Add more files" button if multiple and files < 5
                const cardsWrapper = document.createElement('div');
                cardsWrapper.className = "flex flex-col gap-2 w-full";
                previewEl.appendChild(cardsWrapper);
                
                filesToDisplay.forEach((file, index) => {
                    const fileUrl = URL.createObjectURL(file);
                    urls.push(fileUrl);
                    
                    const card = document.createElement('div');
                    card.className = "flex items-center justify-between bg-slate-900/90 border border-slate-700/80 rounded-xl p-3 text-xs text-slate-300 relative z-20 w-full";
                    
                    // Icon based on type
                    let iconSvg = `
                        <svg class="w-5 h-5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    `;
                    if (file.type.startsWith('image/')) {
                        iconSvg = `
                            <svg class="w-5 h-5 text-[#af8a3c] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 00-1.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375 0 11-.75 0 .375 0 01.75 0z" />
                            </svg>
                        `;
                    }
                    
                    card.innerHTML = `
                        <div class="flex items-center gap-2.5 min-w-0 flex-1">
                            ${iconSvg}
                            <div class="flex flex-col min-w-0 text-left">
                                <span class="truncate font-mono font-semibold text-slate-200">${file.name}</span>
                                <span class="text-[10px] text-slate-500">${(file.size / 1024).toFixed(1)} KB</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 shrink-0 ml-2">
                            <a href="${fileUrl}" target="_blank" class="px-3 py-1.5 bg-slate-800 hover:bg-slate-700 text-[#af8a3c] border border-slate-700 rounded-lg font-semibold transition-all hover:scale-105 duration-200 flex items-center gap-1">
                                <span>View</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </a>
                            <button type="button" onclick="removeIndexedFile(event, this, ${index})" class="p-1.5 bg-slate-800 hover:bg-red-950/40 text-slate-400 hover:text-red-400 border border-slate-700 rounded-lg transition-all hover:scale-105 duration-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    `;
                    cardsWrapper.appendChild(card);
                });
                
                // Show add more button
                if (input.multiple && filesToDisplay.length < 5) {
                    const addMoreBtn = document.createElement('button');
                    addMoreBtn.type = "button";
                    addMoreBtn.className = "mt-2 w-full py-2 border border-dashed border-slate-700 hover:border-[#af8a3c]/50 rounded-lg text-xs text-slate-400 hover:text-[#af8a3c] transition-all duration-200 flex items-center justify-center gap-1.5 relative z-20";
                    addMoreBtn.innerHTML = `
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <span>Add more files (${filesToDisplay.length}/5)</span>
                    `;
                    addMoreBtn.onclick = (e) => {
                        e.stopPropagation();
                        input.value = '';
                        input.click();
                    };
                    previewEl.appendChild(addMoreBtn);
                }
            } else {
                defaultEl.classList.remove('hidden');
                previewEl.classList.add('hidden');
                
                input.classList.remove('w-0', 'h-0', 'opacity-0');
                input.classList.add('absolute', 'inset-0', 'opacity-0', 'cursor-pointer', 'z-10');
                
                container.classList.remove('cursor-default');
                container.classList.add('cursor-pointer');
            }
        }

        function removeIndexedFile(event, btn, index) {
            event.stopPropagation();
            event.preventDefault();
            const container = btn.closest('.group');
            const input = container.querySelector('input[type="file"]');
            
            if (input.multiple && accumulatedFilesMap.has(input)) {
                let currentFiles = accumulatedFilesMap.get(input);
                currentFiles.splice(index, 1);
                
                const dt = new DataTransfer();
                currentFiles.forEach(file => dt.items.add(file));
                input.files = dt.files;
            } else {
                input.value = '';
            }
            handleFileChange(input);
        }

        // Countdown Timer logic
        const titleEl = document.getElementById('countdown-title');
        const daysSpan = document.getElementById('countdown-days');
        const hoursSpan = document.getElementById('countdown-hours');
        const minutesSpan = document.getElementById('countdown-minutes');
        const secondsSpan = document.getElementById('countdown-seconds');

        const comingSoonEl = document.getElementById('countdown-coming-soon');
        const numbersEl = document.getElementById('countdown-numbers');

        function updateCountdown() {
            const now = new Date().getTime();

            if (now < startDate) {
                if (titleEl) titleEl.innerText = "Registration";
                if (comingSoonEl) comingSoonEl.classList.remove('hidden');
                if (numbersEl) numbersEl.classList.add('hidden');
                
                // Disable submit button
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Registration opens soon...';
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    submitBtn.classList.remove('hover:bg-[#cba14b]', 'active:scale-[0.98]');
                }
                return;
            } else {
                if (comingSoonEl) comingSoonEl.classList.add('hidden');
                if (numbersEl) numbersEl.classList.remove('hidden');
            }

            if (now >= endDate) {
                if (titleEl) titleEl.innerText = "Registration Closed";
                daysSpan.innerText = '00';
                hoursSpan.innerText = '00';
                minutesSpan.innerText = '00';
                secondsSpan.innerText = '00';

                // Disable submit button
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Registration Closed';
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    submitBtn.classList.remove('hover:bg-[#cba14b]', 'active:scale-[0.98]');
                }
                return;
            }

            if (titleEl) titleEl.innerText = "Registration Ends In";
            
            // Enable submit button
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Application';
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.add('hover:bg-[#cba14b]', 'active:scale-[0.98]');
            }

            const distance = endDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysSpan.innerText = days < 10 ? '0' + days : days;
            hoursSpan.innerText = hours < 10 ? '0' + hours : hours;
            minutesSpan.innerText = minutes < 10 ? '0' + minutes : minutes;
            secondsSpan.innerText = seconds < 10 ? '0' + seconds : seconds;
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
