<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FAQController;
use App\Http\Controllers\TravelPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Travel Posts CRUD
    Route::resource('travel-posts', TravelPostController::class);

});



/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');



/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

});



/*
|--------------------------------------------------------------------------
| AUTH FILES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';