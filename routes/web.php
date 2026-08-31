<?php
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminApplicantController;
use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\OprecController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    $competitionStartDate = \App\Models\Setting::where('key', 'competition_start_date')->value('value') ?? '2026-06-01 00:00:00';
    $competitionEndDate = \App\Models\Setting::where('key', 'competition_end_date')->value('value') ?? '2026-08-15 23:59:59';
    return view('welcome', compact('competitionStartDate', 'competitionEndDate'));
});

Route::get('/oprec', [OprecController::class, 'showForm'])->name('oprec.show');
Route::post('/oprec', [OprecController::class, 'submitForm'])->name('oprec.submit');

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.show');
Route::get('/register/erc', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSeC73wJpih5Zm3kPY0QclovJbE88IiuQjntdSHasSD2O4jRNw/viewform?usp=header');
})->name('register.erc');
Route::get('/register/tc', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSeg5EN3R8on2zU9-T0HbPm6rd_2BinjM98PNoCC14a5kA0n5g/viewform?usp=header');
})->name('register.tc');

Route::get('/committee', function () {
    return view('committee');
})->name('committee');

// Interactive PDF Flipbook Route (Heyzine)
Route::get('/booklet/{track}', function ($track) {
    $track = strtolower($track);
    if (!in_array($track, ['erc', 'tc'])) {
        abort(404);
    }
    
    $title = $track === 'erc' ? 'Equity Research Competition Guidebook' : 'Trading Competition Guidebook';
    $fileName = $track === 'erc' ? 'Booklet ERC Stock Summit UI 2026.pdf' : 'Booklet TC Stock Summit UI 2026.pdf';
    $filePath = 'booklets/' . $fileName;
    
    if (!file_exists(public_path($filePath))) {
        abort(404, 'Booklet file not found');
    }
    
    $heyzineUrl = $track === 'erc' 
        ? 'https://heyzine.com/flip-book/6ec1cafd0d.html' 
        : 'https://heyzine.com/flip-book/9129d0c89e.html';
    
    return view('booklet', compact('title', 'filePath', 'track', 'fileName', 'heyzineUrl'));
})->name('booklet.show');

// Dynamic Public Archive Route (with fallback to static views in Controller)
Route::get('/archive/{year}', [ArchiveController::class, 'show'])->name('archive.show');

Route::get('/dev-gallery', function() {
    $files = glob(public_path('images/*.{jpg,jpeg,png,JPG,PNG}', GLOB_BRACE));
    $html = '<div style="font-family: sans-serif; padding: 20px;">';
    foreach($files as $file) {
        $name = basename($file);
        $html .= "<div style='margin-bottom: 30px; border-bottom: 1px solid #ccc; padding-bottom: 20px;'>";
        $html .= "<h2>$name</h2>";
        $html .= "<img src='/images/$name' style='max-width: 600px; display: block;'>";
        $html .= "</div>";
    }
    $html .= '</div>';
    return $html;
});

// Admin Auth Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.applicants.index');
    });
    
    Route::resource('applicants', AdminApplicantController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::resource('registrations', AdminRegistrationController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::get('settings', [AdminApplicantController::class, 'settings'])->name('settings');
    Route::post('settings', [AdminApplicantController::class, 'updateSettings'])->name('settings.update');
});
