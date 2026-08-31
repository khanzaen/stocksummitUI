<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stock Summit UI 2026 - Premium Stock Trading & Equity Research Competition</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- Tailwind CSS CDN Fallback/Integration -->
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
            /* Custom CSS Animations & Utilities */
            .glow-emerald {
                box-shadow: 0 0 40px -5px rgba(175, 138, 60, 0.2);
            }
            .glow-gold {
                box-shadow: 0 0 40px -5px rgba(175, 138, 60, 0.35);
            }
            .glow-purple {
                box-shadow: 0 0 40px -5px rgba(99, 102, 241, 0.15);
            }
            .glow-blue {
                box-shadow: 0 0 40px -5px rgba(79, 70, 229, 0.3);
            }
            .text-gradient-emerald-gold {
                background: linear-gradient(135deg, #ffffff 0%, #af8a3c 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .text-gradient-purple-blue {
                background: linear-gradient(135deg, #af8a3c 0%, #ffffff 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .glassmorphism {
                background: rgba(22, 26, 75, 0.45);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            html, body {
                overflow-x: hidden !important;
                max-width: 100vw;
                width: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body class="bg-[#10143d] text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-amber-500/30 selection:text-amber-200 min-h-screen relative w-full">
        
        <!-- Glowing background mesh grid -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#161a4f_1px,transparent_1px),linear-gradient(to_bottom,#161a4f_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-500/20 rounded-full blur-[120px]"></div>
            <div class="absolute top-[800px] left-0 w-[400px] h-[400px] bg-amber-500/10 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-[400px] right-10 w-[450px] h-[450px] bg-indigo-500/20 rounded-full blur-[110px]"></div>
        </div>

        {{-- Render modular components using Blade component notation --}}
        <x-navbar />
        <x-hero :competitionStartDate="$competitionStartDate" :competitionEndDate="$competitionEndDate" />
        <x-stats />
        <x-universities />
        <x-about />
        <x-tracks />
        <x-timeline />
        <x-eligibility />
        <x-faq />
        <x-archives />
        <x-contact />
        <x-register-cta />
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

            // Close mobile menu on clicking link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    burgerTop.classList.remove('transform', 'rotate-45', 'translate-y-[6px]');
                    burgerMid.classList.remove('opacity-0');
                    burgerBottom.classList.remove('transform', '-rotate-45', '-translate-y-[6px]');
                });
            });

            // Dynamic Countdown Timer
            const countdownDate = new Date('July 10, 2026 23:59:59').getTime();
            
            const timer = setInterval(() => {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                const d = Math.floor(distance / (1000 * 60 * 60 * 24));
                const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('days').innerHTML = String(d).padStart(2, '0');
                document.getElementById('hours').innerHTML = String(h).padStart(2, '0');
                document.getElementById('minutes').innerHTML = String(m).padStart(2, '0');
                document.getElementById('seconds').innerHTML = String(s).padStart(2, '0');

                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById('days').innerHTML = "00";
                    document.getElementById('hours').innerHTML = "00";
                    document.getElementById('minutes').innerHTML = "00";
                    document.getElementById('seconds').innerHTML = "00";
                }
            }, 1000);

            // FAQ toggle logic
            function toggleFaq(button) {
                const body = button.nextElementSibling;
                const svg = button.querySelector('svg');
                
                // Toggle open/close state
                if (body.style.maxHeight && body.style.maxHeight !== '0px') {
                    body.style.maxHeight = '0px';
                    svg.classList.remove('rotate-180');
                    button.parentElement.classList.remove('border-[#af8a3c]/50');
                } else {
                    // Close other open panels first
                    document.querySelectorAll('#faq .glassmorphism > div').forEach(el => {
                        el.style.maxHeight = '0px';
                        el.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                        el.parentElement.classList.remove('border-[#af8a3c]/50');
                    });
                    
                    body.style.maxHeight = body.scrollHeight + 'px';
                    svg.classList.add('rotate-180');
                    button.parentElement.classList.add('border-[#af8a3c]/50');
                }
            }
        </script>
    </body>
</html>
