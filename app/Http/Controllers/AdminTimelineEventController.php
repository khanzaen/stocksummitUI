<?php

namespace App\Http\Controllers;

use App\Models\TimelineEvent;
use Illuminate\Http\Request;

class AdminTimelineEventController extends Controller
{
    public function index()
    {
        $events = TimelineEvent::orderBy('order')->get();
        return view('admin.timeline.index', compact('events'));
    }

    public function create()
    {
        return view('admin.timeline.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'stage' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date_range' => 'required|string|max:255',
            'description' => 'required|string',
            'order' => 'required|integer',
        ]);

        $validated['is_final'] = $request->has('is_final');

        TimelineEvent::create($validated);

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline event created successfully.');
    }

    public function edit(TimelineEvent $timeline)
    {
        return view('admin.timeline.edit', compact('timeline'));
    }

    public function update(Request $request, TimelineEvent $timeline)
    {
        $validated = $request->validate([
            'stage' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date_range' => 'required|string|max:255',
            'description' => 'required|string',
            'order' => 'required|integer',
        ]);

        $validated['is_final'] = $request->has('is_final');

        $timeline->update($validated);

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline event updated successfully.');
    }

    public function destroy(TimelineEvent $timeline)
    {
        $timeline->delete();
        return redirect()->route('admin.timeline.index')->with('success', 'Timeline event deleted successfully.');
    }
}
