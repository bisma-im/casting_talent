<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ViewsController;
use App\Http\Controllers\Models\ModelController;
use App\Http\Controllers\User\QueryController;

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

Route::get('/', [PagesController::class, 'homePage'])->name('index.get');

Route::get('/about', [PagesController::class, 'aboutPage'])->name('about.get');
Route::get('/contact', [PagesController::class, 'contactPage'])->name('contact.get');
Route::get('/jobs/{category?}', [PagesController::class, 'jobsPage'])->name('jobs.get');
Route::get('/talents', [PagesController::class, 'talentsPage'])->name('talents.get');
Route::get('/featured-models/{role?}', [PagesController::class, 'featuredmodelsPage'])->name('featured-models.get');
Route::get('/all-talent/{role?}', [PagesController::class, 'allmodelsPage'])->name('all-models.get');
Route::get('/all-paid-talent/{role?}', [PagesController::class, 'allmodelsForHomePage'])->name('all-models-homepage.get');
Route::get('/all-talent/subcategory/{subcategory}', [PagesController::class, 'allmodelsBySubcategory'])->name('all-models.subcategory');
Route::get('/membership', [PagesController::class, 'membershipPage'])->name('membership.get');
Route::get('/services', [PagesController::class, 'servicesPage'])->name('services.get');
Route::get('/event-services/{section?}/', [PagesController::class, 'eventservicesPage'])->name('event-services.get');
Route::get('/filming-services/{section?}/', [PagesController::class, 'filmingservicesPage'])->name('filming-services.get');
Route::get('/celeberity-management/{section?}/', [PagesController::class, 'celeberityManagementPage'])->name('celeberity-management.get');
Route::get('/modeling-agency/{section?}/', [PagesController::class, 'modelingagencyPage'])->name('modeling-agency.get');

Route::get('/hospitality/{section?}/', [PagesController::class, 'hospitalityPage'])->name('hospitality.get');
Route::get('/location-scounting/{section?}/', [PagesController::class, 'locationScoutingPage'])->name('location-scounting.get');


// download images
Route::get('/download-all-model-images/{id?}', [QueryController::class, 'downloadAllModelImages']);

//post query
Route::post('/contact', [QueryController::class, 'storeQuery'])->name('contact.post');
Route::post('/client-inquiry', [QueryController::class, 'storeClientInquiry'])->name('client-inquiry.post');
// job apply
Route::get('/job/{id?}/applied', [ModelController::class, 'jobsApply'])->name('job-apply.post');

// modeling forms
Route::get('/model-data', [PagesController::class, 'modelDataPage'])->name('model-data.get');

// profile info store
Route::post('/profile-info', [QueryController::class, 'profileInfoStore'])->name('profile-info.post');
// model data post
Route::get('/model/{id?}/info', [PagesController::class, 'modelInfoPage'])->name('model-info.get');
Route::post('/model-info', [QueryController::class, 'modelInfoStore'])->name('model-info.post');
// web.php (routes file)
Route::get('/model/{id?}/details', [QueryController::class, 'downloadModelDetails'])->name('download.model.details');

/// model dashobard
Route::get('/model-dashboard', [ModelController::class, 'modelDashboardPage'])->name('model-dashboard.get');
// payment for model
Route::post('/stripe/checkout', [ModelController::class,'stripeCheckoutPost'])->name('stripe.checkout');
Route::get('/stripe/checkout/success',[ModelController::class,'stripeCheckoutSuccess'] )->name('stripe.checkout.success');

// dashboard
Route::get('/dashboard', [ModelController::class, 'dashboardPage'])->name('dashboard.get');
// job post
Route::post('/job-info', [ModelController::class, 'jobInfoStore'])->name('job-info.post');



// user auth
Route::get('/register', [AuthController::class, 'registerPage'])->name('register.get');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login.get');
Route::get('/forgot-password', [AuthController::class, 'forgotPage'])->name('forgot.get');
Route::get('/reset/{token?}/password', [AuthController::class, 'resetPage'])->name('reset.get');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/forgot-password', [AuthController::class, 'forgot'])->name('forgot.post');
Route::post('/reset-password', [AuthController::class, 'reset'])->name('reset.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.get');


Route::get('/pdf/{id}', [ModelController::class, 'downloadImagesPdf']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //admin auth
    Route::get('/login', [AdminAuthController::class, 'adminLoginPage'])->name('admin.login.get');
    Route::post('/login', [AdminAuthController::class, 'adminLoginPost'])->name('admin.login.post');
    Route::get('/forgot-password', [AdminAuthController::class, 'adminForgotPage'])->name('admin.forgot.get');
    Route::get('/reset/{token?}/password', [AdminAuthController::class, 'adminResetPage'])->name('admin.reset.get');
    Route::post('/forgot-password', [AdminAuthController::class, 'adminForgotPost'])->name('admin.forgot.post');
    Route::post('/reset-password', [AdminAuthController::class, 'adminResetPost'])->name('admin.reset.post');
    Route::get('/logout', [AdminAuthController::class, 'adminlogout'])->name('admin.logout');

    // admin views
    // Route::group(['middleware' => 'admin'], function () {
        Route::get('/dashboard', [ViewsController::class, 'adminDashboard'])->name('admin.index.get');
        Route::get('/users', [ViewsController::class, 'adminUsers'])->name('admin.users.get');
        // models
        Route::get('/models', [ViewsController::class, 'modelInfoPage'])->name('admin.models.get');

        //queries
        Route::get('/queries', [ViewsController::class, 'adminQueries'])->name('admin.queries.get');
        Route::get('/client-inquiries', [ViewsController::class, 'clientInquiries'])->name('admin.client-inquiries.get');

        // job
        Route::get('/create-job', [AdminAuthController::class, 'createJobPage'])->name('admin.create-job.get');
        Route::post('/store-job', [AdminAuthController::class, 'storeJob'])->name('admin.job.store');
    // });
});
