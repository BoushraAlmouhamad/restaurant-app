<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\RestaurantController;

use Illuminate\Support\Facades\Auth ;

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
/* Route::view('/boushra','welcome'); */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::resource('restaurants', RestaurantController::class);
Route::resource('categories', CategoryController::class);`
Route::resource('meals', MealController::class);
Route::resource('components',ComponentController::class);
 Route::get('log_out', function () {
 Auth::logout()
 return redirect('/');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
