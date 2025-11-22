<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ChapterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you register all web routes for your application.
| Routes inside the 'auth' middleware require login.
| Routes inside the 'role:admin' middleware require admin privilege.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ===========================================================
// AUTHENTICATED USER ROUTES
// ===========================================================
Route::middleware(['auth'])->group(function () {

    // Missions
    Route::resource('missions', MissionController::class);

    // Mission completion (gamified feature)
    Route::post('missions/{mission}/complete', 
        [MissionController::class, 'complete']
    )->name('missions.complete');

    // Workouts (only index + show for normal users)
    Route::resource('workouts', WorkoutController::class)
        ->only(['index', 'show']);

    // Teams
    Route::resource('teams', TeamController::class);

    // Storyline Chapters
    Route::resource('chapters', ChapterController::class);
});

// ===========================================================
// ADMIN-ONLY ROUTES
// ===========================================================
Route::middleware(['auth', 'role:admin'])->group(function () {

    // Only admin can create/update/delete workouts
    Route::resource('workouts', WorkoutController::class)
        ->except(['index', 'show']);
    Route::get('/leaderboard', [\App\Http\Controllers\LeaderboardController::class, 'index'])
    ->name('leaderboard');

});

require __DIR__.'/auth.php';
