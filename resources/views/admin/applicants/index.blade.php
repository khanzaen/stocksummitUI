@extends('layouts.admin')

@section('title', 'Oprec Applicants')

@section('content')
<!-- Dashboard Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h2 class="font-outfit font-bold text-2xl text-slate-800">Recruitment Applicants</h2>
        <p class="text-xs text-slate-500 mt-1">Review and manage Manager/Vice Manager applications for Stock Summit 2026</p>
    </div>
</div>

@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 text-sm font-semibold">
        {{ session('success') }}
    </div>
@endif

<!-- Search & Filter Controls -->
<div class="flex flex-col md:flex-row gap-4 mb-6 items-center justify-between w-full">
    <div class="flex-1 w-full max-w-md">
        <input type="text" id="search-input" placeholder="Search by name or NPM..." 
               class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 focus:ring-1 focus:ring-[#af8a3c]/60 transition-all placeholder-slate-400 shadow-sm">
    </div>
    
    <div class="flex flex-wrap gap-4 items-center w-full md:w-auto">
        <!-- Division Filter -->
        <select id="filter-division" class="w-full sm:w-48 px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 text-sm focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer shadow-sm">
            <option value="">All Divisions</option>
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

        <!-- Status Filter -->
        <select id="filter-status" class="w-full sm:w-40 px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 text-sm focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer shadow-sm">
            <option value="">All Statuses</option>
            <option value="pending">Pending</option>
            <option value="interview">Interview</option>
            <option value="accepted">Accepted</option>
            <option value="rejected">Rejected</option>
        </select>
    </div>
</div>

<!-- Applicants List Card -->
<div class="glass-card border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="applicants-table">
            <thead>
                <tr class="border-b border-slate-200 text-[10px] uppercase tracking-wider text-slate-500 bg-slate-50">
                    <th class="py-4 px-6 font-semibold">Name & Contact</th>
                    <th class="py-4 px-6 font-semibold">NPM</th>
                    <th class="py-4 px-6 font-semibold">Faculty / Study Program</th>
                    <th class="py-4 px-6 font-semibold">Division Choices</th>
                    <th class="py-4 px-6 font-semibold text-center">Status</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm">
                @forelse($applicants as $applicant)
                    <tr class="applicant-row hover:bg-slate-50 transition-colors" 
                        id="applicant-row-{{ $applicant->id }}"
                        data-name="{{ strtolower($applicant->full_name) }}"
                        data-npm="{{ strtolower($applicant->npm) }}"
                        data-division-1="{{ $applicant->first_choice_division }}"
                        data-division-2="{{ $applicant->second_choice_division }}"
                        data-status="{{ $applicant->status }}">
                        <td class="py-5 px-6">
                            <div class="font-semibold text-slate-800">{{ $applicant->full_name }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $applicant->email }}</div>
                            <div class="text-xs text-slate-500 font-mono mt-0.5">{{ $applicant->whatsapp }}</div>
                        </td>
                        <td class="py-5 px-6">
                            <div class="text-slate-700 font-semibold">{{ $applicant->npm }}</div>
                        </td>
                        <td class="py-5 px-6">
                            <div class="text-slate-700 font-medium truncate max-w-xs">{{ $applicant->faculty }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $applicant->study_program }}</div>
                        </td>
                        <td class="py-5 px-6 text-xs text-slate-600">
                            <div><span class="text-slate-400 font-semibold">1st:</span> {{ $applicant->first_choice_division }}</div>
                            <div class="mt-1"><span class="text-slate-400 font-semibold">2nd:</span> {{ $applicant->second_choice_division }}</div>
                        </td>
                        <td class="py-5 px-6 text-center">
                            <span id="badge-status-{{ $applicant->id }}" 
                                  class="px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider border
                                  @if($applicant->status === 'pending') bg-amber-500/10 text-amber-600 border-amber-500/20
                                  @elseif($applicant->status === 'interview') bg-indigo-500/10 text-indigo-600 border-indigo-500/20
                                  @elseif($applicant->status === 'accepted') bg-emerald-500/10 text-emerald-600 border-emerald-500/20
                                  @elseif($applicant->status === 'rejected') bg-red-500/10 text-red-600 border-red-500/20
                                  @endif">
                                {{ $applicant->status }}
                            </span>
                        </td>
                        <td class="py-5 px-6 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.applicants.show', $applicant) }}" 
                                   class="btn-view-details text-xs text-[#af8a3c] hover:text-[#cba14b] px-3 py-2 rounded-lg border border-[#af8a3c]/20 hover:border-[#af8a3c]/50 transition-all font-semibold">
                                    View Details
                                </a>
                                <form action="{{ route('admin.applicants.destroy', $applicant) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this applicant and all their uploaded files?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-xs text-red-400 hover:text-red-300 px-3 py-2 rounded-lg border border-red-500/10 hover:border-red-500/30 transition-all font-semibold">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-12 text-center text-slate-500">
                            No applications submitted yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Applicant Detail Modal Popup -->
