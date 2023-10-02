<?php

use App\Http\Controllers\Accept;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\Admin_Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\FrontvolunteerController;
use App\Http\Controllers\UvolunteerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PlanController;
use App\Mail\ContactMail;
use App\Models\User;
use App\Models\Vaccept;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialController;

// pdf
Route::post('profile/vpdf/{id?}', [VolunteerController::class, 'view'])->name('viewpdf');
// Route::post('profile/dpdf',[VolunteerController::class, 'download'])->name('download');
Route::get('table', function () {
    view('profile.partials.table');
})->name('table');
Route::get('pricing', function () {
    view('pages.pricing');
});


// cart 


Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

// Route::get('/', [ProductsController::class, 'index']);
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'saveProductToSession'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
// Route::Delete('remove-from-cart/{id?}', [ProductsController::class, 'remove'])->name('remove_from_cart');
Route::Delete('remove-from-cart/{id?}', [ProductsController::class, 'remove'])->name('remove_from_cart');


Route::post('/add-product-to-session-array', [ProductsController::class, 'saveProductToSession'])->name('saveProductToSession');
Route::post('/search-product/{id?}', [ProductsController::class, 'search_products'])->name('search.products');
Route::post('/sort-by/{id?}', [ProductsController::class, 'sort_by'])->name('sort.by');
Route::post('/discount', [ProductsController::class, 'discount'])->name('discount');

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


Route::get('/donate', function () {
    return view('pages.donate');
});



Route::get('/rer', function () {
    return view('pages.cliker');
});

Route::get('single/{id?}', [CategoryController::class, 'find'])->name('single');
Route::get('subcategories/{id?}', [CategoryController::class, 'subcategories'])->name('subcategories');
Route::get('allproduct', [CategoryController::class, 'allproduct'])->name('allproduct');
Route::get('rangefilter', [CategoryController::class, 'rangefilter'])->name('rangefilter');
Route::get('ara', [ContactMail::class, 'sendmess']);

// Route::resource('pages/', ProductsController::class);

// Route::resource('product', ProductsController::class);

Route::get('/products', [ProductsController::class, 'ourproject'])->name('products.index');


Route::resource('pages/', ProductsController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::get('/home', [Controller::class, 'showhome'])
    ->name('home')->middleware('moveproduct');

Route::get('/about', [Controller::class, 'showabout'])
    ->name('about');

Route::get('/single', [Controller::class, 'showsingle'])
    ->name('single');

Route::get('/contact', [Controller::class, 'showcontact'])
    ->name('contact');

Route::get('/causes', [Controller::class, 'showcauses'])
    ->name('causes');

Route::get('/news', [Controller::class, 'shownews'])
    ->name('news');
    Route::get('cheackout',[ProductsController::class,'showcheackout'])->middleware(['auth','moveproduct'])->name('showcheackout');




Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


});



