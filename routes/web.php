<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\RecipeList;
use App\Http\Controllers\VisitorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['guest'])->group(function () {
    Route::get('/', [VisitorController::class, 'hero'])->name('hero');
});

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('login.google');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/recipe', [RecipeList::class, 'index'])->name('recipe.index');
    Route::get('/recipe/{recipe}', [RecipeList::class, 'show'])->name('recipe.show');
});
