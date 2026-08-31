@extends('layouts.admin')

@section('title', 'Create Archive')

@section('content')
<div class="mb-8">
    <h2 class="font-outfit font-bold text-2xl text-white">Create Event Archive</h2>
    <p class="text-xs text-slate-400 mt-1">Configure details, upload background images, add winners, judges, speakers, and event committee members</p>
</div>

@if($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.archives.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf

    <!-- SECTION 1: Core Details -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <h3 class="font-outfit font-bold text-lg text-[#af8a3c] border-b border-slate-800 pb-3">1. Core Information</h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="space-y-2 col-span-1">
                <label for="year" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Archive Year</label>
                <input type="number" name="year" id="year" value="{{ old('year') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. 2026">
            </div>
            <div class="space-y-2 col-span-2">
                <label for="title" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Archive Page Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. Stock Summit 2026 Recap - CMSC UI">
            </div>
        </div>

        <div class="space-y-2">
            <label for="theme" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Tagline / Event Theme</label>
            <textarea name="theme" id="theme" rows="3" required
                      class="w-full px-4 py-3 rounded-xl border text-sm" 
                      placeholder='e.g. "Unlocking Investment Synergy: Fostering Sustainable Finance in the Digital Era"'></textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="space-y-2">
                <label for="prize_pool" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Prize Pool</label>
                <input type="text" name="prize_pool" id="prize_pool" value="{{ old('prize_pool') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. Rp 20M+">
            </div>
            <div class="space-y-2">
                <label for="participants_count" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Participants</label>
                <input type="text" name="participants_count" id="participants_count" value="{{ old('participants_count') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. 800+">
            </div>
            <div class="space-y-2">
                <label for="universities_count" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Universities</label>
                <input type="text" name="universities_count" id="universities_count" value="{{ old('universities_count') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. 35+">
            </div>
        </div>
    </div>

    <!-- SECTION 2: Image Assets -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <h3 class="font-outfit font-bold text-lg text-[#af8a3c] border-b border-slate-800 pb-3">2. Section Backgrounds & Images</h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Hero Background Image</label>
                <input type="file" name="hero_bg_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Winners Background Image</label>
                <input type="file" name="winners_bg_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Judges Background Image</label>
                <input type="file" name="judges_bg_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Speakers Background Image</label>
                <input type="file" name="speakers_bg_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Sponsors Card Image</label>
                <input type="file" name="sponsors_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Media Partners Image (Optional)</label>
                <input type="file" name="media_partners_image" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700">
            </div>
        </div>
    </div>

    <!-- SECTION 3: Winners -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <h3 class="font-outfit font-bold text-lg text-[#af8a3c] border-b border-slate-800 pb-3">3. Winners Details</h3>
        
        <!-- 1st Place -->
        <div class="p-5 rounded-2xl bg-amber-500/5 border border-amber-500/20 space-y-4">
            <h4 class="font-outfit font-bold text-sm text-amber-400 uppercase tracking-wide">Grand Champion (1st Place)</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">Team Name</label>
                    <input type="text" name="winners[first][team_name]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">University / Institution</label>
                    <input type="text" name="winners[first][institution]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] uppercase font-bold text-slate-400 block">Team Photo (Optional)</label>
                <input type="file" name="winners[first][image]" class="text-xs text-slate-400">
            </div>
        </div>

        <!-- 2nd Place -->
        <div class="p-5 rounded-2xl bg-slate-400/5 border border-slate-400/20 space-y-4">
            <h4 class="font-outfit font-bold text-sm text-slate-300 uppercase tracking-wide">2nd Place</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">Team Name</label>
                    <input type="text" name="winners[second][team_name]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">University / Institution</label>
                    <input type="text" name="winners[second][institution]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] uppercase font-bold text-slate-400 block">Team Photo (Optional)</label>
                <input type="file" name="winners[second][image]" class="text-xs text-slate-400">
            </div>
        </div>

        <!-- 3rd Place -->
        <div class="p-5 rounded-2xl bg-orange-700/5 border border-orange-700/20 space-y-4">
            <h4 class="font-outfit font-bold text-sm text-orange-400 uppercase tracking-wide">3rd Place</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">Team Name</label>
                    <input type="text" name="winners[third][team_name]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400">University / Institution</label>
                    <input type="text" name="winners[third][institution]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                </div>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] uppercase font-bold text-slate-400 block">Team Photo (Optional)</label>
                <input type="file" name="winners[third][image]" class="text-xs text-slate-400">
            </div>
        </div>
    </div>

    <!-- SECTION 4: Judges -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
            <h3 class="font-outfit font-bold text-lg text-[#af8a3c]">4. Keynote Judges</h3>
            <button type="button" onclick="addJudge()" class="text-xs font-semibold text-[#af8a3c] hover:underline">+ Add Judge</button>
        </div>
        <div id="judges-container" class="space-y-6">
            <!-- Dynamic Judge items inserted here -->
        </div>
    </div>

    <!-- SECTION 5: Speakers -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
            <h3 class="font-outfit font-bold text-lg text-[#af8a3c]">5. Keynote Speakers</h3>
            <button type="button" onclick="addSpeaker()" class="text-xs font-semibold text-[#af8a3c] hover:underline">+ Add Speaker</button>
        </div>
        <div id="speakers-container" class="space-y-6">
            <!-- Dynamic Speaker items inserted here -->
        </div>
    </div>

    <!-- SECTION 6: Event Gallery -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
            <h3 class="font-outfit font-bold text-lg text-[#af8a3c]">6. Event Gallery</h3>
            <button type="button" onclick="addGalleryItem()" class="text-xs font-semibold text-[#af8a3c] hover:underline">+ Add Photo</button>
        </div>
        <div id="gallery-container" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Dynamic Gallery items inserted here -->
        </div>
    </div>

    <!-- SECTION 7: Committee (Optional) -->
    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <h3 class="font-outfit font-bold text-lg text-[#af8a3c] border-b border-slate-800 pb-3">7. Organizing Committee (Optional)</h3>
        
        <div class="space-y-4">
            <div class="space-y-2">
                <label for="committee_ceo" class="text-xs font-semibold text-slate-400 uppercase tracking-wider block font-outfit">CEO Name</label>
                <input type="text" name="committee[ceo][name]" id="committee_ceo"
                       class="w-full px-4 py-3 rounded-xl border text-sm max-w-md" placeholder="e.g. Putri">
            </div>

            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider block font-outfit">Core Officers</label>
                    <button type="button" onclick="addOfficer()" class="text-[10px] font-bold text-[#af8a3c] hover:underline">+ Add Officer</button>
                </div>
                <div id="officers-container" class="space-y-3">
                    <!-- Dynamic Officer items inserted here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center justify-end gap-4">
        <a href="{{ route('admin.archives.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-800 hover:border-slate-700 text-sm font-semibold transition-all">Cancel</a>
        <button type="submit" class="px-8 py-3.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all text-sm shadow-md shadow-[#af8a3c]/10">Save Archive</button>
    </div>

</form>
@endsection

@section('scripts')
<!-- Dynamic Repeater JavaScript -->
<script>
    let judgeIndex = 0;
    let speakerIndex = 0;
    let galleryIndex = 0;
    let officerIndex = 0;

    function addJudge() {
        const container = document.getElementById('judges-container');
        const html = `
            <div class="p-5 rounded-2xl bg-slate-950/40 border border-slate-800/80 space-y-4 relative judge-item" id="judge-${judgeIndex}">
                <button type="button" onclick="document.getElementById('judge-${judgeIndex}').remove()" class="absolute top-4 right-4 text-xs text-red-400 hover:underline">Remove</button>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Name</label>
                        <input type="text" name="judges[${judgeIndex}][name]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Title</label>
                        <input type="text" name="judges[${judgeIndex}][title]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Company</label>
                        <input type="text" name="judges[${judgeIndex}][company]" required class="w-full px-3 py-2 rounded-lg text-sm border" placeholder="e.g. at Tokopedia">
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400 block">Photo Upload</label>
                    <input type="file" name="judges[${judgeIndex}][image]" required class="text-xs text-slate-400">
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        judgeIndex++;
    }

    function addSpeaker() {
        const container = document.getElementById('speakers-container');
        const html = `
            <div class="p-5 rounded-2xl bg-slate-950/40 border border-slate-800/80 space-y-4 relative speaker-item" id="speaker-${speakerIndex}">
                <button type="button" onclick="document.getElementById('speaker-${speakerIndex}').remove()" class="absolute top-4 right-4 text-xs text-red-400 hover:underline">Remove</button>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Name</label>
                        <input type="text" name="speakers[${speakerIndex}][name]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Title</label>
                        <input type="text" name="speakers[${speakerIndex}][title]" required class="w-full px-3 py-2 rounded-lg text-sm border">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase font-bold text-slate-400">Company</label>
                        <input type="text" name="speakers[${speakerIndex}][company]" class="w-full px-3 py-2 rounded-lg text-sm border" placeholder="e.g. at BNI Sekuritas">
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase font-bold text-slate-400 block">Photo Upload</label>
                    <input type="file" name="speakers[${speakerIndex}][image]" required class="text-xs text-slate-400">
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        speakerIndex++;
    }

    function addGalleryItem() {
        const container = document.getElementById('gallery-container');
        const html = `
            <div class="p-5 rounded-2xl bg-slate-950/40 border border-slate-800/80 space-y-4 relative gallery-item" id="gallery-${galleryIndex}">
                <button type="button" onclick="document.getElementById('gallery-${galleryIndex}').remove()" class="absolute top-4 right-4 text-xs text-red-400 hover:underline">Remove</button>
                <div class="space-y-2">
                    <label class="text-[10px] uppercase font-bold text-slate-400 block">Photo Upload</label>
                    <input type="file" name="gallery[${galleryIndex}][image]" required class="text-xs text-slate-400 block mb-2">
                    
                    <label class="text-[10px] uppercase font-bold text-slate-400 block">Caption</label>
                    <input type="text" name="gallery[${galleryIndex}][caption]" required class="w-full px-3 py-2 rounded-lg text-sm border" placeholder="e.g. Opening Ceremony">
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        galleryIndex++;
    }

    function addOfficer() {
        const container = document.getElementById('officers-container');
        const html = `
            <div class="flex items-center gap-3 officer-item" id="officer-${officerIndex}">
                <input type="text" name="committee[officers][${officerIndex}][name]" required class="px-3 py-2 rounded-lg text-sm border flex-1" placeholder="Officer Name (e.g. Muhammad Arsy)">
                <input type="text" name="committee[officers][${officerIndex}][role]" required class="px-3 py-2 rounded-lg text-sm border w-[150px] sm:w-[200px]" placeholder="Role (e.g. COO)">
                <button type="button" onclick="document.getElementById('officer-${officerIndex}').remove()" class="text-red-400 hover:text-red-300 text-xs font-semibold">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        officerIndex++;
    }

    // Initialize with one default item for each dynamic list to guide the user
    window.addEventListener('DOMContentLoaded', () => {
        addJudge();
        addSpeaker();
        addOfficer();
    });
</script>
@endsection
