@extends('layouts.admin')

@section('title', 'Add Timeline Event')

@section('content')
<div class="mb-8">
    <h2 class="font-outfit font-bold text-2xl text-white">Add Timeline Event</h2>
    <p class="text-xs text-slate-400 mt-1">Create a new milestone step for the chronological homepage timeline</p>
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

<form action="{{ route('admin.timeline.store') }}" method="POST" class="space-y-6 max-w-2xl">
    @csrf

    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="stage" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Stage Label</label>
                <input type="text" name="stage" id="stage" value="{{ old('stage') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. Stage 1">
            </div>

            <div class="space-y-2">
                <label for="title" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Event Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. Registration Period">
            </div>
        </div>

        <div class="space-y-2">
            <label for="date_range" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Date / Time Range</label>
            <input type="text" name="date_range" id="date_range" value="{{ old('date_range') }}" required
                   class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. June 01 - July 10, 2026">
        </div>

        <div class="space-y-2">
            <label for="description" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Brief Description</label>
            <textarea name="description" id="description" rows="4" required
                      class="w-full px-4 py-3 rounded-xl border text-sm" 
                      placeholder="e.g. Assemble your teams, upload transcript files, and settle administration fees..."></textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="order" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sort Order</label>
                <input type="number" name="order" id="order" value="{{ old('order', 0) }}" required
                       class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. 1">
                <p class="text-[10px] text-slate-500">Lower numbers appear first in the timeline.</p>
            </div>

            <div class="flex items-center pt-8">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_final" id="is_final" class="rounded border-slate-700 bg-slate-900 text-[#af8a3c] focus:ring-[#af8a3c]/30 w-5 h-5">
                    <span class="text-xs font-semibold text-slate-300">Highlight as Final Stage (Indigo Color)</span>
                </label>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.timeline.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-800 hover:border-slate-700 text-sm font-semibold transition-all">Cancel</a>
        <button type="submit" class="px-8 py-3.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all text-sm shadow-md shadow-[#af8a3c]/10">Save Event</button>
    </div>
</form>
@endsection
