@extends('layouts.admin')

@section('title', 'Competition Teams')

@section('content')
<!-- Dashboard Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h2 class="font-outfit font-bold text-2xl text-slate-800">Competition Teams</h2>
        <p class="text-xs text-slate-500 mt-1">Review and verify registrations for Stock Summit 2026 Competition Track</p>
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
        <input type="text" id="search-input" placeholder="Search by team, leader, npm or university..." 
               class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 focus:ring-1 focus:ring-[#af8a3c]/60 transition-all placeholder-slate-400 shadow-sm">
    </div>
    
    <div class="flex flex-wrap gap-4 items-center w-full md:w-auto">
        <!-- Track Filter -->
        <select id="filter-track" class="w-full sm:w-48 px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 text-sm focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer shadow-sm">
            <option value="">All Tracks</option>
            <option value="Equity Research">Equity Research</option>
            <option value="Trading">Trading</option>
        </select>

        <!-- Status Filter -->
        <select id="filter-status" class="w-full sm:w-40 px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 text-sm focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer shadow-sm">
            <option value="">All Statuses</option>
            <option value="pending">Pending</option>
            <option value="verified">Verified</option>
            <option value="rejected">Rejected</option>
        </select>
    </div>
</div>

<!-- Registrations List Card -->
<div class="glass-card border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="registrations-table">
            <thead>
                <tr class="border-b border-slate-200 text-[10px] uppercase tracking-wider text-slate-500 bg-slate-50">
                    <th class="py-4 px-6 font-semibold">Team & Category</th>
                    <th class="py-4 px-6 font-semibold">University</th>
                    <th class="py-4 px-6 font-semibold">Leader & Contact</th>
                    <th class="py-4 px-6 font-semibold text-center">Status</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm">
                @forelse($registrations as $reg)
                    <tr class="registration-row hover:bg-slate-50 transition-colors" 
                        id="registration-row-{{ $reg->id }}"
                        data-team="{{ strtolower($reg->team_name) }}"
                        data-leader="{{ strtolower($reg->leader_name) }}"
                        data-npm="{{ strtolower($reg->leader_npm) }}"
                        data-university="{{ strtolower($reg->university) }}"
                        data-track="{{ $reg->track }}"
                        data-status="{{ $reg->status }}">
                        <td class="py-5 px-6">
                            <div class="font-semibold text-slate-800">{{ $reg->team_name }}</div>
                            <span class="inline-block px-2.5 py-0.5 mt-1 rounded-md text-[9px] font-bold uppercase tracking-wider
                                  {{ $reg->track === 'Equity Research' ? 'bg-amber-100 text-amber-700 border border-amber-200' : 'bg-blue-100 text-blue-700 border border-blue-200' }}">
                                {{ $reg->track }}
                            </span>
                        </td>
                        <td class="py-5 px-6">
                            <div class="text-slate-700 font-semibold">{{ $reg->university }}</div>
                        </td>
                        <td class="py-5 px-6">
                            <div class="text-slate-700 font-semibold">{{ $reg->leader_name }}</div>
                            <div class="text-xs text-slate-500 font-mono mt-0.5">{{ $reg->leader_email }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $reg->leader_whatsapp }}</div>
                        </td>
                        <td class="py-5 px-6 text-center">
                            <span id="badge-status-{{ $reg->id }}" 
                                  class="px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider border
                                  @if($reg->status === 'pending') bg-amber-500/10 text-amber-600 border-amber-500/20
                                  @elseif($reg->status === 'verified') bg-emerald-500/10 text-emerald-600 border-emerald-500/20
                                  @elseif($reg->status === 'rejected') bg-red-500/10 text-red-600 border-red-500/20
                                  @endif">
                                {{ $reg->status }}
                            </span>
                        </td>
                        <td class="py-5 px-6 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.registrations.show', $reg) }}" 
                                   class="btn-view-details text-xs text-[#af8a3c] hover:text-[#cba14b] px-3 py-2 rounded-lg border border-[#af8a3c]/20 hover:border-[#af8a3c]/50 transition-all font-semibold">
                                    View Details
                                </a>
                                <form action="{{ route('admin.registrations.destroy', $reg) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this team registration and all files?')" class="inline">
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
                            No registrations submitted yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Registration Detail Modal Popup -->
