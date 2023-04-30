<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessLegalDocumentsController;
use App\Http\Controllers\BusinessOwnersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DataTouristController;
use App\Http\Controllers\EmergencyHotlineController;
use App\Http\Controllers\ExportDocuments;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\FrequentlyAnswerController;
use App\Http\Controllers\FrequentlyQuestionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\OwnerPropertiesController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\RedirectLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterUnclassifiedTouristController;
use App\Http\Controllers\ReportGenerationController;
use App\Http\Controllers\ReviewAndRatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\TourRegistrationController;

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
Route::get('/listing', [ListingController::class, 'index'])->name('listing.index');
Route::get('/listing/{id}', [HomepageController::class, 'show'])->name('listing.show');
Route::resource('/emergency-hotline', EmergencyHotlineController::class);
Route::get('/tagline', [PagesController::class, 'tagline'])->name('tagline');
Route::get('/municipal-seal', [PagesController::class, 'municipalSeal'])->name('municipalSeal');
Route::get('/history-of-dasol', [PagesController::class, 'historyOfDasol'])->name('historyOfDasol');
Route::get('/about-dasol', [PagesController::class, 'aboutDasol'])->name('aboutDasol');
Route::get('/salt-production-and-processing', [PagesController::class, 'saltProductionAndProcessing'])->name('saltProductionAndProcessing');
Route::get('/dasol-salt-industry', [PagesController::class, 'dasolSaltIndustry'])->name('dasolSaltIndustry');
Route::get('/municipal-tourism-and-cultural-affairs', [PagesController::class, 'safetyGuidelines'])->name('safetyGuidelines');
Route::get('/asin-festival-back-story', [PagesController::class, 'asinFestivalBackStory'])->name('asinFestivalBackStory');
Route::get('/miss-dasol-and-asin-festival-history', [PagesController::class, 'missDasol'])->name('missDasol');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact.index');
Route::get('/announcements-and-news/{announcement}', [HomepageController::class, 'showAnnouncement'])->name('announcements.and.news');


// ** Route for owner and superadministrator
Route::group(['middleware' => ['auth', 'role:owner|superadministrator|staff']], function() {
    Route::get('/dashboard', RedirectLoginController::class)->name('dashboard');
});

// ** Route for superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator']], function() {
    Route::get('/number-of-tourists',[DataTouristController::class, 'numberOfTourists'])->name('number-of-tourists');
    Route::get('/number-of-day-tourists',[DataTouristController::class, 'numberOfDayTourists'])->name('number-of-day-tourists');
    Route::get('/number-of-night-tourists',[DataTouristController::class, 'numberOfNightTourists'])->name('number-of-night-tourists');
    Route::get('/register-owner-account',[RegisteredUserController::class, 'register'])->name('register-owner-account');
    Route::get('/register-staff-account',[RegisteredUserController::class, 'registerStaff'])->name('register.staff');
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
    // categories
    Route::resource('categories', CategoriesController::class);
    // add homepage image
    Route::post('/store-homepage-image', [HomepageController::class, 'storeHomepageImage'])->name('store.homepage_image');
    Route::post('/store-homepage-tag-line', [HomepageController::class, 'storeHomepageTagLine'])->name('store.homepage_tagline');

    Route::get('/review-and-rating',[ReviewAndRatingController::class, 'index'])->name('review-and-rating.index');
    Route::get('/review-and-rating/{id}',[ReviewAndRatingController::class, 'show'])->name('review-and-rating.show');
    Route::get('/most-visited-place/{id}',[ReviewAndRatingController::class, 'showMostVisitedPlace'])->name('most-visited-place.show');
    // article
    Route::resource('announcements', AnnouncementController::class);

    // export word
    Route::get('document/export-arrival-per-year', [ExportDocuments::class, 'arrivalPerYear'])->name('export.arrival-per-year');
    Route::get('document/export-tourists', [ExportDocuments::class, 'numberOfTourists'])->name('export.tourists');
    Route::get('document/export-day-tourists', [ExportDocuments::class, 'dayTourist'])->name('export.day-tourists');
    Route::get('document/export-night-tourists', [ExportDocuments::class, 'nightTourist'])->name('export.night-tourists');
    Route::get('document/export-moth', [ExportDocuments::class, 'numberofArrivalmonthOfYear'])->name('export.month');
    Route::get('document/export-per-day', [ExportDocuments::class, 'numberofArrivalPerDay'])->name('export.per.day');
    Route::get('document/export-per-specific-year/{year}', [ExportDocuments::class, 'arrivalPerSpecificYear'])->name('export.per.specific.year');
    Route::get('document/export-per-specific-month/{month}', [ExportDocuments::class, 'arrivalPerSpecificMonth'])->name('export.per.specific.month');

    // Report Generation
    Route::resource('report-generation', ReportGenerationController::class);
    Route::get('tourist-arrival-per-day', [ReportGenerationController::class, 'arrivalPerDay'])->name('tourist-arrival-per-day.show');
    Route::get('tourist-arrival-per-month', [ReportGenerationController::class, 'arrivalPerMonth'])->name('tourist-arrival-per-month.show');
    Route::get('tourist-arrival-per-year', [ReportGenerationController::class, 'arrivalPerYear'])->name('tourist-arrival-per-year.show');
    Route::get('all-tourist-arrival', [ReportGenerationController::class, 'allTouristArrival'])->name('all-tourist-arrival.show');
    Route::get('night-tourist-arrival', [ReportGenerationController::class, 'nightTouristArrival'])->name('night-tourist-arrival.show');
    Route::get('day-tourist-arrival', [ReportGenerationController::class, 'dayTouristArrival'])->name('day-tourist-arrival.show');
});

