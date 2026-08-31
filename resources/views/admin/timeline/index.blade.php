@extends('layouts.admin')

@section('title', 'Manage Timeline')

@section('content')
<!-- Dashboard Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h2 class="font-outfit font-bold text-2xl text-white">Chronological Timeline Roadmap</h2>
        <p class="text-xs text-slate-400 mt-1">Manage roadmap milestones displayed on the homepage timeline</p>
    </div>
    <div>
        <a href="{{ route('admin.timeline.create') }}" 
           class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all text-sm shadow-md shadow-[#af8a3c]/10">
            + Add Timeline Event
        </a>
    </div>
</div>

@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm">
        {{ session('success') }}
    </div>
@endif

<!-- Timeline Events List Card -->
<div class="glass-card border border-slate-800/80 rounded-2xl overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-800/80 text-[10px] uppercase tracking-wider text-slate-400 bg-slate-950/20">
                    <th class="py-4 px-6 font-semibold w-20">Order</th>
                    <th class="py-4 px-6 font-semibold">Stage</th>
                    <th class="py-4 px-6 font-semibold">Title</th>
                    <th class="py-4 px-6 font-semibold">Date Range</th>
                    <th class="py-4 px-6 font-semibold">Highlights</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/50 text-sm">
                @forelse($events as $event)
                    <tr class="hover:bg-slate-900/20 transition-colors">
                        <td class="py-5 px-6 font-outfit font-bold text-[#af8a3c] text-base">
                            {{ $event->order }}
                        </td>
                        <td class="py-5 px-6">
                            <span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-full {{ $event->is_final ? 'bg-indigo-500/10 text-indigo-300 border border-indigo-500/20' : 'bg-amber-500/10 text-amber-300 border border-amber-500/20' }}">
                                {{ $event->stage }}
                            </span>
                        </td>
                        <td class="py-5 px-6 font-semibold text-white">
                            {{ $event->title }}
                        </td>
                        <td class="py-5 px-6 text-slate-300 font-mono text-xs">
                            {{ $event->date_range }}
                        </td>
                        <td class="py-5 px-6 text-slate-400 max-w-xs truncate">
                            {{ $event->description }}
                        </td>
                        <td class="py-5 px-6 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.timeline.edit', $event) }}" 
                                   class="text-xs text-[#af8a3c] hover:text-[#cba14b] px-2.5 py-1.5 rounded-lg border border-[#af8a3c]/20 hover:border-[#af8a3c]/50 transition-all font-semibold">
                                    Edit
                                </a>
                                <form action="{{ route('admin.timeline.destroy', $event) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this event milestone?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-xs text-red-400 hover:text-red-300 px-2.5 py-1.5 rounded-lg border border-red-500/10 hover:border-red-500/30 transition-all font-semibold">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-500">
                            No timeline milestones found. Click "+ Add Timeline Event" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
