<!-- Timeline Section -->
<section id="timeline" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 md:pt-12 pb-24 md:pb-32 space-y-16 relative overflow-hidden">
    <!-- Ambient Glow behind timeline -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[300px] bg-[#af8a3c]/5 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

    <!-- Left Floating Decorative Elements (Outside Grid) -->
    <!-- Rings -->
    <div class="absolute -left-12 top-1/3 w-40 h-40 border border-dashed border-[#af8a3c]/15 rounded-full animate-[spin_55s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-20 top-1/4 w-32 h-32 border border-dotted border-[#af8a3c]/10 rounded-full animate-[spin_35s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-28 top-1/2 w-24 h-24 border border-dashed border-[#af8a3c]/10 rounded-full animate-[spin_20s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-8 top-[15%] w-16 h-16 border border-dotted border-[#af8a3c]/15 rounded-full animate-[spin_40s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    
    <!-- Squares & Shapes -->
    <div class="absolute -left-6 top-1/2 w-6 h-6 border border-[#af8a3c]/25 rounded-md rotate-45 animate-pulse -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -left-16 bottom-1/3 w-4 h-4 border border-[#af8a3c]/20 rounded-md -rotate-12 animate-[pulse_3s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1.5s;"></div>
    
    <!-- Plus Signs -->
    <div class="absolute -left-16 top-10 font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>
    <div class="absolute -left-32 bottom-20 font-outfit text-[#af8a3c]/15 text-2xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 2s;">+</div>
    <div class="absolute -left-10 bottom-[10%] font-outfit text-[#af8a3c]/15 text-lg font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 0.5s;">+</div>
    <div class="absolute -left-24 top-[40%] font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>

    <!-- Right Floating Decorative Elements (Outside Grid) -->
    <!-- Rings -->
    <div class="absolute -right-16 bottom-1/3 w-48 h-48 border border-dashed border-[#af8a3c]/15 rounded-full animate-[spin_45s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-24 bottom-1/4 w-36 h-36 border border-dotted border-[#af8a3c]/10 rounded-full animate-[spin_25s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-32 bottom-1/2 w-28 h-28 border border-dashed border-[#af8a3c]/10 rounded-full animate-[spin_15s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-10 top-[25%] w-20 h-20 border border-dotted border-[#af8a3c]/15 rounded-full animate-[spin_30s_linear_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    
    <!-- Circles & Shapes -->
    <div class="absolute -right-8 bottom-1/2 w-8 h-8 border border-dashed border-[#af8a3c]/35 rounded-full animate-[pulse_4s_ease-in-out_infinite] -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-20 bottom-[15%] w-5 h-5 border border-dotted border-[#af8a3c]/20 rounded-full animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1s;"></div>
    
    <!-- Plus Signs -->
    <div class="absolute -right-12 top-20 font-outfit text-[#af8a3c]/20 text-2xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block"></div>
    <div class="absolute -right-28 bottom-10 font-outfit text-[#af8a3c]/15 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 1s;">+</div>
    <div class="absolute -right-16 top-[45%] font-outfit text-[#af8a3c]/15 text-lg font-bold animate-pulse -z-10 pointer-events-none hidden lg:block" style="animation-delay: 2.5s;">+</div>
    <div class="absolute -right-32 top-[10%] font-outfit text-[#af8a3c]/20 text-xl font-bold animate-pulse -z-10 pointer-events-none hidden lg:block">+</div>

    <div class="max-w-3xl mx-auto text-center space-y-4" data-aos="fade-up">
        <h2 class="font-outfit font-extrabold text-[#af8a3c] text-sm tracking-wider uppercase">Event Roadmap</h2>
        <h3 class="font-outfit font-black text-3xl sm:text-4xl text-white uppercase">Chronological Timeline</h3>
        <p class="text-slate-400 font-light">
            Follow key stages from initial setup through final defense. Set reminders for deadlines.
        </p>
    </div>

    <!-- Interactive Tab Switcher -->
    <div class="flex justify-center mt-8" data-aos="fade-up" data-aos-delay="100">
        <div class="relative flex p-1.5 bg-[#181d58]/60 backdrop-blur-md rounded-full border border-white/10 max-w-md w-full">
            <!-- Sliding Highlight indicator -->
            <div id="active-bg" class="absolute top-1.5 bottom-1.5 left-1.5 w-[calc(50%-6px)] bg-[#af8a3c] rounded-full transition-transform duration-300 ease-out shadow-lg shadow-[#af8a3c]/20 z-0"></div>
            
            <button onclick="switchTimeline('erc')" id="btn-erc" class="flex-1 py-2.5 text-center text-sm font-semibold font-outfit rounded-full text-white relative z-10 transition-colors duration-300">
                Equity Research (ERC)
            </button>
            <button onclick="switchTimeline('tc')" id="btn-tc" class="flex-1 py-2.5 text-center text-sm font-semibold font-outfit rounded-full text-slate-400 hover:text-white relative z-10 transition-colors duration-300">
                Trading Competition (TC)
            </button>
        </div>
    </div>

    @php
        $ercEvents = [
            [
                'stage' => 'Stage 1',
                'title' => 'Early Bird Registration',
                'date_range' => '1 - 7 September 2026',
                'description' => 'Register early to secure your slot in the Equity Research Competition at a discounted rate.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 2',
                'title' => '1st Batch Registration',
                'date_range' => '8 - 14 September 2026',
                'description' => 'First main registration phase for teams to submit their registration details.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 3',
                'title' => '2nd Batch Registration',
                'date_range' => '15 - 28 September 2026',
                'description' => 'Final registration phase for the Equity Research Competition.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 4',
                'title' => 'Submission Paper Deadline',
                'date_range' => '23 Oktober 2026',
                'description' => 'Deadline for submitting your comprehensive equity research report.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 5',
                'title' => 'Assessment Process',
                'date_range' => '24 Oktober - 5 November 2026',
                'description' => 'Rigorous evaluation and grading of all submitted papers by our panel of expert judges.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 6',
                'title' => 'Finalist Announcement',
                'date_range' => '6 November 2026',
                'description' => 'Official announcement of the top finalist teams selected to proceed to the presentation stage.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 7',
                'title' => 'Finalist Technical Meeting',
                'date_range' => '8 November 2026',
                'description' => 'Briefing session for all finalists regarding presentation rules and guidelines.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 8',
                'title' => 'Final Presentation',
                'date_range' => '20 November 2026',
                'description' => 'Finalist teams present their equity analysis and valuation reports live before the board of judges.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 9',
                'title' => 'Talkshow & Awarding',
                'date_range' => '21 November 2026',
                'description' => 'The grand finale featuring guest speakers and the announcement of the competition winners.',
                'is_final' => true,
            ],
        ];

        $tcEvents = [
            [
                'stage' => 'Stage 1',
                'title' => 'Early Bird Registration',
                'date_range' => '1 - 7 September 2026',
                'description' => 'Register early to get priority access to the trading platform at a discounted rate.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 2',
                'title' => '1st Batch Registration',
                'date_range' => '8 - 14 September 2026',
                'description' => 'First phase of registration for individual participants and teams.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 3',
                'title' => '2nd Batch Registration',
                'date_range' => '15 - 28 September 2026',
                'description' => 'Final call for registration. Get ready to trade on the virtual market.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 4',
                'title' => 'Technical Meeting',
                'date_range' => '8 Oktober 2026',
                'description' => 'Pre-competition briefing covering the rules of engagement, trading tools, and systems.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 5',
                'title' => 'Masa Perdagangan',
                'date_range' => '12 - 23 Oktober 2026',
                'description' => 'The active trading period where participants execute their strategies and build portfolios.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 6',
                'title' => 'Finalist Announcement',
                'date_range' => '1 November 2026',
                'description' => 'Announcement of the top performing traders based on final portfolio returns and strategy reports.',
                'is_final' => false,
            ],
            [
                'stage' => 'Stage 7',
                'title' => 'Talkshow & Awarding',
                'date_range' => '21 November 2026',
                'description' => 'Join the grand closing ceremony, key seminars, and final award distribution.',
                'is_final' => true,
            ],
        ];
    @endphp

    <!-- ERC Timeline Container -->
    <div id="timeline-erc" class="relative max-w-4xl mx-auto before:absolute before:inset-y-0 before:left-4 md:before:left-1/2 before:w-[2px] before:bg-[#af8a3c]/30 transition-all duration-300 ease-in-out opacity-100 transform translate-y-0">
        @foreach($ercEvents as $index => $event)
            @if($index % 2 === 0)
                <!-- Timeline Node Left -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-0 my-12 group">
                    <div class="absolute left-4 md:left-1/2 -translate-x-[7px] w-4 h-4 rounded-full {{ $event['is_final'] ? 'bg-indigo-400 shadow-indigo-500/50' : 'bg-[#af8a3c] shadow-[#af8a3c]/50' }} shadow-md border-4 border-[#10143d] z-10 transition-transform group-hover:scale-125"></div>
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-12 md:pl-0">
                        <span class="text-xs font-semibold {{ $event['is_final'] ? 'text-indigo-300 bg-indigo-500/10' : 'text-[#af8a3c] bg-[#af8a3c]/10' }} uppercase tracking-widest px-3 py-1 rounded-full">{{ $event['stage'] }}</span>
                        <h4 class="font-outfit font-bold text-lg text-white mt-2">{{ $event['title'] }}</h4>
                        <p class="text-xs text-[#af8a3c] mb-1 font-medium">{{ $event['date_range'] }}</p>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">{{ $event['description'] }}</p>
                    </div>
                    <div class="md:w-1/2 pl-12 hidden md:block"></div>
                </div>
            @else
                <!-- Timeline Node Right -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-0 my-12 group">
                    <div class="absolute left-4 md:left-1/2 -translate-x-[7px] w-4 h-4 rounded-full {{ $event['is_final'] ? 'bg-indigo-400 shadow-indigo-500/50' : 'bg-[#af8a3c] shadow-[#af8a3c]/50' }} shadow-md border-4 border-[#10143d] z-10 transition-transform group-hover:scale-125"></div>
                    <div class="md:w-1/2 pr-12 hidden md:block"></div>
                    <div class="md:w-1/2 md:pl-12 pl-12">
                        <span class="text-xs font-semibold {{ $event['is_final'] ? 'text-indigo-300 bg-indigo-500/10' : 'text-[#af8a3c] bg-[#af8a3c]/10' }} uppercase tracking-widest px-3 py-1 rounded-full">{{ $event['stage'] }}</span>
                        <h4 class="font-outfit font-bold text-lg text-white mt-2">{{ $event['title'] }}</h4>
                        <p class="text-xs text-[#af8a3c] mb-1 font-medium">{{ $event['date_range'] }}</p>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">{{ $event['description'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- TC Timeline Container (Hidden by default) -->
    <div id="timeline-tc" class="relative max-w-4xl mx-auto before:absolute before:inset-y-0 before:left-4 md:before:left-1/2 before:w-[2px] before:bg-[#af8a3c]/30 transition-all duration-300 ease-in-out opacity-0 transform translate-y-4 hidden">
        @foreach($tcEvents as $index => $event)
            @if($index % 2 === 0)
                <!-- Timeline Node Left -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-0 my-12 group">
                    <div class="absolute left-4 md:left-1/2 -translate-x-[7px] w-4 h-4 rounded-full {{ $event['is_final'] ? 'bg-indigo-400 shadow-indigo-500/50' : 'bg-[#af8a3c] shadow-[#af8a3c]/50' }} shadow-md border-4 border-[#10143d] z-10 transition-transform group-hover:scale-125"></div>
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-12 md:pl-0">
                        <span class="text-xs font-semibold {{ $event['is_final'] ? 'text-indigo-300 bg-indigo-500/10' : 'text-[#af8a3c] bg-[#af8a3c]/10' }} uppercase tracking-widest px-3 py-1 rounded-full">{{ $event['stage'] }}</span>
                        <h4 class="font-outfit font-bold text-lg text-white mt-2">{{ $event['title'] }}</h4>
                        <p class="text-xs text-[#af8a3c] mb-1 font-medium">{{ $event['date_range'] }}</p>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">{{ $event['description'] }}</p>
                    </div>
                    <div class="md:w-1/2 pl-12 hidden md:block"></div>
                </div>
            @else
                <!-- Timeline Node Right -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-0 my-12 group">
                    <div class="absolute left-4 md:left-1/2 -translate-x-[7px] w-4 h-4 rounded-full {{ $event['is_final'] ? 'bg-indigo-400 shadow-indigo-500/50' : 'bg-[#af8a3c] shadow-[#af8a3c]/50' }} shadow-md border-4 border-[#10143d] z-10 transition-transform group-hover:scale-125"></div>
                    <div class="md:w-1/2 pr-12 hidden md:block"></div>
                    <div class="md:w-1/2 md:pl-12 pl-12">
                        <span class="text-xs font-semibold {{ $event['is_final'] ? 'text-indigo-300 bg-indigo-500/10' : 'text-[#af8a3c] bg-[#af8a3c]/10' }} uppercase tracking-widest px-3 py-1 rounded-full">{{ $event['stage'] }}</span>
                        <h4 class="font-outfit font-bold text-lg text-white mt-2">{{ $event['title'] }}</h4>
                        <p class="text-xs text-[#af8a3c] mb-1 font-medium">{{ $event['date_range'] }}</p>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">{{ $event['description'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <script>
        function switchTimeline(type) {
            const btnErc = document.getElementById('btn-erc');
            const btnTc = document.getElementById('btn-tc');
            const timelineErc = document.getElementById('timeline-erc');
            const timelineTc = document.getElementById('timeline-tc');
            const activeBg = document.getElementById('active-bg');

            if (type === 'erc') {
                activeBg.style.transform = 'translateX(0)';
                btnErc.classList.add('text-white');
                btnErc.classList.remove('text-slate-400');
                btnTc.classList.add('text-slate-400');
                btnTc.classList.remove('text-white');

                timelineTc.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    timelineTc.classList.add('hidden');
                    timelineErc.classList.remove('hidden');
                    void timelineErc.offsetWidth; // Force layout reflow
                    timelineErc.classList.remove('opacity-0', 'translate-y-4');
                }, 300);
            } else {
                activeBg.style.transform = 'translateX(100%)';
                btnTc.classList.add('text-white');
                btnTc.classList.remove('text-slate-400');
                btnErc.classList.add('text-slate-400');
                btnErc.classList.remove('text-white');

                timelineErc.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    timelineErc.classList.add('hidden');
                    timelineTc.classList.remove('hidden');
                    void timelineTc.offsetWidth; // Force layout reflow
                    timelineTc.classList.remove('opacity-0', 'translate-y-4');
                }, 300);
            }
        }
    </script>
</section>
