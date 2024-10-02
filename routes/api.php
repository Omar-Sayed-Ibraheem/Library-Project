<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BookController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('books', [BookController::class, 'index']);  // عرض كل الكتب
    Route::post('books', [BookController::class, 'store']);  // إضافة كتاب جديد
    Route::put('books/{id}', [BookController::class, 'update']);  // تعديل كتاب
    Route::delete('books/{id}', [BookController::class, 'destroy']);  // حذف كتاب

    Route::get('categories', [BookController::class, 'getCategories']);  // جلب فئات الكتب
    Route::post('books/{id}/reserve', [BookController::class, 'reserve']);  // حجز كتاب
});

Route::post('register', [UserController::class, 'register']);  // تسجيل مستخدم جديد
Route::post('login', [UserController::class, 'login']);  // تسجيل دخول
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');  // تسجيل خروج


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['localizationRedirect', 'localeSessionRedirect', 'localeViewPath']) // إضافة الميدل وير إذا كنت بحاجة لذلك
     ->group(function () {
         Route::get('/example', function (Request $request) {
             return response()->json(['message' => 'API works!']);
         });
     });
     Route::get('/test', function () {
        return 'Test route works!';
    });
    