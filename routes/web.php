<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [PublicController::class,'index'])->name('home');

//route opere
Route::get('/operas', [OperaController::class,'index'])->name('opera.index');
Route::get('/operas/create', [OperaController::class,'create'])->name('opera.create');
Route::post('/operas/store', [OperaController::class,'store'])->name('opera.store');
Route::get('/operas/detail/{opera}', [OperaController::class,'show'])->name('opera.show');
Route::get('/operas/edit/{opera}', [OperaController::class,'edit'])->name('opera.edit');
Route::put('/operas/update/{opera}', [OperaController::class,'update'])->name('opera.update');
Route::delete('/operas/delete/{opera}', [OperaController::class,'destroy'])->name('opera.delete');


Route::get('/operas/sculptures',[OperaController::class,'showByCategorySculpture'])->name('sculpture.index');
Route::get('/operas/painting', [OperaController::class,'showByCategoryPaintings'])->name('painting.index');
Route::get('/operas/repert', [OperaController::class,'showByCategoryRepert'])->name('repert.index');


//route contattaci
Route::get('/contact-us', [ContactUsController::class,'index'])->name('contactUs.index');
Route::post('/contact-us/thank-you', [ContactUsController::class,'contactUsSubmit'])->name('contactUs.submit');