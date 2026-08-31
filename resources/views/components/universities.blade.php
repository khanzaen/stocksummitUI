<!-- Universities Section -->
<section id="universities" class="relative w-full py-20 md:py-28 overflow-hidden border-t border-[#af8a3c]/15 bg-[#10143d]">
    <!-- University Logos Consolidated Image set as TRANSPARENT background watermark (CSS Inverted for screen blend on blue) -->
    {{-- <div class="absolute inset-0 opacity-[0.06] md:opacity-[0.08] bg-center bg-[length:95%_auto] md:bg-[length:70%_auto] bg-no-repeat pointer-events-none" 
         style="background-image: url('{{ asset('images/participating_universities.png') }}'); filter: invert(1); mix-blend-mode: screen;"></div> --}}
         
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

        <!-- Dynamic Micro-Animation: University Marquee Tickers (Dual-container smooth loop of logos) -->
        <div class="space-y-8 pt-4 max-w-4xl mx-auto">
            <!-- Row 1: Left to Right Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:2rem] [--speed:90s]">
                @php
                    $logos = [
                        ['src' => 'images/logo_ui.png', 'alt' => 'Universitas Indonesia'],
                        ['src' => 'images/logo_ugm.png', 'alt' => 'Universitas Gadjah Mada'],
                        ['src' => 'images/logo_itb.png', 'alt' => 'Institut Teknologi Bandung'],
                        ['src' => 'images/logo_unpad.png', 'alt' => 'Universitas Padjadjaran'],
                        ['src' => 'images/logo_undip.png', 'alt' => 'Universitas Diponegoro'],
                        ['src' => 'images/logo_ub.png', 'alt' => 'Universitas Brawijaya'],
                        ['src' => 'images/logo_uns.png', 'alt' => 'Universitas Sebelas Maret'],
                        ['src' => 'images/logo_telkom.png', 'alt' => 'Telkom University'],
                        ['src' => 'images/logo_prasmul.png', 'alt' => 'Universitas Prasetiya Mulya'],
                        ['src' => 'images/logo_trisakti.png', 'alt' => 'Universitas Trisakti'],
                        ['src' => 'images/logo_atmajaya.png', 'alt' => 'Universitas Katolik Indonesia Atma Jaya'],
                        ['src' => 'images/logo_ipb.png', 'alt' => 'Institut Pertanian Bogor'],
                        ['src' => 'images/logo_upi.png', 'alt' => 'Universitas Pendidikan Indonesia'],
                        ['src' => 'images/logo_uny.png', 'alt' => 'Universitas Negeri Yogyakarta'],
                        ['src' => 'images/logo_unnes.png', 'alt' => 'Universitas Negeri Semarang'],
                        ['src' => 'images/logo_unj.png', 'alt' => 'Universitas Negeri Jakarta'],
                        ['src' => 'images/logo_unsoed.png', 'alt' => 'Universitas Jenderal Soedirman'],
                        ['src' => 'images/logo_unesa.png', 'alt' => 'Universitas Negeri Surabaya'],
                        ['src' => 'images/logo_unsri.png', 'alt' => 'Universitas Sriwijaya'],
                        ['src' => 'images/logo_unhas.png', 'alt' => 'Universitas Hasanuddin'],
                        ['src' => 'images/logo_uph.png', 'alt' => 'Universitas Pelita Harapan']
                    ];
                    $scrolling_logos_left = array_merge($logos, $logos, $logos, $logos);
                @endphp
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-marquee-left">
                    @foreach($scrolling_logos_left as $logo)
                        <div class="h-16 w-24 sm:h-20 sm:w-32 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group">
                            <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300">
                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-marquee-left" aria-hidden="true">
                    @foreach($scrolling_logos_left as $logo)
                        <div class="h-16 w-24 sm:h-20 sm:w-32 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group">
                            <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Row 2: Right to Left Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:2rem] [--speed:100s]">
                @php
                    $scrolling_logos_right = array_merge(array_reverse($logos), array_reverse($logos), array_reverse($logos), array_reverse($logos));
                @endphp
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-marquee-right">
                    @foreach($scrolling_logos_right as $logo)
                        <div class="h-16 w-24 sm:h-20 sm:w-32 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group">
                            <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300">
                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-marquee-right" aria-hidden="true">
                    @foreach($scrolling_logos_right as $logo)
                        <div class="h-16 w-24 sm:h-20 sm:w-32 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group">
                            <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300">
                        </div>
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
