@extends('layouts.admin')

@section('title', 'Manage Archives')

@section('content')
<!-- Dashboard Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h2 class="font-outfit font-bold text-2xl text-white">Event Archives</h2>
        <p class="text-xs text-slate-400 mt-1">Create, edit and manage Stock Summit archives</p>
    </div>
    <div>
        <a href="{{ route('admin.archives.create') }}" 
           class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all text-sm shadow-md shadow-[#af8a3c]/10">
            + Add New Archive
        </a>
    </div>
</div>

@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm">
        {{ session('success') }}
    </div>
@endif

<!-- Archives List Card -->
<div class="glass-card border border-slate-800/80 rounded-2xl overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-800/80 text-[10px] uppercase tracking-wider text-slate-400 bg-slate-950/20">
                    <th class="py-4 px-6 font-semibold">Year</th>
                    <th class="py-4 px-6 font-semibold">Archive Title</th>
                    <th class="py-4 px-6 font-semibold">Stats Summary</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/50 text-sm">
                @forelse($archives as $archive)
                    <tr class="hover:bg-slate-900/20 transition-colors">
                        <td class="py-5 px-6 font-outfit font-bold text-[#af8a3c] text-lg">
                            {{ $archive->year }}
                        </td>
                        <td class="py-5 px-6">
                            <div class="font-semibold text-white">{{ $archive->title }}</div>
                            <div class="text-xs text-slate-400 truncate max-w-sm mt-0.5">{{ $archive->theme }}</div>
                        </td>
                        <td class="py-5 px-6 text-xs text-slate-300">
                            <div class="flex gap-4">
                                <div><span class="text-slate-500 uppercase font-semibold">Prize:</span> {{ $archive->prize_pool }}</div>
                                <div><span class="text-slate-500 uppercase font-semibold">Regs:</span> {{ $archive->participants_count }}</div>
                                <div><span class="text-slate-500 uppercase font-semibold">Univs:</span> {{ $archive->universities_count }}</div>
                            </div>
                        </td>
                        <td class="py-5 px-6 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="/archive/{{ $archive->year }}" target="_blank" 
                                   class="text-xs text-slate-400 hover:text-white px-2.5 py-1.5 rounded-lg border border-slate-800 hover:border-slate-700 transition-all">
                                    View
                                </a>
                                <a href="{{ route('admin.archives.edit', $archive) }}" 
                                   class="text-xs text-[#af8a3c] hover:text-[#cba14b] px-2.5 py-1.5 rounded-lg border border-[#af8a3c]/20 hover:border-[#af8a3c]/50 transition-all font-semibold">
                                    Edit
                                </a>
                                <form action="{{ route('admin.archives.destroy', $archive) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this archive?')" class="inline">
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
                        <td colspan="4" class="py-12 text-center text-slate-500">
                            No archive records found. Click "+ Add New Archive" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
