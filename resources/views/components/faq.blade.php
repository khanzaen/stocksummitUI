<!-- FAQ Section -->
<section id="faq" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 space-y-16 relative overflow-hidden border-t border-[#af8a3c]/15">
    <!-- Ambient Glow behind FAQ -->
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

    <div class="text-center space-y-4">
        <h2 class="font-outfit font-extrabold text-[#af8a3c] text-sm tracking-wider uppercase">Got Questions?</h2>
        <h3 class="font-outfit font-black text-3xl sm:text-4xl text-white uppercase">Frequently Asked Questions</h3>
        <p class="text-slate-400 font-light">
            Find quick answers regarding rules, eligibility requirements, and teams.
        </p>
    </div>

    <!-- Accordion Grid -->
    <div class="space-y-4 relative z-10">
        @php
            $faqs = [
                [
                    'question' => 'Who is eligible to participate in Stock Summit 2026?',
                    'answer' => 'The competition is open to all undergraduate students (S1/D4/D3) from registered public or private higher education institutions globally.',
                ],
                [
                    'question' => 'Can team members come from different majors or universities?',
                    'answer' => 'Yes, team members can come from different departments/faculties. However, they must be registered undergraduate students of the same university. Cross-university teams are not allowed.',
                ],
                [
                    'question' => 'Is there a registration fee?',
                    'answer' => 'Yes, registration fees vary by competition track and period:<br><br>
                                 <strong class="text-[#af8a3c]">Equity Research Competition (ERC)</strong>
                                 <ul class="list-disc list-inside mt-1.5 space-y-1 pl-2 text-slate-300">
                                     <li>Early Bird: <span class="text-white font-medium">Rp 110,000</span></li>
                                     <li>Normal Batch 1: <span class="text-white font-medium">Rp 150,000</span></li>
                                     <li>Normal Batch 2: <span class="text-white font-medium">Rp 160,000</span></li>
                                     <li>Extended: <span class="text-white font-medium">Rp 180,000</span></li>
                                     <li>Re-registration (Daful): <span class="text-white font-medium">Rp 200,000</span></li>
                                 </ul><br>
                                 <strong class="text-[#af8a3c]">Trading Competition</strong>
                                 <ul class="list-disc list-inside mt-1.5 space-y-1 pl-2 text-slate-300">
                                     <li>Early Bird: <span class="text-white font-medium">Rp 55,000</span></li>
                                     <li>Normal Batch 1: <span class="text-white font-medium">Rp 65,000</span></li>
                                     <li>Normal Batch 2: <span class="text-white font-medium">Rp 75,000</span></li>
                                     <li>Extended: <span class="text-white font-medium">Rp 90,000</span></li>
                                 </ul>',
                ],
            ];
        @endphp
        @foreach($faqs as $faq)
        <div class="glassmorphism border border-slate-800/80 hover:border-[#af8a3c]/35 rounded-2xl overflow-hidden transition-all duration-300">
            <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group" onclick="toggleFaq(this)">
                <span class="font-outfit font-semibold text-white group-hover:text-[#af8a3c] transition-colors">{{ $faq['question'] }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="p-6 pt-0 border-t border-slate-800/80 text-slate-400 text-sm font-light leading-relaxed">
                    {!! $faq['answer'] !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
