<!-- Universities Section -->
<section id="universities" class="relative w-full py-20 md:py-28 overflow-hidden border-t border-[#af8a3c]/15 bg-[#10143d]">
    <!-- University Logos Consolidated Image set as TRANSPARENT background watermark (CSS Inverted for screen blend on blue) -->
    <div class="absolute inset-0 opacity-[0.06] md:opacity-[0.08] bg-center bg-[length:95%_auto] md:bg-[length:70%_auto] bg-no-repeat pointer-events-none" 
         style="background-image: url('{{ asset('images/participating_universities.png') }}'); filter: invert(1); mix-blend-mode: screen;"></div>
         
    <!-- Ambient glows -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#af8a3c]/5 rounded-full blur-[140px] -z-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
        <div class="text-center space-y-3">
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase">Previous Participants</p>
            <h2 class="font-outfit font-black text-2xl sm:text-3xl lg:text-4xl text-white uppercase">
                Past Participating Universities
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto font-light">
                Empowering bright minds from Indonesia's leading academic institutions across previous editions of Stock Summit.
            </p>
        </div>

        <!-- Dynamic Micro-Animation: University Marquee Tickers (Dual-container smooth loop on top of transparent watermark background) -->
        <div class="space-y-6 pt-4 max-w-5xl mx-auto">
            <!-- Row 1: Left to Right Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:1.5rem] [--speed:30s]">
                @php
                    $univs_left = [
                        'Universitas Indonesia', 'Universitas Gadjah Mada', 'Institut Teknologi Bandung',
                        'Universitas Prasetiya Mulya', 'Universitas Padjadjaran', 'Universitas Islam Indonesia',
                        'Universitas Andalas', 'Universitas Lampung', 'Universitas Sebelas Maret',
                        'Universitas Riau', 'BINUS University', 'Universitas Brawijaya',
                        'Universitas Pembangunan Nasional "Veteran"', 'Universitas Airlangga', 'Universitas Negeri Malang',
                        'Universitas Sumatera Utara', 'Universitas Hasanuddin', 'Universitas Trisakti',
                        'Universitas Pelita Harapan', 'Universitas Diponegoro'
                    ];
                @endphp
                <div class="flex shrink-0 gap-4 min-w-full justify-around animate-marquee-left">
                    @foreach($univs_left as $univ)
                        <span class="font-outfit font-medium text-xs sm:text-sm text-[#af8a3c] bg-[#af8a3c]/5 backdrop-blur-sm border border-[#af8a3c]/20 px-5 py-2.5 rounded-full whitespace-nowrap hover:bg-[#af8a3c]/15 hover:border-[#af8a3c]/40 transition-all duration-300 hover:scale-105 cursor-default shadow-[0_0_15px_rgba(175,138,60,0.05)]">
                            {{ $univ }}
                        </span>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-4 min-w-full justify-around animate-marquee-left" aria-hidden="true">
                    @foreach($univs_left as $univ)
                        <span class="font-outfit font-medium text-xs sm:text-sm text-[#af8a3c] bg-[#af8a3c]/5 backdrop-blur-sm border border-[#af8a3c]/20 px-5 py-2.5 rounded-full whitespace-nowrap hover:bg-[#af8a3c]/15 hover:border-[#af8a3c]/40 transition-all duration-300 hover:scale-105 cursor-default shadow-[0_0_15px_rgba(175,138,60,0.05)]">
                            {{ $univ }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Row 2: Right to Left Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:1.5rem] [--speed:35s]">
                @php
                    $univs_right = [
                        'Institut Teknologi Sepuluh Nopember', 'IPB University', 'Universitas Pendidikan Indonesia',
                        'Universitas Negeri Yogyakarta', 'Universitas Negeri Semarang', 'Universitas Negeri Jakarta',
                        'Universitas Jenderal Soedirman', 'Universitas Negeri Surabaya', 'Universitas Sriwijaya',
                        'Universitas Syiah Kuala', 'Universitas Udayana', 'Universitas Mulawarman',
                        'Universitas Tadulako', 'Universitas Negeri Medan', 'Universitas Negeri Makassar',
                        'Telkom University', 'Universitas Katolik Atma Jaya', 'Universitas Ahmad Dahlan',
                        'Universitas Muhammadiyah Surakarta'
                    ];
                @endphp
                <div class="flex shrink-0 gap-4 min-w-full justify-around animate-marquee-right">
                    @foreach($univs_right as $univ)
                        <span class="font-outfit font-medium text-xs sm:text-sm text-[#af8a3c] bg-[#af8a3c]/5 backdrop-blur-sm border border-[#af8a3c]/20 px-5 py-2.5 rounded-full whitespace-nowrap hover:bg-[#af8a3c]/15 hover:border-[#af8a3c]/40 transition-all duration-300 hover:scale-105 cursor-default shadow-[0_0_15px_rgba(175,138,60,0.05)]">
                            {{ $univ }}
                        </span>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-4 min-w-full justify-around animate-marquee-right" aria-hidden="true">
                    @foreach($univs_right as $univ)
                        <span class="font-outfit font-medium text-xs sm:text-sm text-[#af8a3c] bg-[#af8a3c]/5 backdrop-blur-sm border border-[#af8a3c]/20 px-5 py-2.5 rounded-full whitespace-nowrap hover:bg-[#af8a3c]/15 hover:border-[#af8a3c]/40 transition-all duration-300 hover:scale-105 cursor-default shadow-[0_0_15px_rgba(175,138,60,0.05)]">
                            {{ $univ }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include keyframe animations directly for ease of Tailwind compilation -->
<style>
    @keyframes marquee-left {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-100%); }
    }
    @keyframes marquee-right {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(0%); }
    }
    .animate-marquee-left {
        animation: marquee-left var(--speed) linear infinite;
    }
    .animate-marquee-right {
        animation: marquee-right var(--speed) linear infinite;
    }
</style>
