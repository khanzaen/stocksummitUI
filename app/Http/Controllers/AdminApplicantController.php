<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminApplicantController extends Controller
{
    /**
     * Display a listing of oprec applicants.
     */
    public function index()
    {
        $applicants = Applicant::latest()->get();
        return view('admin.applicants.index', compact('applicants'));
    }

    /**
     * Display details of a specific applicant.
     */
    public function show(Applicant $applicant)
    {
        if (request()->ajax()) {
            return response()->json($applicant);
        }
        return redirect()->route('admin.applicants.index');
    }

    /**
     * Update recruitment status of an applicant.
     */
    public function update(Request $request, Applicant $applicant)
    {
        $request->validate([
            'status' => 'required|in:pending,interview,accepted,rejected',
        ]);

        $applicant->update([
            'status' => $request->status,
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'status' => $applicant->status,
                'message' => 'Status updated successfully.'
            ]);
        }

        return redirect()->route('admin.applicants.index')->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified applicant from database.
     */
    public function destroy(Applicant $applicant)
    {
        // Delete files from storage
        $filesToDelete = [
            $applicant->siak_ng_screenshot,
            $applicant->cv,
            $applicant->instagram_follow,
            $applicant->portfolio
        ];

        foreach ($filesToDelete as $file) {
            if ($file && file_exists(public_path($file))) {
                @unlink(public_path($file));
            }
        }

        if (is_array($applicant->share_broadcast)) {
            foreach ($applicant->share_broadcast as $bcFile) {
                if ($bcFile && file_exists(public_path($bcFile))) {
                    @unlink(public_path($bcFile));
                }
            }
        }

        $applicant->delete();

        return redirect()->route('admin.applicants.index')->with('success', 'Applicant application deleted successfully.');
    }

    /**
     * Display the settings configuration page.
     */
    public function settings()
    {
        $registrationStartDate = Setting::where('key', 'registration_start_date')->value('value') ?? '2026-06-01 00:00:00';
        $registrationEndDate = Setting::where('key', 'registration_end_date')->value('value') ?? '2026-08-31 23:59:59';
        $competitionStartDate = Setting::where('key', 'competition_start_date')->value('value') ?? '2026-06-01 00:00:00';
        $competitionEndDate = Setting::where('key', 'competition_end_date')->value('value') ?? '2026-08-15 23:59:59';
        return view('admin.settings', compact('registrationStartDate', 'registrationEndDate', 'competitionStartDate', 'competitionEndDate'));
    }

    /**
     * Update settings keys.
     */
    public function updateSettings(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'competition_start_date' => 'required|date',
            'competition_end_date' => 'required|date|after_or_equal:competition_start_date',
        ]);

        Setting::updateOrCreate(
            ['key' => 'registration_start_date'],
            ['value' => $request->start_date]
        );

        Setting::updateOrCreate(
            ['key' => 'registration_end_date'],
            ['value' => $request->end_date]
        );

        Setting::updateOrCreate(
            ['key' => 'competition_start_date'],
            ['value' => $request->competition_start_date]
        );

        Setting::updateOrCreate(
            ['key' => 'competition_end_date'],
            ['value' => $request->competition_end_date]
        );

        return redirect()->route('admin.settings')->with('success', 'Countdown configuration updated successfully.');
    }
}
