<!-- Media Partners Section -->
<section id="media-partners" class="relative w-full py-20 md:py-28 overflow-hidden border-t border-[#af8a3c]/15 bg-[#10143d]">
    <!-- Ambient glows -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[350px] bg-[#af8a3c]/5 rounded-full blur-[140px] -z-10 pointer-events-none"></div>

    <!-- Decorative background elements -->
    <div class="absolute -left-16 top-1/3 w-40 h-40 border border-dashed border-[#af8a3c]/15 rounded-full animate-[spin_60s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-16 bottom-1/3 w-48 h-48 border border-dashed border-indigo-500/15 rounded-full animate-[spin_50s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
        <!-- Section Header -->
        <div class="text-center space-y-3" data-aos="fade-up">
            <p class="text-[#af8a3c] font-outfit font-bold tracking-[0.2em] text-xs uppercase">Official Network</p>
            <h2 class="font-outfit font-black text-2xl sm:text-3xl lg:text-4xl text-white uppercase">
                Media Partners
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto font-light">
                In collaboration with leading media publications and university investment communities.
            </p>
        </div>

        @php
            $row1_logos = [
                ['src' => 'images/media_partners/logo_tribunnews.png', 'alt' => 'Tribunnews.com'],
                ['src' => 'images/media_partners/logo_ibec.png', 'alt' => 'IBEC FEB UI'],
                ['src' => 'images/media_partners/logo_kspm_feb_ui.png', 'alt' => 'KSPM FEB UI'],
                ['src' => 'images/media_partners/logo_planet_lomba.png', 'alt' => 'Planet Lomba'],
                ['src' => 'images/media_partners/logo_kspm_unas.png', 'alt' => 'KSPM Universitas Nasional'],
                ['src' => 'images/media_partners/logo_lombain.png', 'alt' => 'Lomba.in'],
                ['src' => 'images/media_partners/logo_media_event.png', 'alt' => 'Media Event'],
                ['src' => 'images/media_partners/logo_banteng_lari.png', 'alt' => 'Banteng Lari'],
                ['src' => 'images/media_partners/logo_hmj_unsoed.png', 'alt' => 'HMJ Akuntansi UNSOED'],
            ];

            $row2_logos = [
                ['src' => 'images/media_partners/logo_ksep_itb.png', 'alt' => 'KSEP ITB'],
                ['src' => 'images/media_partners/logo_gis_uin.png', 'alt' => 'Galeri Investasi Syariah UIN Jakarta'],
                ['src' => 'images/media_partners/logo_himadiksi.png', 'alt' => 'HIMADIKSI'],
                ['src' => 'images/media_partners/logo_bpm_feb_unj.png', 'alt' => 'BPM FEB UNJ'],
                ['src' => 'images/media_partners/logo_himatika_upi.png', 'alt' => 'BEM Himatika UPI'],
                ['src' => 'images/media_partners/logo_partner_a.png', 'alt' => 'Partner'],
                ['src' => 'images/media_partners/logo_ikasslav.png', 'alt' => 'IKASSLAV'],
                ['src' => 'images/media_partners/logo_partner_k.png', 'alt' => 'Media Partner'],
            ];

            // Duplicate arrays for infinite seamless loop
            $marquee_row_1 = array_merge($row1_logos, $row1_logos, $row1_logos, $row1_logos);
            $marquee_row_2 = array_merge($row2_logos, $row2_logos, $row2_logos, $row2_logos);
        @endphp

        <!-- Marquee Containers with transparent logos -->
        <div class="space-y-8 max-w-6xl mx-auto [mask-image:linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]" data-aos="fade-up" data-aos-delay="150">
            
            <!-- Row 1: Left to Right Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:2rem] [--speed:60s]">
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-media-marquee-left">
                    @foreach($marquee_row_1 as $partner)
                        <div class="h-16 w-32 sm:h-20 sm:w-44 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group px-2">
                            <img src="{{ asset($partner['src']) }}" alt="{{ $partner['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300 drop-shadow-sm">
                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-media-marquee-left" aria-hidden="true">
                    @foreach($marquee_row_1 as $partner)
                        <div class="h-16 w-32 sm:h-20 sm:w-44 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group px-2">
                            <img src="{{ asset($partner['src']) }}" alt="{{ $partner['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300 drop-shadow-sm">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Row 2: Right to Left Marquee -->
            <div class="relative flex overflow-x-hidden w-full select-none [--gap:2rem] [--speed:60s]">
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-media-marquee-right">
                    @foreach($marquee_row_2 as $partner)
                        <div class="h-16 w-32 sm:h-20 sm:w-44 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group px-2">
                            <img src="{{ asset($partner['src']) }}" alt="{{ $partner['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300 drop-shadow-sm">
                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-8 min-w-full justify-around animate-media-marquee-right" aria-hidden="true">
                    @foreach($marquee_row_2 as $partner)
                        <div class="h-16 w-32 sm:h-20 sm:w-44 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-default group px-2">
                            <img src="{{ asset($partner['src']) }}" alt="{{ $partner['alt'] }}" class="max-h-full max-w-full object-contain opacity-80 hover:opacity-100 transition-all duration-300 drop-shadow-sm">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Animation Styles -->
<style>
    @keyframes media-marquee-left {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-100%); }
    }
    @keyframes media-marquee-right {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(0%); }
    }
    .animate-media-marquee-left {
        animation: media-marquee-left var(--speed, 60s) linear infinite;
    }
    .animate-media-marquee-right {
        animation: media-marquee-right var(--speed, 60s) linear infinite;
    }
</style>
