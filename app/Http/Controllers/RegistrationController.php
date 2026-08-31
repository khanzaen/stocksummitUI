<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    /**
     * Show the competition registration form.
     */
    public function showForm()
    {
        $competitionStartDate = Setting::where('key', 'competition_start_date')->value('value') ?? '2026-06-01 00:00:00';
        $competitionEndDate = Setting::where('key', 'competition_end_date')->value('value') ?? '2026-08-15 23:59:59';
        return view('register', compact('competitionStartDate', 'competitionEndDate'));
    }

    /**
     * Handle the competition registration form submission.
     */
    public function submitForm(Request $request)
    {
        ini_set('memory_limit', '512M');
        set_time_limit(300);
        $rules = [
            'team_name' => 'required|string|max:255',
            'track' => 'required|in:Equity Research,Trading',
            'university' => 'required|string|max:255',
            
            'leader_name' => 'required|string|max:255',
            'leader_npm' => 'required|string|max:50',
            'leader_email' => 'required|email|max:255',
            'leader_whatsapp' => 'required|string|max:50',
            'leader_ktm' => 'required|file|max:10240|mimes:pdf,jpg,jpeg,png',
            
            'proof_payment' => 'required|file|max:10240|mimes:pdf,jpg,jpeg,png',
            'proof_follow' => 'nullable|file|max:10240|mimes:pdf,jpg,jpeg,png',
        ];

        // Both ERC and Trading allow 1-3 members (Member 1 & 2 optional)
        $rules['member1_name'] = 'nullable|string|max:255';
        $rules['member1_npm'] = 'nullable|string|max:50';
        $rules['member1_email'] = 'nullable|email|max:255';
        $rules['member1_ktm'] = 'nullable|file|max:10240|mimes:pdf,jpg,jpeg,png';
        
        $rules['member2_name'] = 'nullable|string|max:255';
        $rules['member2_npm'] = 'nullable|string|max:50';
        $rules['member2_email'] = 'nullable|email|max:255';
        $rules['member2_ktm'] = 'nullable|file|max:10240|mimes:pdf,jpg,jpeg,png';

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Upload Directory
        $uploadPath = public_path('uploads/registrations');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Base64 encoding files for Google Sheets Webhook
        $webhookUrl = env('GOOGLE_SHEET_WEBHOOK_URL');
        $filesBase64 = [
            'leader_ktm' => null,
            'member1_ktm' => null,
            'member2_ktm' => null,
            'proof_payment' => null,
            'proof_follow' => null,
        ];

        if (!empty($webhookUrl)) {
            try {
                if ($request->hasFile('leader_ktm')) {
                    $file = $request->file('leader_ktm');
                    $filesBase64['leader_ktm'] = 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
                }
                if ($request->hasFile('member1_ktm')) {
                    $file = $request->file('member1_ktm');
                    $filesBase64['member1_ktm'] = 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
                }
                if ($request->hasFile('member2_ktm')) {
                    $file = $request->file('member2_ktm');
                    $filesBase64['member2_ktm'] = 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
                }
                if ($request->hasFile('proof_payment')) {
                    $file = $request->file('proof_payment');
                    $filesBase64['proof_payment'] = 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
                }
                if ($request->hasFile('proof_follow')) {
                    $file = $request->file('proof_follow');
                    $filesBase64['proof_follow'] = 'data:' . $file->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
                }
            } catch (\Exception $e) {
                Log::error('Error encoding registration files to base64: ' . $e->getMessage());
            }
        }

        // Moving files to local folder
        $urls = [];
        $fileFields = ['leader_ktm', 'member1_ktm', 'member2_ktm', 'proof_payment', 'proof_follow'];
        foreach ($fileFields as $field) {
            $urls[$field] = null;
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $fileName = time() . '_' . $field . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);
                $urls[$field] = 'uploads/registrations/' . $fileName;
            }
        }

        // Save Registration
        $registration = Registration::create([
            'team_name' => $request->team_name,
            'track' => $request->track,
            'university' => $request->university,
            
            'leader_name' => $request->leader_name,
            'leader_npm' => $request->leader_npm,
            'leader_email' => $request->leader_email,
            'leader_whatsapp' => $request->leader_whatsapp,
            'leader_ktm' => $urls['leader_ktm'],
            
            'member1_name' => $request->member1_name,
            'member1_npm' => $request->member1_npm,
            'member1_email' => $request->member1_email,
            'member1_ktm' => $urls['member1_ktm'],
            
            'member2_name' => $request->member2_name,
            'member2_npm' => $request->member2_npm,
            'member2_email' => $request->member2_email,
            'member2_ktm' => $urls['member2_ktm'],
            
            'proof_payment' => $urls['proof_payment'],
            'proof_follow' => $urls['proof_follow'],
            'status' => 'pending',
        ]);

        // Send data to Google Sheets Webhook
        if (!empty($webhookUrl)) {
            try {
                $response = Http::timeout(120)->post($webhookUrl, [
                    'form_type' => 'competition',
                    'team_name' => $registration->team_name,
                    'track' => $registration->track,
                    'university' => $registration->university,
                    
                    'leader_name' => $registration->leader_name,
                    'leader_npm' => $registration->leader_npm,
                    'leader_email' => $registration->leader_email,
                    'leader_whatsapp' => $registration->leader_whatsapp,
                    'leader_ktm_base64' => $filesBase64['leader_ktm'],
                    'leader_ktm_name' => $request->file('leader_ktm')->getClientOriginalName(),
                    'leader_ktm_fallback' => url($urls['leader_ktm']),
                    
                    'member1_name' => $registration->member1_name,
                    'member1_npm' => $registration->member1_npm,
                    'member1_email' => $registration->member1_email,
                    'member1_ktm_base64' => $filesBase64['member1_ktm'],
                    'member1_ktm_name' => $request->hasFile('member1_ktm') ? $request->file('member1_ktm')->getClientOriginalName() : null,
                    'member1_ktm_fallback' => $urls['member1_ktm'] ? url($urls['member1_ktm']) : null,
                    
                    'member2_name' => $registration->member2_name,
                    'member2_npm' => $registration->member2_npm,
                    'member2_email' => $registration->member2_email,
                    'member2_ktm_base64' => $filesBase64['member2_ktm'],
                    'member2_ktm_name' => $request->hasFile('member2_ktm') ? $request->file('member2_ktm')->getClientOriginalName() : null,
                    'member2_ktm_fallback' => $urls['member2_ktm'] ? url($urls['member2_ktm']) : null,
                    
                    'proof_payment_base64' => $filesBase64['proof_payment'],
                    'proof_payment_name' => $request->file('proof_payment')->getClientOriginalName(),
                    'proof_payment_fallback' => url($urls['proof_payment']),
                    
                    'proof_follow_base64' => $filesBase64['proof_follow'],
                    'proof_follow_name' => $request->hasFile('proof_follow') ? $request->file('proof_follow')->getClientOriginalName() : null,
                    'proof_follow_fallback' => $urls['proof_follow'] ? url($urls['proof_follow']) : null,
                ]);

                Log::info('Google Sheets Registration Webhook Response Status: ' . $response->status());
                if ($response->failed()) {
                    Log::error('Google Sheets Registration Webhook failed: ' . $response->body());
                }
            } catch (\Exception $e) {
                Log::error('Google Sheets Registration Webhook error: ' . $e->getMessage());
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Registration submitted successfully.'
        ]);
    }
}