// Define the PayPal routes with the appropriate methods
Route::post('single/payment/paypal/{id}', [PaypalController::class, 'payment'])->middleware('auth', 'verified')->name('paypal/{id}'); // Use 'store' method for POST
Route::get('paypal/success/{product_id}', [PaypalController::class, 'success'])->name('paypal_success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET
// Define the PayPal routes with the appropriate methods

Route::get('single/payment/{id}', [PaypalController::class, 'showpayment'])->middleware('auth', 'verified'); // Use 'success' method for GET

//new
// Route::post('payment/{id?}', [PaypalController::class, 'payment'])->middleware('auth', 'verified')->name('payment'); // Use 'store' method for POST
Route::post('payment/{id?}', [StripeController::class, 'payment'])->name('stripe'); // Use 'store' method for POST
Route::get('success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET

// Route::get('single/payment/{id}', function () {
//     return view('pages.payment');
// })->name('payment')->middleware('auth', 'verified');

// Define the Stripe routes with the appropriate methods
Route::get('finish', function () {
    return view('sccess');
})->name('finish');
Route::get('finishform', function () {
    return view('sccessform');
})->name('finishform');
Route::post('single/payment/stripe/{id}', [StripeController::class, 'payment'])->middleware('auth', 'verified')->name('stripe_single'); // Use 'store' method for POST
// Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
// Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET



Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');








// login by google
Route::get('auth/google', [SocialController::class, 'redirectToGoogle'])->name('google');

Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

//login by facebook

Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('facebook');

Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);



//login by github

Route::get('auth/github', [SocialController::class, 'redirectToGithub'])->name('github');

Route::get('auth/github/callback', [SocialController::class, 'handleGithubCallback']);




// Route::view('donation','pages.donationForm');


Route::get('/backform', function () {
    return view('pages.trainingForm');
})->middleware(
        'auth',
        'verified'
    );

Route::resource("volunteers", VolunteerController::class)->middleware('auth', 'verified');



Route::post("single/frontform/form/{id}", [FrontvolunteerController::class, 'store'])->middleware('auth', 'verified');


Route::get('single/frontform/{id}', [FrontvolunteerController::class, 'show'])->middleware('auth', 'verified')->name('frontform');
;

Route::get('/serviceform', function () {
    return view('pages.donationForm');
})->middleware('auth', 'verified');

Route::resource("donors", DonorController::class);



Route::get('/UIform', function () {
    return view('pages.UIform');
})->middleware('auth', 'verified');

Route::resource("uvolunteers", UvolunteerController::class)->middleware('auth', 'verified');






Route::get('login_admin', [App\Http\Controllers\LoginAdmin::class, 'show'])->name('login_admin');

Route::post('check', [App\Http\Controllers\LoginAdmin::class, 'store'])->name('check_admin');



//////////////////////////////// SAJEDA CODE ////////////////////////////////

Route::get('accept/{id?}', [VacceptController::class, 'acceptv'])->name('accept');
Route::prefix('admin')->middleware('IsAdmin')->group(function () {

    Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');


    Route::get('/Admin_Home', [ContactController::class, 'show'])->name('Admin_Dashboard.index');

    Route::get('/Admin_profile', [AdminController::class, 'index'])->name('Admin_Dashboard.profile');




    //  volunteers data
    Route::get('/Admin_Volunteers', [VolunteerController::class, 'showe'])->name('Admin_Dashboard.Volunteers');

    // donations data
    Route::get('/Admin_Payment', [PaypalController::class, 'show'])->name('Admin_Dashboard.Payments');


    //ressourses data
    Route::get('/Admin_ressourses', [DonorController::class, 'show'])->name('Admin_Dashboard.ressourses');
    Route::get('/Admin_Dashboard_Vaccept', [VacceptController::class, 'show'])->name('Admin_Dashboard.Vaccept');


    // Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('Admin_Dashboard.Admins_Update');

    Route::get('/Admins_Payment', [PaypalController::class, 'show']);




    // categories data
    Route::get('/Admin_Category', [CategoryController::class, 'show'])->name('Admin_Dashboard.Category');
    Route::post('/Admin_Category', [CategoryController::class, 'save']);
    Route::post('categorydelete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('categoryedit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('categoryedit/categoryupdate/{id}', [CategoryController::class, 'update']);


    // admins data
    Route::get('/Admins_Data', [AdminController::class, 'show'])->name('Admin_Dashboard.Admins_Data');
    Route::post('/Admins_Data', [AdminController::class, 'store']);
    Route::delete('admindelete/{id}', [AdminController::class, 'destroy'])->name('Admin_Dashboard.destroy');
    Route::get('adminsedit/{id}', [AdminController::class, 'edit'])->name('Admin_Dashboard.edit');
    Route::patch('adminsedit/adminsupdate/{id}', [AdminController::class, 'update']);
    Route::get('Admin_Create', [AdminController::class, 'create']);




    // users data
    Route::get('/Admins_User', [UserController::class, 'show'])->name('Admin_Dashboard.User');
    Route::post('/Admins_User', [UserController::class, 'store']);
    Route::delete('userdelete/{id}', [UserController::class, 'destroy'])->name('User.destroy');
    Route::get('useredit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('useredit/userupdate/{id}', [UserController::class, 'update']);
    Route::get('/admin/usertview/{id}', [UserController::class, 'view']);
    Route::get('user_Create', [UserController::class, 'create']);

    // projects data
    Route::get('/Admins_Projects', [ProductsController::class, 'show'])->name('Admin_Dashboard.Projects');
    Route::post('/Admins_Projects', [ProductsController::class, 'store']);
    Route::delete('productdelete/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('productedit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::patch('productedit/productupdate/{id}', [ProductsController::class, 'update']);
    Route::get('productview/{id}', [ProductsController::class, 'view']);
    Route::get('Project_Create', [ProductsController::class, 'create']);




    // email for all users
    Route::get('/send-email', [VacceptController::class, 'showEmailForm'])->name('admin.send-email');
    Route::post('/send-email', [VacceptController::class, 'sendEmail'])->name('admin.send-email.post');

});



Route::get('/traineeForm', function () {
    return view('pages.traineeForm');
})->name('traineeForm')->middleware('auth', 'verified');

Route::resource("trainees", TraineeController::class);
// Route::post('/traineeForm', [TraineeController::class, 'store'])->name('traineeForm');

require __DIR__ . '/auth.php';