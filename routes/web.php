<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessLegalDocumentsController;
use App\Http\Controllers\BusinessOwnersController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OwnerPropertiesController;
use App\Http\Controllers\PropertiesController;
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
    // owner account (user)
    Route::get('businesses/{businesses}/properties', [BusinessOwnersController::class, 'show'])->name('businesses.properties');
    Route::resource('businesses', BusinessOwnersController::class);
    // Properties of owner
     Route::resource('properties', PropertiesController::class);
     // legal documents
    Route::get('businesses/{businesses}/properties/legal-documents', [BusinessLegalDocumentsController::class, 'show'])->name('legal-documents');
    Route::get('businesses/{properties}/properties/legal-documents/create', [BusinessLegalDocumentsController::class, 'create'])->name('create-legal-documents');
    // upload legal document
    Route::post('/upload',[BusinessLegalDocumentsController::class, 'store'])->name('upload-document');
    // download
    Route::get('/download/{file}',[BusinessLegalDocumentsController::class, 'download']);
});

// ** Route for owner
Route::group(['middleware' => ['auth', 'role:owner']], function() {
    Route::resource('owner-properties', OwnerPropertiesController::class);
});

// ** Route for users
Route::group(['middleware' => ['auth', 'role:user']], function() {

});



require __DIR__.'/auth.php';