<div id="applicant-detail-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md hidden transition-all duration-300">
    <div class="glass-card border-2 border-[#af8a3c] max-w-4xl w-full max-h-[85vh] overflow-y-auto rounded-3xl p-6 sm:p-8 space-y-6 shadow-2xl relative text-left">
        <!-- Close button -->
        <button id="close-modal-btn" class="absolute top-4 right-4 text-slate-400 hover:text-slate-800 transition-colors" aria-label="Close modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="border-b border-slate-200 pb-4">
            <h3 class="font-outfit font-black text-xl text-slate-800">Applicant Profile Details</h3>
            <p class="text-xs text-slate-500 mt-1" id="modal-submitted-at"></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Info Panel -->
            <div class="md:col-span-1 space-y-4">
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-4 text-sm">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Personal Data</h4>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Full Name</span>
                        <p class="font-semibold text-slate-800 mt-0.5" id="modal-full-name"></p>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">NPM</span>
                        <p class="text-slate-700 mt-0.5 font-mono" id="modal-npm"></p>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Faculty & Program</span>
                        <p class="text-slate-700 mt-0.5" id="modal-faculty-program"></p>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Email Address</span>
                        <a href="" id="modal-email" class="text-amber-600 hover:underline mt-0.5 block truncate"></a>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Contact (LINE / WA)</span>
                        <p class="text-slate-700 mt-0.5 font-semibold" id="modal-whatsapp"></p>
                    </div>
                    <div class="pt-3 border-t border-slate-200">
                        <span class="text-[9px] uppercase font-bold text-[#af8a3c] tracking-wider block">Recruitment Status</span>
                        <select id="modal-status-select" class="w-full mt-1.5 px-3 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-semibold focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer">
                            <option value="pending">Pending</option>
                            <option value="interview">Interview</option>
                            <option value="accepted">Accepted</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>

                <!-- Attachments list -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Attachments</h4>
                    <a href="" id="modal-link-siak" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>SIAK-NG Screen</span>
                        <span class="text-[9px] text-amber-600 uppercase font-bold">Open &rarr;</span>
                    </a>
                    <a href="" id="modal-link-cv" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>Curriculum Vitae</span>
                        <span class="text-[9px] text-amber-600 uppercase font-bold">Open &rarr;</span>
                    </a>
                    <a href="" id="modal-link-ig" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>Instagram Proof</span>
                        <span class="text-[9px] text-amber-600 uppercase font-bold">Open &rarr;</span>
                    </a>
                    <a href="" id="modal-link-portfolio" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>Portfolio File</span>
                        <span class="text-[9px] text-amber-600 uppercase font-bold">Open &rarr;</span>
                    </a>
                    <div id="modal-no-portfolio" class="p-2.5 rounded-xl bg-slate-100 border border-slate-200 text-xs text-slate-500 font-semibold text-center italic hidden">
                        No portfolio uploaded
                    </div>
                </div>
            </div>

            <!-- Right Motives Panel -->
            <div class="md:col-span-2 space-y-4">
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-4">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Motivations & Choices</h4>
                    <!-- First Choice -->
                    <div class="space-y-1">
                        <span class="inline-flex items-center text-xs font-semibold px-3 py-0.5 rounded-full bg-amber-500/10 text-amber-600 border border-amber-500/20" id="modal-choice-1">
                            First Choice:
                        </span>
                        <div class="p-4 rounded-xl bg-white border border-slate-200 text-slate-600 text-xs sm:text-sm font-light leading-relaxed whitespace-pre-line max-h-40 overflow-y-auto" id="modal-reason-1">
                        </div>
                    </div>
                    <!-- Second Choice -->
                    <div class="space-y-1">
                        <span class="inline-flex items-center text-xs font-semibold px-3 py-0.5 rounded-full bg-indigo-500/10 text-indigo-600 border border-indigo-500/20" id="modal-choice-2">
                            Second Choice:
                        </span>
                        <div class="p-4 rounded-xl bg-white border border-slate-200 text-slate-600 text-xs sm:text-sm font-light leading-relaxed whitespace-pre-line max-h-40 overflow-y-auto" id="modal-reason-2">
                        </div>
                    </div>
                </div>

                <!-- Broadcast Proofs -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Share Broadcast Proofs</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3" id="modal-broadcast-container">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('applicant-detail-modal');
        const closeBtn = document.getElementById('close-modal-btn');
        const viewBtns = document.querySelectorAll('.btn-view-details');
        const statusSelect = document.getElementById('modal-status-select');
        let currentApplicantId = null;

        // Search & Filter elements
        const searchInput = document.getElementById('search-input');
        const filterDivision = document.getElementById('filter-division');
        const filterStatus = document.getElementById('filter-status');
        const rows = document.querySelectorAll('.applicant-row');

        // Client-side filtering logic
        function filterApplicants() {
            const searchQuery = searchInput.value.toLowerCase().trim();
            const selectedDivision = filterDivision.value;
            const selectedStatus = filterStatus.value;

            rows.forEach(row => {
                const name = row.getAttribute('data-name');
                const npm = row.getAttribute('data-npm');
                const div1 = row.getAttribute('data-division-1');
                const div2 = row.getAttribute('data-division-2');
                const status = row.getAttribute('data-status');

                const matchesSearch = searchQuery === '' || name.includes(searchQuery) || npm.includes(searchQuery);
                const matchesDivision = selectedDivision === '' || div1 === selectedDivision || div2 === selectedDivision;
                const matchesStatus = selectedStatus === '' || status === selectedStatus;

                if (matchesSearch && matchesDivision && matchesStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterApplicants);
        filterDivision.addEventListener('change', filterApplicants);
        filterStatus.addEventListener('change', filterApplicants);

        // Open details modal and fetch applicant data
        viewBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const url = this.getAttribute('href');
                
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    currentApplicantId = data.id;

                    // Populate modal fields
                    document.getElementById('modal-submitted-at').innerText = 'Submitted on: ' + new Date(data.created_at).toLocaleString('en-US', { month: 'short', day: 'numeric', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                    document.getElementById('modal-full-name').innerText = data.full_name;
                    document.getElementById('modal-npm').innerText = data.npm;
                    document.getElementById('modal-faculty-program').innerText = data.faculty + ' / ' + data.study_program;
                    
                    const emailLink = document.getElementById('modal-email');
                    emailLink.href = 'mailto:' + data.email;
                    emailLink.innerText = data.email;
                    
                    document.getElementById('modal-whatsapp').innerText = data.whatsapp;
                    statusSelect.value = data.status;

                    // Set attachments hrefs
                    document.getElementById('modal-link-siak').href = '/' + data.siak_ng_screenshot;
                    document.getElementById('modal-link-cv').href = '/' + data.cv;
                    document.getElementById('modal-link-ig').href = '/' + data.instagram_follow;

                    const portfolioLink = document.getElementById('modal-link-portfolio');
                    const noPortfolioDiv = document.getElementById('modal-no-portfolio');
                    if (data.portfolio) {
                        portfolioLink.href = '/' + data.portfolio;
                        portfolioLink.classList.remove('hidden');
                        noPortfolioDiv.classList.add('hidden');
                    } else {
                        portfolioLink.classList.add('hidden');
                        noPortfolioDiv.classList.remove('hidden');
                    }

                    // Choices
                    document.getElementById('modal-choice-1').innerText = 'First Choice: ' + data.first_choice_division;
                    document.getElementById('modal-reason-1').innerText = data.first_choice_reason;

                    document.getElementById('modal-choice-2').innerText = 'Second Choice: ' + data.second_choice_division;
                    document.getElementById('modal-reason-2').innerText = data.second_choice_reason;

                    // Broadcasts
                    const broadcastContainer = document.getElementById('modal-broadcast-container');
                    broadcastContainer.innerHTML = '';
                    if (Array.isArray(data.share_broadcast) && data.share_broadcast.length > 0) {
                        data.share_broadcast.forEach((bcFile, index) => {
                            const a = document.createElement('a');
                            a.href = '/' + bcFile;
                            a.target = '_blank';
                            a.className = 'flex flex-col items-center justify-center p-3 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-center hover:scale-[1.02] active:scale-100 transition-all group shadow-sm';
                            a.innerHTML = `
                                <svg class="w-6 h-6 text-slate-400 group-hover:text-amber-500 transition-colors mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-[10px] text-slate-500 group-hover:text-slate-800 font-semibold">Proof #${index + 1}</span>
                                <span class="text-[8px] text-slate-400 group-hover:text-[#af8a3c] uppercase tracking-wider mt-0.5">View &rarr;</span>
                            `;
                            broadcastContainer.appendChild(a);
                        });
                    } else {
                        broadcastContainer.innerHTML = `
                            <div class="col-span-full p-4 rounded-xl bg-slate-100 border border-slate-200 text-xs text-slate-500 font-semibold text-center italic">
                                No broadcast proof uploaded
                            </div>
                        `;
                    }

                    // Open Modal
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                })
                .catch(error => {
                    console.error('Error fetching applicant details:', error);
                    alert('Failed to load applicant details.');
                });
            });
        });

        // Update Status AJAX request
        statusSelect.addEventListener('change', function () {
            if (!currentApplicantId) return;
            const newStatus = this.value;
            const url = `/admin/applicants/${currentApplicantId}`;

            fetch(url, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    status: newStatus
                })
            })
            .then(response => response.json())
            .then(res => {
                if (res.success) {
                    // Update badge status in the main table row
                    const badge = document.getElementById(`badge-status-${currentApplicantId}`);
                    if (badge) {
                        badge.innerText = newStatus;
                        
                        // Update badge classes
                        badge.className = 'px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider border';
                        if (newStatus === 'pending') {
                            badge.classList.add('bg-amber-500/10', 'text-amber-400', 'border-amber-500/20');
                        } else if (newStatus === 'interview') {
                            badge.classList.add('bg-indigo-500/10', 'text-indigo-400', 'border-indigo-500/20');
                        } else if (newStatus === 'accepted') {
                            badge.classList.add('bg-emerald-500/10', 'text-emerald-400', 'border-emerald-500/20');
                        } else if (newStatus === 'rejected') {
                            badge.classList.add('bg-red-500/10', 'text-red-400', 'border-red-500/20');
                        }
                    }

                    // Update row data attributes
                    const row = document.getElementById(`applicant-row-${currentApplicantId}`);
                    if (row) {
                        row.setAttribute('data-status', newStatus);
                    }
                } else {
                    alert('Failed to update status.');
                }
            })
            .catch(err => {
                console.error('Error updating status:', err);
                alert('Error updating status.');
            });
        });

        // Close Modal
        const closeModal = () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            currentApplicantId = null;
        };

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    });
</script>
@endsection
