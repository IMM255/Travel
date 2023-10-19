<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/detail/{slug}',[DetailController::class,'index'])->name('detail');
// Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
// Route::get('/checkout-success',[CheckoutController::class,'success'])->name('checkout-success');
Route::post('/checkout/{id}',[CheckoutController::class,'process'])
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}',[CheckoutController::class,'index'])
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}',[CheckoutController::class,'create'])
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}',[CheckoutController::class,'remove'])
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}',[CheckoutController::class,'success'])
    ->name('checkout-success')
    ->middleware(['auth','verified']);




Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/',[DashboardController::class,'index'])
            ->name('dashboard');

        Route::resource('travel-package',TravelPackageController::class);
        Route::resource('gallery',GalleryController::class);
        Route::resource('transaction',TransactionController::class);
    });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');



Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Auth::routes(['verify' => true]);
require __DIR__.'/auth.php';
