<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect to uploads page
Route::get('/home', function () {
    return redirect('/uploads'); 
});

// Public pages
Route::get('/', function () {
    return view('SocialMediaPlatform');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/features', function () {
    return view('features');
})->name('features');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user routes
Route::middleware(['auth'])->group(function () {

    // Profile routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Upload routes
    Route::prefix('uploads')->name('uploads.')->middleware(['verified'])->group(function () {
        Route::get('/', [UploadController::class, 'index'])->name('index'); 
        Route::get('/create', [UploadController::class, 'create'])->name('create'); 
        Route::get('/{upload}/edit', [UploadController::class, 'edit'])->name('edit'); 
        Route::get('/{upload}/{originalName?}', [UploadController::class, 'show'])->name('show'); 
        Route::post('/', [UploadController::class, 'store'])->name('store'); 
        Route::put('/{upload}', [UploadController::class, 'update'])->name('update'); 
        Route::delete('/{upload}', [UploadController::class, 'destroy'])->name('destroy'); 
    });

    // Super account specific routes
    Route::middleware(['super'])->group(function () {
        Route::get('/super-dashboard', function () {
            return view('super.dashboard'); // Super account dashboard view
        })->name('super.dashboard');

        Route::prefix('admin/uploads')->name('admin.uploads.')->group(function () {
            Route::get('/', [UploadController::class, 'index'])->name('index'); // Super admin views all uploads
            Route::delete('/{upload}', [UploadController::class, 'destroy'])->name('destroy'); // Super admin deletes
        });
    });
});

require __DIR__.'/auth.php';
