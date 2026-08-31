<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OprecController extends Controller
{
    /**
     * Show the recruitment application form.
     */
    public function showForm()
    {
        $registrationStartDate = Setting::where('key', 'registration_start_date')->value('value') ?? '2026-06-01 00:00:00';
        $registrationEndDate = Setting::where('key', 'registration_end_date')->value('value') ?? '2026-08-31 23:59:59';
        return view('oprec', compact('registrationStartDate', 'registrationEndDate'));
    }

    /**
     * Handle the recruitment application form submission.
     */
    public function submitForm(Request $request)
    {
        ini_set('memory_limit', '512M');
        set_time_limit(300);
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'npm' => 'required|string|max:50',
            'faculty' => 'required|string|max:255',
            'study_program' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|string|max:50',
            'siak_ng_screenshot' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
            'cv' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
            'instagram_follow' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
            'share_broadcast' => 'required|array|min:1|max:5',
            'share_broadcast.*' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
            'first_choice_division' => 'required|string|max:255',
            'first_choice_reason' => 'required|string',
            'second_choice_division' => 'required|string|max:255',
            'second_choice_reason' => 'required|string',
            'portfolio' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png,ppt,pptx,zip',
        ], [
            'share_broadcast.max' => 'You can upload a maximum of 5 files for Share Broadcast.',
            'share_broadcast.min' => 'You must upload at least 1 file for Share Broadcast.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Upload Directory
        $uploadPath = public_path('uploads/oprec');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Handle single files
        $siakNg = $request->file('siak_ng_screenshot');
        $cv = $request->file('cv');
        $ig = $request->file('instagram_follow');

        // Convert files to base64 BEFORE moving them to avoid "Path cannot be empty" error (since move() clears temporary path)
        $webhookUrl = env('GOOGLE_SHEET_WEBHOOK_URL');
        $siakNgBase64 = null;
        $cvBase64 = null;
        $igBase64 = null;
        $broadcastBase64Data = [];
        $portfolioBase64 = null;

        if (!empty($webhookUrl)) {
            try {
                $siakNgBase64 = 'data:' . $siakNg->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($siakNg->getRealPath()));
                $cvBase64 = 'data:' . $cv->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($cv->getRealPath()));
                $igBase64 = 'data:' . $ig->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($ig->getRealPath()));

                if ($request->hasFile('share_broadcast')) {
                    foreach ($request->file('share_broadcast') as $file) {
                        $broadcastBase64Data[] = [
                            'name' => $file->getClientOriginalName(),
                            'base64' => 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()))
                        ];
                    }
                }

                if ($request->hasFile('portfolio')) {
                    $portfolioFile = $request->file('portfolio');
                    $portfolioBase64 = 'data:' . $portfolioFile->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($portfolioFile->getRealPath()));
                }
            } catch (\Exception $e) {
                Log::error('Error encoding files to base64: ' . $e->getMessage());
            }
        }

        $siakNgName = time() . '_siak_' . uniqid() . '.' . $siakNg->getClientOriginalExtension();
        $siakNg->move($uploadPath, $siakNgName);
        $siakNgUrl = 'uploads/oprec/' . $siakNgName;

        $cvName = time() . '_cv_' . uniqid() . '.' . $cv->getClientOriginalExtension();
        $cv->move($uploadPath, $cvName);
        $cvUrl = 'uploads/oprec/' . $cvName;

        $igName = time() . '_ig_' . uniqid() . '.' . $ig->getClientOriginalExtension();
        $ig->move($uploadPath, $igName);
        $igUrl = 'uploads/oprec/' . $igName;

        // Handle multiple files for Share Broadcast
        $broadcastUrls = [];
        if ($request->hasFile('share_broadcast')) {
            foreach ($request->file('share_broadcast') as $index => $file) {
                $fileName = time() . '_bc_' . $index . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);
                $broadcastUrls[] = 'uploads/oprec/' . $fileName;
            }
        }

        // Handle optional portfolio
        $portfolioUrl = null;
        if ($request->hasFile('portfolio')) {
            $portfolio = $request->file('portfolio');
            $portfolioName = time() . '_portfolio_' . uniqid() . '.' . $portfolio->getClientOriginalExtension();
            $portfolio->move($uploadPath, $portfolioName);
            $portfolioUrl = 'uploads/oprec/' . $portfolioName;
        }

        // Save Applicant
        $applicant = Applicant::create([
            'full_name' => $request->full_name,
            'npm' => $request->npm,
            'faculty' => $request->faculty,
            'study_program' => $request->study_program,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'siak_ng_screenshot' => $siakNgUrl,
            'cv' => $cvUrl,
            'instagram_follow' => $igUrl,
            'share_broadcast' => $broadcastUrls,
            'first_choice_division' => $request->first_choice_division,
            'first_choice_reason' => $request->first_choice_reason,
            'second_choice_division' => $request->second_choice_division,
            'second_choice_reason' => $request->second_choice_reason,
            'portfolio' => $portfolioUrl,
        ]);

        // Send data to Google Sheets Webhook if configured
        if (!empty($webhookUrl)) {
            try {
                $response = Http::timeout(120)->post($webhookUrl, [
                    'full_name' => $applicant->full_name,
                    'npm' => $applicant->npm,
                    'faculty' => $applicant->faculty,
                    'study_program' => $applicant->study_program,
                    'email' => $applicant->email,
                    'whatsapp' => $applicant->whatsapp,
                    'siak_ng_screenshot_base64' => $siakNgBase64,
                    'siak_ng_screenshot_name' => $siakNg->getClientOriginalName(),
                    'siak_ng_screenshot_fallback' => url($siakNgUrl),
                    'cv_base64' => $cvBase64,
                    'cv_name' => $cv->getClientOriginalName(),
                    'cv_fallback' => url($cvUrl),
                    'instagram_follow_base64' => $igBase64,
                    'instagram_follow_name' => $ig->getClientOriginalName(),
                    'instagram_follow_fallback' => url($igUrl),
                    'share_broadcast_files' => $broadcastBase64Data,
                    'share_broadcast_fallbacks' => array_map(function ($path) {
                        return url($path);
                    }, $broadcastUrls),
                    'first_choice_division' => $applicant->first_choice_division,
                    'first_choice_reason' => $applicant->first_choice_reason,
                    'second_choice_division' => $applicant->second_choice_division,
                    'second_choice_reason' => $applicant->second_choice_reason,
                    'portfolio_base64' => $portfolioBase64,
                    'portfolio_name' => $request->hasFile('portfolio') ? $request->file('portfolio')->getClientOriginalName() : null,
                    'portfolio_fallback' => $portfolioUrl ? url($portfolioUrl) : null,
                ]);

                Log::info('Google Sheets Webhook Response Status: ' . $response->status());
                Log::info('Google Sheets Webhook Response Body: ' . $response->body());

                if ($response->failed()) {
                    Log::error('Google Sheets Webhook failed: ' . $response->body());
                } else {
                    $resJson = $response->json();
                    if (isset($resJson['result']) && $resJson['result'] === 'error') {
                        Log::error('Google Sheets Webhook internal error: ' . ($resJson['error'] ?? 'Unknown error'));
                    }
                }
            } catch (\Exception $e) {
                Log::error('Google Sheets Webhook error: ' . $e->getMessage());
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully.'
        ]);
    }
}
