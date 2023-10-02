<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
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

use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialController;
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/


// Route::get('login_admin', [LoginAdmin::class,'show'])->name('login_admin');

// Route::post('check', [LoginAdmin::class, 'store'])->name('check_admin');




// Route::prefix('admin')->middleware('IsAdmin')->group(function (){

// Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');
   



//////////////////////////////// SAJEDA CODE ////////////////////////////////


    Route::get('/Admin_Home', function () {
        return view('Admin_Dashboard.Statics ')->name('Admin_Home');

    });
    Route::get('/Admin_creatuser', function () {
        return view('Admin_Dashboard.creatuser ');

    });
    Route::get('/Admin_Donations', function () {
        return view('Admin_Dashboard.Donations')->name('Admin_Donations');

    });
    Route::get('/Admin_Volunteers', function () {
        return view('Admin_Dashboard.Volunteers')->name('Admin_Volunteers');

    });

    Route::get('/Admin_Volunteers', [VolunteerController::class, 'showe']);


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




    // users data
    Route::get('/Admins_User', [UserController::class, 'show'])->name('Admin_Dashboard.User');
    Route::post('/Admins_User', [UserController::class, 'store']);
    Route::delete('userdelete/{id}', [UserController::class, 'destroy'])->name('User.destroy');
    Route::get('useredit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('useredit/userupdate/{id}', [UserController::class, 'update']);


    Route::get('/Admins_Projects', [ProductsController::class, 'show'])->name('Admin_Dashboard.Projects');
    Route::post('/Admins_Projects', [ProductsController::class, 'store']);
    Route::delete('productdelete/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('productedit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::patch('productedit/productupdate/{id}', [ProductsController::class, 'update']);

//    require __DIR__ . '/auth.php';

// });





