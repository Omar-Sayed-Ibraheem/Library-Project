<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function () {
    // Your routes go here
});

Route::get('/home', [AdminController::class, 'index']);
Route::get('/category_page', [AdminController::class, 'category_page']);
Route::get('/showcategory_page', [AdminController::class, 'showcategory_page']);
Route::get('/book_page', [AdminController::class, 'book_page']);
Route::get('/showbook_page', [AdminController::class, 'showbook_page']);
Route::get('/showusers_page', [AdminController::class, 'showusers_page']);
Route::get('/borrow_books/{id}', [HomeController::class, 'borrow_books']);
Route::get('/book_details/{id}', [HomeController::class, 'book_details']);
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/catgeroy_delete/{id}', [AdminController::class, 'catgeroy_delete']);
Route::get('/catgeroy_edit/{id}', [AdminController::class, 'catgeroy_edit']);
Route::post('/category_update/{id}', [AdminController::class, 'category_update']);
Route::post('/add_book', [AdminController::class, 'add_book']);
Route::get('/search_book', [HomeController::class, 'search_book']);
Route::get('/explore', [HomeController::class, 'explore']);
