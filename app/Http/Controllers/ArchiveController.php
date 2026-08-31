<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display the specified archive page.
     */
    public function show($year)
    {
        // Fallback to static blade views if they exist (e.g. archive.2024 or archive.2025)
        if (view()->exists("archive.{$year}")) {
            return view("archive.{$year}");
        }

        abort(404, 'Archive year not found.');
    }
}
