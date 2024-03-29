<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


// home route start
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home/donor',[HomeController::class,'donor'])->name('home.donor');
Route::get('donor/detelse/{id}',[HomeController::class,'donor_detels']);
Route::get('/donor/create',[DonorController::class,'donorCreate'])->name('donor.create');
Route::post('/home/donor/store',[DonorController::class,'homeStore'])->name('home.store');

// home route end

// admin route start
Route::middleware('auth','admin:admin')->group(function () {
    Route::get('/admin',[AdminController::class,'dashboard'])->name('admin');
    Route::get('/admin/donor',[AdminController::class,'adminDonor'])->name('donor');
    Route::get('/admin/donor/create',[AdminController::class,'create'])->name('create');
    Route::post('/admin/donor/store',[AdminController::class,'store'])->name('store');
    Route::get('/donor/edit/{id}',[AdminController::class,'edit']);
    Route::put('/donor/update/{id}',[AdminController::class,'update']);
    Route::get('/donor/delete/{id}',[AdminController::class,'delete']);
});

// admin route end

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
