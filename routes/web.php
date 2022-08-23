<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessLegalDocumentsController;
use App\Http\Controllers\BusinessOwnersController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OwnerPropertiesController;
use App\Http\Controllers\RedirectLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// ** Route for owner and superadministrator
Route::group(['middleware' => ['auth', 'role:owner|superadministrator']], function() {
    Route::get('/dashboard', RedirectLoginController::class)->name('dashboard');
});

// ** Route for owner and superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator']], function() {
    Route::get('/register-owner-account',[RegisteredUserController::class, 'register'])->name('register-owner-account');
    // upload legal document
    Route::post('/upload',[BusinessLegalDocumentsController::class, 'store'])->name('upload-document');
    // download
    Route::get('/download/{file}',[BusinessLegalDocumentsController::class, 'download']);
    Route::resource('businesses', BusinessOwnersController::class);
    Route::get('businesses/{user}/create',[BusinessOwnersController::class, 'create'])->name('legal-documents-create');
});

// ** Route for owner
Route::group(['middleware' => ['auth', 'role:owner']], function() {
    Route::resource('properties', OwnerPropertiesController::class);
});

// ** Route for users
Route::group(['middleware' => ['auth', 'role:user']], function() {

});



require __DIR__.'/auth.php';
