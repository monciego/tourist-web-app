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
Route::get('/listing/{id}', [HomepageController::class, 'show'])->name('listing.show');

// ** Route for owner and superadministrator
Route::group(['middleware' => ['auth', 'role:owner|superadministrator']], function() {
    Route::get('/dashboard', RedirectLoginController::class)->name('dashboard');
});

// ** Route for superadministrator
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
    // owner properties storing data
    Route::post('/store-breadcrumbs-description', [OwnerPropertiesController::class, 'storeBreadcrumbs'])->name('store-breadcrumbs');
    Route::post('/store-description', [OwnerPropertiesController::class, 'storeDescription'])->name('store-description');
    Route::post('/store-property-details', [OwnerPropertiesController::class, 'storeDetails'])->name('store-property-details');
    Route::post('/store-property-price', [OwnerPropertiesController::class, 'storePrice'])->name('store-property-price');
    Route::post('/store-property-offers', [OwnerPropertiesController::class, 'storeOffers'])->name('store-property-offers');
    Route::post('/store-image-one', [OwnerPropertiesController::class, 'storeImageOne'])->name('store-image-one');
    Route::post('/store-image-two', [OwnerPropertiesController::class, 'storeImageTwo'])->name('store-image-two');
    Route::post('/store-image-three', [OwnerPropertiesController::class, 'storeImageThree'])->name('store-image-three');
    Route::post('/store-image-four', [OwnerPropertiesController::class, 'storeImageFour'])->name('store-image-four');
    Route::post('/store-feature', [OwnerPropertiesController::class, 'storeFeature'])->name('store-feature');
    // owner properties deleting data
    Route::post('/remove-breadcrumbs/{id}', [OwnerPropertiesController::class, 'removeBreadCrumbs'])->name('remove.breadcrumbs');
    Route::post('/remove-description/{id}', [OwnerPropertiesController::class, 'removeDescription'])->name('remove.description');
    Route::post('/remove-offers/{id}', [OwnerPropertiesController::class, 'removeOffers'])->name('remove.offers');
    Route::post('/remove-details/{id}', [OwnerPropertiesController::class, 'removeDetails'])->name('remove.details');
    Route::post('/remove-price/{id}', [OwnerPropertiesController::class, 'removePrice'])->name('remove.price');
    // removing images
    Route::post('/remove-image-one/{id}', [OwnerPropertiesController::class, 'removeImageOne'])->name('remove.image_one');
    Route::post('/remove-image-two/{id}', [OwnerPropertiesController::class, 'removeImageTwo'])->name('remove.image_two');
    Route::post('/remove-image-three/{id}', [OwnerPropertiesController::class, 'removeImageThree'])->name('remove.image_three');
    Route::post('/remove-image-four/{id}', [OwnerPropertiesController::class, 'removeImageFour'])->name('remove.image_four');
});

// ** Route for users
Route::group(['middleware' => ['auth', 'role:user']], function() {

});



require __DIR__.'/auth.php';
