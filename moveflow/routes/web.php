<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\LeaderboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// -------------------------------------
// Landing Page
// -------------------------------------
Route::get('/', function () {
    return view('welcome');
})->name('home');

// -------------------------------------
// Public Auth Routes (Breeze)
// -------------------------------------
require __DIR__.'/auth.php';

// -------------------------------------
// Protected Routes (logged-in users)
// -------------------------------------
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('missions.index');
    })->name('dashboard');

    Route::resource('missions', MissionController::class);
    Route::resource('workouts', WorkoutController::class)->only(['index', 'show']);
    Route::resource('teams', TeamController::class);
    Route::resource('chapters', ChapterController::class);

    // Mission completion
    Route::post('missions/{mission}/complete', [MissionController::class, 'complete'])
        ->name('missions.complete');

    // Leaderboard
    Route::get('/leaderboard', [LeaderboardController::class, 'index'])
        ->name('leaderboard.index');
});

// -------------------------------------
// Admin Routes
// -------------------------------------
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('workouts', WorkoutController::class)->except(['index', 'show']);
});

Route::post('/teams/{team}/add-user', [TeamController::class, 'addUser'])->name('teams.addUser');

Route::post('/chapters/{chapter}/unlock', [ChapterController::class, 'unlock'])->name('chapters.unlock');
