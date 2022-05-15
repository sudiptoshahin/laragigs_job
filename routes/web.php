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

