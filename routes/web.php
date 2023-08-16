<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PackagesController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['prefix' => 'books'], function () {
Route::get('/create', [\App\Http\Controllers\Admin\UserRequestController::class, 'create'])->name('book.create');
Route::post('/', [\App\Http\Controllers\Admin\UserRequestController::class, 'store'])->name('book.store');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.main.index');

    Route::resource('packages', PackagesController::class, ['as' => 'admin'])->except('update');
    Route::post('packages/{package}', [PackagesController::class, 'update'])->name('admin.packages.update');
    Route::resource('gallery', GalleryController::class, ['as' => 'admin']);
    Route::get('/user_requests', [\App\Http\Controllers\Admin\UserRequestController::class, 'index'])->name('admin.user_requests.index');
    Route::delete('/user_requests/{user_request}', [\App\Http\Controllers\Admin\UserRequestController::class, 'destroy'])->name('admin.user_requests.destroy');
    Route::get('/user_requests/{user_request}', [\App\Http\Controllers\Admin\UserRequestController::class, 'show'])->name('admin.user_requests.show');
});

Route::get('/packages', [\App\Http\Controllers\MainController::class, 'packageIndex'])->name('main.packages');
Route::get('/gallery', [\App\Http\Controllers\MainController::class, 'galleryIndex'])->name('main.gallery');
Route::get('/', [\App\Http\Controllers\MainController::class, 'mainSlider'])->name('main');

//Route::get('/', function () {
//    return view('main.main');
//})->name('main');

Route::get('/services', function () {
    return view('main.services');
})->name('main.services');

Route::get('/about', function () {
    return view('main.about');
})->name('main.about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


