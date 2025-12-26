<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GovernanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/founder', [PageController::class, 'founder'])->name('founder');
Route::get('/structure', [PageController::class, 'structure'])->name('structure');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Activities
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/{slug}', [ActivityController::class, 'show'])->name('activities.show');

// Governance
Route::get('/governance', [GovernanceController::class, 'index'])->name('governance.index');