<div id="registration-detail-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md hidden transition-all duration-300">
    <div class="glass-card border-2 border-[#af8a3c] max-w-4xl w-full max-h-[85vh] overflow-y-auto rounded-3xl p-6 sm:p-8 space-y-6 shadow-2xl relative text-left">
        <!-- Close button -->
        <button id="close-modal-btn" class="absolute top-4 right-4 text-slate-400 hover:text-slate-800 transition-colors" aria-label="Close modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="border-b border-slate-200 pb-4">
            <h3 class="font-outfit font-black text-xl text-slate-800">Team Registration Details</h3>
            <p class="text-xs text-slate-500 mt-1" id="modal-submitted-at"></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Info Panel -->
            <div class="md:col-span-1 space-y-4">
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-4 text-sm">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Team Info</h4>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Team Name</span>
                        <p class="font-semibold text-slate-800 mt-0.5" id="modal-team-name"></p>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">Track Category</span>
                        <p class="text-slate-700 mt-0.5 font-bold" id="modal-track"></p>
                    </div>
                    <div>
                        <span class="text-[9px] uppercase font-bold text-slate-400 tracking-wider block">University</span>
                        <p class="text-slate-700 mt-0.5" id="modal-university"></p>
                    </div>
                    <div class="pt-3 border-t border-slate-200">
                        <span class="text-[9px] uppercase font-bold text-[#af8a3c] tracking-wider block">Registration Status</span>
                        <select id="modal-status-select" class="w-full mt-1.5 px-3 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-semibold focus:outline-none focus:border-[#af8a3c]/60 cursor-pointer">
                            <option value="pending">Pending</option>
                            <option value="verified">Verified</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>

                <!-- Proof Files Panel -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3 text-sm">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Proof of Payments & Follows</h4>
                    <a href="" id="modal-link-payment" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>Payment Receipt</span>
                        <span class="text-[9px] text-[#af8a3c] uppercase font-bold">Open &rarr;</span>
                    </a>
                    <a href="" id="modal-link-follow" target="_blank" class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-slate-200 hover:border-[#af8a3c]/30 text-xs text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-all font-semibold shadow-sm">
                        <span>Instagram Follow</span>
                        <span class="text-[9px] text-[#af8a3c] uppercase font-bold">Open &rarr;</span>
                    </a>
                    <div id="modal-no-follow" class="p-2.5 rounded-xl bg-slate-100 border border-slate-200 text-xs text-slate-500 font-semibold text-center italic hidden">
                        No IG Follow Proof
                    </div>
                </div>
            </div>

            <!-- Right Members Panel -->
            <div class="md:col-span-2 space-y-4">
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-4 text-sm">
                    <h4 class="font-outfit font-bold text-[#af8a3c] border-b border-slate-200 pb-2">Members Profile</h4>
                    
                    <!-- Leader Details Card -->
                    <div class="p-4 rounded-xl bg-white border border-slate-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                        <div>
                            <span class="px-2 py-0.5 rounded text-[8px] font-bold uppercase bg-amber-500/10 text-amber-600 border border-amber-500/20">Leader</span>
                            <h5 class="font-semibold text-slate-800 mt-1" id="modal-leader-name"></h5>
                            <p class="text-xs text-slate-500 mt-0.5" id="modal-leader-meta"></p>
                        </div>
                        <a href="" id="modal-link-leader-ktm" target="_blank" class="px-3 py-1.5 bg-slate-800 text-[#af8a3c] border border-slate-700 hover:bg-slate-700 rounded-lg text-xs font-semibold transition-all">
                            View KTM
                        </a>
                    </div>

                    <!-- Member 1 Details Card -->
                    <div id="modal-member1-card" class="p-4 rounded-xl bg-white border border-slate-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 hidden">
                        <div>
                            <span class="px-2 py-0.5 rounded text-[8px] font-bold uppercase bg-indigo-500/10 text-indigo-600 border border-indigo-500/20">Member 1</span>
                            <h5 class="font-semibold text-slate-800 mt-1" id="modal-member1-name"></h5>
                            <p class="text-xs text-slate-500 mt-0.5" id="modal-member1-meta"></p>
                        </div>
                        <a href="" id="modal-link-member1-ktm" target="_blank" class="px-3 py-1.5 bg-slate-800 text-[#af8a3c] border border-slate-700 hover:bg-slate-700 rounded-lg text-xs font-semibold transition-all">
                            View KTM
                        </a>
                    </div>

                    <!-- Member 2 Details Card -->
                    <div id="modal-member2-card" class="p-4 rounded-xl bg-white border border-slate-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 hidden">
                        <div>
                            <span class="px-2 py-0.5 rounded text-[8px] font-bold uppercase bg-emerald-500/10 text-emerald-600 border border-emerald-500/20">Member 2</span>
                            <h5 class="font-semibold text-slate-800 mt-1" id="modal-member2-name"></h5>
                            <p class="text-xs text-slate-500 mt-0.5" id="modal-member2-meta"></p>
                        </div>
                        <a href="" id="modal-link-member2-ktm" target="_blank" class="px-3 py-1.5 bg-slate-800 text-[#af8a3c] border border-slate-700 hover:bg-slate-700 rounded-lg text-xs font-semibold transition-all">
                            View KTM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('registration-detail-modal');
        const closeBtn = document.getElementById('close-modal-btn');
        const viewBtns = document.querySelectorAll('.btn-view-details');
        const statusSelect = document.getElementById('modal-status-select');
        let currentRegId = null;

        // Search & Filter elements
        const searchInput = document.getElementById('search-input');
        const filterTrack = document.getElementById('filter-track');
        const filterStatus = document.getElementById('filter-status');
        const rows = document.querySelectorAll('.registration-row');

        // Client-side filtering logic
        function filterRegistrations() {
            const searchQuery = searchInput.value.toLowerCase().trim();
            const selectedTrack = filterTrack.value;
            const selectedStatus = filterStatus.value;

            rows.forEach(row => {
                const team = row.getAttribute('data-team');
                const leader = row.getAttribute('data-leader');
                const npm = row.getAttribute('data-npm');
                const university = row.getAttribute('data-university');
                const track = row.getAttribute('data-track');
                const status = row.getAttribute('data-status');

                const matchesSearch = searchQuery === '' || 
                                      team.includes(searchQuery) || 
                                      leader.includes(searchQuery) || 
                                      npm.includes(searchQuery) ||
                                      university.includes(searchQuery);
                                      
                const matchesTrack = selectedTrack === '' || track === selectedTrack;
                const matchesStatus = selectedStatus === '' || status === selectedStatus;

                if (matchesSearch && matchesTrack && matchesStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterRegistrations);
        filterTrack.addEventListener('change', filterRegistrations);
        filterStatus.addEventListener('change', filterRegistrations);

        // Open details modal and fetch data
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
                    currentRegId = data.id;

                    // Populate modal fields
                    document.getElementById('modal-submitted-at').innerText = 'Submitted on: ' + new Date(data.created_at).toLocaleString('en-US', { month: 'short', day: 'numeric', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                    document.getElementById('modal-team-name').innerText = data.team_name;
                    document.getElementById('modal-track').innerText = data.track;
                    document.getElementById('modal-university').innerText = data.university;
                    statusSelect.value = data.status;

                    // Set Proof Attachments
                    document.getElementById('modal-link-payment').href = '/' + data.proof_payment;
                    
                    const followLink = document.getElementById('modal-link-follow');
                    const noFollowDiv = document.getElementById('modal-no-follow');
                    if (data.proof_follow) {
                        followLink.href = '/' + data.proof_follow;
                        followLink.classList.remove('hidden');
                        noFollowDiv.classList.add('hidden');
                    } else {
                        followLink.classList.add('hidden');
                        noFollowDiv.classList.remove('hidden');
                    }

                    // Leader Details
                    document.getElementById('modal-leader-name').innerText = data.leader_name;
                    document.getElementById('modal-leader-meta').innerHTML = `NPM: ${data.leader_npm} &bull; Email: ${data.leader_email} &bull; WA: ${data.leader_whatsapp}`;
                    document.getElementById('modal-link-leader-ktm').href = '/' + data.leader_ktm;

                    // Member 1
                    const member1Card = document.getElementById('modal-member1-card');
                    if (data.member1_name) {
                        document.getElementById('modal-member1-name').innerText = data.member1_name;
                        document.getElementById('modal-member1-meta').innerHTML = `NPM: ${data.member1_npm} &bull; Email: ${data.member1_email}`;
                        document.getElementById('modal-link-member1-ktm').href = '/' + data.member1_ktm;
                        member1Card.classList.remove('hidden');
                    } else {
                        member1Card.classList.add('hidden');
                    }

                    // Member 2
                    const member2Card = document.getElementById('modal-member2-card');
                    if (data.member2_name) {
                        document.getElementById('modal-member2-name').innerText = data.member2_name;
                        document.getElementById('modal-member2-meta').innerHTML = `NPM: ${data.member2_npm} &bull; Email: ${data.member2_email}`;
                        document.getElementById('modal-link-member2-ktm').href = '/' + data.member2_ktm;
                        member2Card.classList.remove('hidden');
                    } else {
                        member2Card.classList.add('hidden');
                    }

                    // Open Modal
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                })
                .catch(error => {
                    console.error('Error fetching details:', error);
                    alert('Failed to load details.');
                });
            });
        });

        // Update Status AJAX request
        statusSelect.addEventListener('change', function () {
            if (!currentRegId) return;
            const newStatus = this.value;
            const url = `/admin/registrations/${currentRegId}`;

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
                    const badge = document.getElementById(`badge-status-${currentRegId}`);
                    if (badge) {
                        badge.innerText = newStatus;
                        badge.className = 'px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider border';
                        if (newStatus === 'pending') {
                            badge.classList.add('bg-amber-500/10', 'text-amber-600', 'border-amber-500/20');
                        } else if (newStatus === 'verified') {
                            badge.classList.add('bg-emerald-500/10', 'text-emerald-600', 'border-emerald-500/20');
                        } else if (newStatus === 'rejected') {
                            badge.classList.add('bg-red-500/10', 'text-red-600', 'border-red-500/20');
                        }
                    }

                    const row = document.getElementById(`registration-row-${currentRegId}`);
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
            currentRegId = null;
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
