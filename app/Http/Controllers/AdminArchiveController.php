<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminArchiveController extends Controller
{
    /**
     * Display a listing of archives.
     */
    public function index()
    {
        $archives = Archive::orderBy('year', 'desc')->get();
        return view('admin.archives.index', compact('archives'));
    }

    /**
     * Show the form for creating a new archive.
     */
    public function create()
    {
        return view('admin.archives.create');
    }

    /**
     * Store a newly created archive in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => ['required', 'integer', 'unique:archives,year'],
            'title' => ['required', 'string'],
            'theme' => ['required', 'string'],
            'prize_pool' => ['required', 'string'],
            'participants_count' => ['required', 'string'],
            'universities_count' => ['required', 'string'],
            'hero_bg_image' => ['nullable', 'image', 'max:5120'],
            'winners_bg_image' => ['nullable', 'image', 'max:5120'],
            'judges_bg_image' => ['nullable', 'image', 'max:5120'],
            'speakers_bg_image' => ['nullable', 'image', 'max:5120'],
            'sponsors_image' => ['nullable', 'image', 'max:5120'],
            'media_partners_image' => ['nullable', 'image', 'max:5120'],
        ]);

        $data = $request->except(['winners', 'judges', 'speakers', 'gallery_images', 'committee']);

        // Upload backgrounds
        $data['hero_bg_image'] = $this->handleFileUpload($request->file('hero_bg_image'));
        $data['winners_bg_image'] = $this->handleFileUpload($request->file('winners_bg_image'));
        $data['judges_bg_image'] = $this->handleFileUpload($request->file('judges_bg_image'));
        $data['speakers_bg_image'] = $this->handleFileUpload($request->file('speakers_bg_image'));
        $data['sponsors_image'] = $this->handleFileUpload($request->file('sponsors_image'));
        $data['media_partners_image'] = $this->handleFileUpload($request->file('media_partners_image'));

        // Handle Winners
        $winnersData = $request->input('winners', []);
        $winners = [];
        foreach (['first', 'second', 'third'] as $place) {
            $winners[$place] = [
                'team_name' => $winnersData[$place]['team_name'] ?? '',
                'institution' => $winnersData[$place]['institution'] ?? '',
                'image' => $this->handleFileUpload($request->file("winners.{$place}.image"))
            ];
        }
        $data['winners'] = $winners;

        // Handle Judges
        $judges = [];
        if ($request->has('judges')) {
            foreach ($request->input('judges') as $index => $judge) {
                $photoPath = $this->handleFileUpload($request->file("judges.{$index}.image"));
                $judges[] = [
                    'name' => $judge['name'] ?? '',
                    'title' => $judge['title'] ?? '',
                    'company' => $judge['company'] ?? '',
                    'image' => $photoPath
                ];
            }
        }
        $data['judges'] = $judges;

        // Handle Speakers
        $speakers = [];
        if ($request->has('speakers')) {
            foreach ($request->input('speakers') as $index => $speaker) {
                $photoPath = $this->handleFileUpload($request->file("speakers.{$index}.image"));
                $speakers[] = [
                    'name' => $speaker['name'] ?? '',
                    'title' => $speaker['title'] ?? '',
                    'company' => $speaker['company'] ?? '',
                    'image' => $photoPath
                ];
            }
        }
        $data['speakers'] = $speakers;

        // Handle Gallery
        $gallery = [];
        if ($request->has('gallery')) {
            foreach ($request->input('gallery') as $index => $item) {
                $photoPath = $this->handleFileUpload($request->file("gallery.{$index}.image"));
                if ($photoPath || isset($item['caption'])) {
                    $gallery[] = [
                        'image' => $photoPath,
                        'caption' => $item['caption'] ?? ''
                    ];
                }
            }
        }
        $data['gallery_images'] = count($gallery) > 0 ? $gallery : null;

        // Handle Committee
        $committeeData = $request->input('committee', []);
        if (isset($committeeData['ceo']['name']) && !empty($committeeData['ceo']['name'])) {
            $officers = [];
            if (isset($committeeData['officers'])) {
                foreach ($committeeData['officers'] as $officer) {
                    if (!empty($officer['name'])) {
                        $officers[] = [
                            'name' => $officer['name'],
                            'role' => $officer['role'] ?? ''
                        ];
                    }
                }
            }
            $data['committee'] = [
                'ceo' => [
                    'name' => $committeeData['ceo']['name'],
                    'role' => 'CEO'
                ],
                'officers' => $officers
            ];
        } else {
            $data['committee'] = null;
        }

        Archive::create($data);

        return redirect()->route('admin.archives.index')->with('success', 'Archive created successfully.');
    }

    /**
     * Show form to edit an archive.
     */
    public function edit(Archive $archive)
    {
        return view('admin.archives.edit', compact('archive'));
    }

    /**
     * Update an archive in database.
     */
    public function update(Request $request, Archive $archive)
    {
        $request->validate([
            'year' => ['required', 'integer', 'unique:archives,year,' . $archive->id],
            'title' => ['required', 'string'],
            'theme' => ['required', 'string'],
            'prize_pool' => ['required', 'string'],
            'participants_count' => ['required', 'string'],
            'universities_count' => ['required', 'string'],
            'hero_bg_image' => ['nullable', 'image', 'max:5120'],
            'winners_bg_image' => ['nullable', 'image', 'max:5120'],
            'judges_bg_image' => ['nullable', 'image', 'max:5120'],
            'speakers_bg_image' => ['nullable', 'image', 'max:5120'],
            'sponsors_image' => ['nullable', 'image', 'max:5120'],
            'media_partners_image' => ['nullable', 'image', 'max:5120'],
        ]);

        $data = $request->except(['winners', 'judges', 'speakers', 'gallery_images', 'committee']);

        // Update backgrounds if new files are uploaded
        $data['hero_bg_image'] = $request->hasFile('hero_bg_image') 
            ? $this->handleFileUpload($request->file('hero_bg_image')) 
            : $archive->hero_bg_image;

        $data['winners_bg_image'] = $request->hasFile('winners_bg_image') 
            ? $this->handleFileUpload($request->file('winners_bg_image')) 
            : $archive->winners_bg_image;

        $data['judges_bg_image'] = $request->hasFile('judges_bg_image') 
            ? $this->handleFileUpload($request->file('judges_bg_image')) 
            : $archive->judges_bg_image;

        $data['speakers_bg_image'] = $request->hasFile('speakers_bg_image') 
            ? $this->handleFileUpload($request->file('speakers_bg_image')) 
            : $archive->speakers_bg_image;

        $data['sponsors_image'] = $request->hasFile('sponsors_image') 
            ? $this->handleFileUpload($request->file('sponsors_image')) 
            : $archive->sponsors_image;

        $data['media_partners_image'] = $request->hasFile('media_partners_image') 
            ? $this->handleFileUpload($request->file('media_partners_image')) 
            : $archive->media_partners_image;

        // Handle Winners
        $winnersData = $request->input('winners', []);
        $winners = [];
        foreach (['first', 'second', 'third'] as $place) {
            $winners[$place] = [
                'team_name' => $winnersData[$place]['team_name'] ?? '',
                'institution' => $winnersData[$place]['institution'] ?? '',
                'image' => $request->hasFile("winners.{$place}.image")
                    ? $this->handleFileUpload($request->file("winners.{$place}.image"))
                    : ($winnersData[$place]['existing_image'] ?? null)
            ];
        }
        $data['winners'] = $winners;

        // Handle Judges
        $judges = [];
        if ($request->has('judges')) {
            foreach ($request->input('judges') as $index => $judge) {
                $photoPath = $request->hasFile("judges.{$index}.image")
                    ? $this->handleFileUpload($request->file("judges.{$index}.image"))
                    : ($judge['existing_image'] ?? null);
                $judges[] = [
                    'name' => $judge['name'] ?? '',
                    'title' => $judge['title'] ?? '',
                    'company' => $judge['company'] ?? '',
                    'image' => $photoPath
                ];
            }
        }
        $data['judges'] = $judges;

        // Handle Speakers
        $speakers = [];
        if ($request->has('speakers')) {
            foreach ($request->input('speakers') as $index => $speaker) {
                $photoPath = $request->hasFile("speakers.{$index}.image")
                    ? $this->handleFileUpload($request->file("speakers.{$index}.image"))
                    : ($speaker['existing_image'] ?? null);
                $speakers[] = [
                    'name' => $speaker['name'] ?? '',
                    'title' => $speaker['title'] ?? '',
                    'company' => $speaker['company'] ?? '',
                    'image' => $photoPath
                ];
            }
        }
        $data['speakers'] = $speakers;

        // Handle Gallery
        $gallery = [];
        if ($request->has('gallery')) {
            foreach ($request->input('gallery') as $index => $item) {
                $photoPath = $request->hasFile("gallery.{$index}.image")
                    ? $this->handleFileUpload($request->file("gallery.{$index}.image"))
                    : ($item['existing_image'] ?? null);
                if ($photoPath || isset($item['caption'])) {
                    $gallery[] = [
                        'image' => $photoPath,
                        'caption' => $item['caption'] ?? ''
                    ];
                }
            }
        }
        $data['gallery_images'] = count($gallery) > 0 ? $gallery : null;

        // Handle Committee
        $committeeData = $request->input('committee', []);
        if (isset($committeeData['ceo']['name']) && !empty($committeeData['ceo']['name'])) {
            $officers = [];
            if (isset($committeeData['officers'])) {
                foreach ($committeeData['officers'] as $officer) {
                    if (!empty($officer['name'])) {
                        $officers[] = [
                            'name' => $officer['name'],
                            'role' => $officer['role'] ?? ''
                        ];
                    }
                }
            }
            $data['committee'] = [
                'ceo' => [
                    'name' => $committeeData['ceo']['name'],
                    'role' => 'CEO'
                ],
                'officers' => $officers
            ];
        } else {
            $data['committee'] = null;
        }

        $archive->update($data);

        return redirect()->route('admin.archives.index')->with('success', 'Archive updated successfully.');
    }

    /**
     * Delete an archive.
     */
    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('admin.archives.index')->with('success', 'Archive deleted successfully.');
    }

    /**
     * Helper to upload files safely.
     */
    private function handleFileUpload($file, $folder = 'uploads')
    {
        if (!$file) return null;
        
        $destinationPath = public_path('images/' . $folder);
        
        // Ensure folder exists
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $filename);
        
        return 'images/' . $folder . '/' . $filename;
    }
}
