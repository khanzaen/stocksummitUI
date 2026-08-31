<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') - Stock Summit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800;900&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Light Theme Inputs */
        input, textarea, select {
            background-color: #ffffff !important;
            border-color: #cbd5e1 !important;
            color: #0f172a !important;
        }
        input:focus, textarea:focus, select:focus {
            border-color: rgba(175, 138, 60, 0.8) !important;
            box-shadow: 0 0 0 1px rgba(175, 138, 60, 0.8) !important;
        }
    </style>
    @yield('styles')
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen relative overflow-x-hidden">

    <!-- Mobile Navigation Topbar -->
    <header class="md:hidden bg-[#0c0e2c] border-b border-slate-800 px-4 py-4 sticky top-0 z-40 flex items-center justify-between">
        <h1 class="font-outfit font-black text-lg uppercase tracking-wider text-white">
            STOCK SUMMIT <span class="text-[#af8a3c]">ADMIN</span>
        </h1>
        <button id="mobile-sidebar-toggle" class="p-2 text-slate-400 hover:text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    <!-- Sidebar Layout Container -->
    <div class="flex">
        <!-- Sidebar Navigation Drawer -->
        <aside id="sidebar" class="fixed top-0 bottom-0 left-0 z-50 w-64 bg-[#0c0e2c]/95 border-r border-slate-800/80 p-6 flex flex-col justify-between transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out md:block">
            <div class="space-y-8">
                <!-- Branding Header -->
                <div>
                    <h1 class="font-outfit font-black text-xl uppercase tracking-wider text-white">
                        STOCK SUMMIT <span class="text-[#af8a3c]">ADMIN</span>
                    </h1>
                    <p class="text-[10px] text-slate-500 font-semibold tracking-widest uppercase mt-1">Management Portal</p>
                </div>

                <!-- Navigation List -->
                <nav class="space-y-2">
                    <span class="text-[10px] uppercase font-bold text-slate-500 tracking-wider block mb-3">Navigation</span>



                    <a href="{{ route('admin.applicants.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.applicants.*') ? 'bg-[#af8a3c] text-[#10143d] shadow-md shadow-[#af8a3c]/10' : 'text-slate-400 hover:text-white hover:bg-slate-900/50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Oprec Applicants
                    </a>

                    <a href="{{ route('admin.registrations.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.registrations.*') ? 'bg-[#af8a3c] text-[#10143d] shadow-md shadow-[#af8a3c]/10' : 'text-slate-400 hover:text-white hover:bg-slate-900/50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Competition Teams
                    </a>

                    <a href="{{ route('admin.settings') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.settings*') ? 'bg-[#af8a3c] text-[#10143d] shadow-md shadow-[#af8a3c]/10' : 'text-slate-400 hover:text-white hover:bg-slate-900/50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Countdown Settings
                    </a>

                    <a href="/" target="_blank" 
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold text-slate-400 hover:text-white hover:bg-slate-900/50 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        View Main Website
                    </a>
                </nav>
            </div>

            <!-- Sidebar Bottom logout -->
            <div class="border-t border-slate-800/80 pt-4 flex flex-col gap-3">
                <div class="flex items-center gap-3 px-2">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center border border-[#af8a3c]/30 font-semibold text-xs text-white">
                        A
                    </div>
                    <div class="truncate">
                        <p class="text-xs font-bold text-white leading-tight">Admin User</p>
                        <p class="text-[10px] text-slate-500 truncate">admin@stocksummit.com</p>
                    </div>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" 
                            class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl text-xs font-bold border border-red-500/10 hover:border-red-500/30 bg-red-500/5 text-red-400 hover:text-red-300 transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Log Out
                    </button>
                </form>
            </div>
        </aside>

        <!-- Overlay backdrop for mobile side menu -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-slate-950/40 backdrop-blur-sm z-40 hidden transition-opacity duration-300"></div>

        <!-- Main Dynamic Panel Content -->
        <div class="flex-1 min-w-0 md:pl-64 min-h-screen">
            <div class="p-6 md:p-10">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Responsive Sidebar Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobile-sidebar-toggle');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const menuIcon = document.getElementById('menu-icon');

            if (toggle && sidebar && overlay) {
                let isOpen = false;

                function openSidebar() {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                    menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // Change to X icon
                    isOpen = true;
                }

                function closeSidebar() {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    menuIcon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Change back to hamburger
                    isOpen = false;
                }

                toggle.addEventListener('click', function (e) {
                    e.stopPropagation();
                    if (isOpen) {
                        closeSidebar();
                    } else {
                        openSidebar();
                    }
                });

                overlay.addEventListener('click', closeSidebar);
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape' && isOpen) closeSidebar();
                });
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
