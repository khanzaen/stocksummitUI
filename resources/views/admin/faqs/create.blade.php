@extends('layouts.admin')

@section('title', 'Add New FAQ')

@section('content')
<div class="mb-8">
    <h2 class="font-outfit font-bold text-2xl text-white">Add New FAQ</h2>
    <p class="text-xs text-slate-400 mt-1">Create a new question and answer block for the homepage FAQ accordion</p>
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

<form action="{{ route('admin.faqs.store') }}" method="POST" class="space-y-6 max-w-2xl">
    @csrf

    <div class="glass-card border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-xl space-y-6">
        <div class="space-y-2">
            <label for="question" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Question</label>
            <input type="text" name="question" id="question" value="{{ old('question') }}" required
                   class="w-full px-4 py-3 rounded-xl border text-sm" placeholder="e.g. Who is eligible to participate?">
        </div>

        <div class="space-y-2">
            <label for="answer" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Answer</label>
            <textarea name="answer" id="answer" rows="5" required
                      class="w-full px-4 py-3 rounded-xl border text-sm" 
                      placeholder="Enter the detailed answer content here..."></textarea>
        </div>

        <div class="space-y-2">
            <label for="order" class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sort Order</label>
            <input type="number" name="order" id="order" value="{{ old('order', 0) }}" required
                   class="w-full px-4 py-3 rounded-xl border text-sm max-w-xs" placeholder="e.g. 1">
            <p class="text-[10px] text-slate-500">Lower numbers appear first in the FAQ list.</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.faqs.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-800 hover:border-slate-700 text-sm font-semibold transition-all">Cancel</a>
        <button type="submit" class="px-8 py-3.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-95 transition-all text-sm shadow-md shadow-[#af8a3c]/10">Save FAQ</button>
    </div>
</form>
@endsection
