<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class AdminRegistrationController extends Controller
{
    /**
     * Display a listing of competition registrations.
     */
    public function index()
    {
        $registrations = Registration::latest()->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    /**
     * Display details of a specific registration.
     */
    public function show(Registration $registration)
    {
        if (request()->ajax()) {
            return response()->json($registration);
        }
        return redirect()->route('admin.registrations.index');
    }

    /**
     * Update the status of a registration.
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'status' => 'required|in:pending,verified,rejected',
        ]);

        $registration->update([
            'status' => $request->status,
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'status' => $registration->status,
                'message' => 'Registration status updated successfully.'
            ]);
        }

        return redirect()->route('admin.registrations.index')->with('success', 'Registration status updated successfully.');
    }

    /**
     * Remove the specified registration from database.
     */
    public function destroy(Registration $registration)
    {
        // Delete KTM and Proof files from storage
        $filesToDelete = [
            $registration->leader_ktm,
            $registration->member1_ktm,
            $registration->member2_ktm,
            $registration->proof_payment,
            $registration->proof_follow
        ];

        foreach ($filesToDelete as $file) {
            if ($file && file_exists(public_path($file))) {
                @unlink(public_path($file));
            }
        }

        $registration->delete();

        return redirect()->route('admin.registrations.index')->with('success', 'Registration deleted successfully.');
    }
}
