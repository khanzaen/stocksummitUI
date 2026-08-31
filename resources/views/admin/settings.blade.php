@extends('layouts.admin')

@section('content')
<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h2 class="font-outfit font-bold text-2xl text-slate-800">Countdown Settings</h2>
        <p class="text-xs text-slate-500 mt-1">Configure live countdown deadlines for registration forms and the homepage hero widget</p>
    </div>
</div>

@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 text-sm font-semibold">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-600 text-sm">
        <h4 class="font-bold font-outfit uppercase tracking-wider mb-2">Please fix the following errors:</h4>
        <ul class="list-disc list-inside space-y-1 font-semibold">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-2xl">
    <div class="glass-card border border-slate-200 p-6 sm:p-8 rounded-3xl shadow-sm">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="space-y-6">
                <!-- Oprec Staff Section -->
                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-[#af8a3c] uppercase tracking-wider border-b border-slate-100 pb-2">Oprec Staff Registration Period</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label for="start_date" class="text-xs font-semibold text-slate-700">Start Date</label>
                            <input type="datetime-local" 
                                   id="start_date" 
                                   name="start_date" 
                                   required 
                                   value="{{ \Carbon\Carbon::parse($registrationStartDate)->format('Y-m-d\TH:i') }}"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 shadow-sm cursor-pointer bg-white">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="end_date" class="text-xs font-semibold text-slate-700">End Date (Deadline)</label>
                            <input type="datetime-local" 
                                   id="end_date" 
                                   name="end_date" 
                                   required 
                                   value="{{ \Carbon\Carbon::parse($registrationEndDate)->format('Y-m-d\TH:i') }}"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 shadow-sm cursor-pointer bg-white">
                        </div>
                    </div>
                </div>

                <!-- Competition Section -->
                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <h3 class="text-sm font-bold text-[#af8a3c] uppercase tracking-wider border-b border-slate-100 pb-2">Competition Registration Period</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label for="competition_start_date" class="text-xs font-semibold text-slate-700">Start Date</label>
                            <input type="datetime-local" 
                                   id="competition_start_date" 
                                   name="competition_start_date" 
                                   required 
                                   value="{{ \Carbon\Carbon::parse($competitionStartDate)->format('Y-m-d\TH:i') }}"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 shadow-sm cursor-pointer bg-white">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="competition_end_date" class="text-xs font-semibold text-slate-700">End Date (Deadline)</label>
                            <input type="datetime-local" 
                                   id="competition_end_date" 
                                   name="competition_end_date" 
                                   required 
                                   value="{{ \Carbon\Carbon::parse($competitionEndDate)->format('Y-m-d\TH:i') }}"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-800 text-sm focus:outline-none focus:border-[#af8a3c]/60 shadow-sm cursor-pointer bg-white">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4 border-t border-slate-100">
                <button type="submit" 
                        class="px-6 py-3 bg-[#af8a3c] hover:bg-[#cba14b] text-white rounded-xl text-xs sm:text-sm font-semibold shadow-sm transition-all hover:scale-[1.02] active:scale-100">
                    Save Configuration
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
