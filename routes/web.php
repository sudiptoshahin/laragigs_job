<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index'])->name('home');


// Route::get('/listing/{id}', function($id){
//     $listing = Listing::find($id);
//     return view('listing', [
//         'list'=> $listing,
//     ]);
// })->name('listing');

// route model binding
Route::get('/listing/{listing}', [ListingController::class, 'show'])->name('listing');


Route::get('/create/listing', [ListingController::class, 'create'])->name('create-listing');

// store
Route::post('/listing', [ListingController::class, 'store'])->name('store-listing');

Route::get('listing/{listing}/edit', [ListingController::class, 'edit'])->name('edit-listing');

Route::put('/listing/{listing}', [ListingController::class, 'update'])->name('update-listing');

// delete
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->name('delete-listing');