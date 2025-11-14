<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/contact', [LandingPageController::class, 'contact'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');
Route::get('/thank-you', [LandingPageController::class, 'thankYou'])->name('thank.you');

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('inquiries');
    Route::get('/inquiries/{id}', [AdminController::class, 'show'])->name('inquiries.show');
    Route::put('/inquiries/{id}/status', [AdminController::class, 'updateStatus'])->name('inquiries.update-status');
});
