<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

use App\Http\Controllers\FAQController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TravelPostController;
use App\Http\Controllers\AdminFAQController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminUserController;
/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| PUBLIC PROFILE
|--------------------------------------------------------------------------
*/

Route::get('/users/{user}', function (User $user) {
    return view('profile.public', compact('user'));
})->name('users.public');


/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/

Route::get('/faq', [FAQController::class, 'index'])
    ->name('faq.index');


/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


/*
|--------------------------------------------------------------------------
| AUTHENTICATED USERS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    /*
    |--------------------------------------------------------------------------
    | TRAVEL POSTS
    |--------------------------------------------------------------------------
    */

    Route::resource('travel-posts', TravelPostController::class);

});


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/users', [AdminUserController::class, 'index'])
    ->name('admin.users.index');

Route::get('/admin/users/create', [AdminUserController::class, 'create'])
    ->name('admin.users.create');

Route::post('/admin/users', [AdminUserController::class, 'store'])
    ->name('admin.users.store');

Route::patch('/admin/users/{user}/toggle-admin', [AdminUserController::class, 'toggleAdmin'])
    ->name('admin.users.toggle-admin');

    /*
    |--------------------------------------------------------------------------
    | ADMIN FAQ CRUD
    |--------------------------------------------------------------------------
    */

    Route::resource('/admin/faqs', AdminFAQController::class);


    /*
    |--------------------------------------------------------------------------
    | ADMIN CONTACT MESSAGES
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/messages', [AdminContactController::class, 'index'])
        ->name('admin.messages');

});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';