// ** Route for owner
Route::group(['middleware' => ['auth', 'role:owner']], function() {
    Route::resource('owner-properties', OwnerPropertiesController::class);
    Route::resource('frequently-asked-questions', FrequentlyQuestionController::class);
    Route::get('/frequently-asked-questions/create-question/{properties}', [FrequentlyQuestionController::class, 'createQuestions'])->name('create.question');
    Route::resource('faq-answers', FrequentlyAnswerController::class);
    Route::get('/frequently-asked-questions/answers/{frequentlyQuestion}', [FrequentlyAnswerController::class, 'createAnswers'])->name('create.answers');
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
    Route::post('/store-location', [OwnerPropertiesController::class, 'storeLocation'])->name('store-location');
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
    Route::post('/remove-featurer/{id}', [OwnerPropertiesController::class, 'removeFeature'])->name('remove.feature');

});

// ** Route for users
Route::group(['middleware' => ['auth', 'verified', 'role:user']], function() {
    Route::resource('tour-registration', TourRegistrationController::class);
    Route::resource('your-tickets', TicketsController::class);
    Route::get('property/register-tour/{id}',  [TourRegistrationController::class, 'registerTour'])->name('register.tour');
    Route::get('thank-you-for-registration/{id}',  [TourRegistrationController::class, 'thankYouForRegistrationPage'])->name('thankyou.for.registration');
    Route::post('/update-status',  [TourRegistrationController::class, 'updateStatus'])->name('update.status');
    Route::post('/cancel-registration', [TourRegistrationController::class, 'cancel'])->name('cancel.registration');
    Route::resource('reviews', ReviewController::class);
     Route::get('review/{id}', [ReviewController::class, 'review'])->name('review.properties');
});

// ** Route for staff
Route::group(['middleware' => ['auth', 'role:staff']], function() {
    Route::resource('staff', StaffController::class);
    Route::post('/verify-ticket', [StaffController::class, 'verify'])->name('verify.ticket');
    Route::get('/cancelled-tickets', [StaffController::class, 'cancelledTickets'])->name('cancelled.ticket.index');
    Route::get('/verified-tickets/{tourRegistration}', [StaffController::class, 'showVerifiedTicketsDetails'])->name('verified.tickets.details');
    Route::resource('/register-a-tour', RegisterUnclassifiedTouristController::class);
});


Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('{thread}/create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});


// Fallback Route
Route::fallback(FallbackController::class);

require __DIR__.'/auth.php';
