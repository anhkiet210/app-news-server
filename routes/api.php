<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
//User
Route::get('/getAll-user-profile', [UserController::class, 'index']);
Route::get('/get-user-profile/{id}', [UserController::class, 'show']);
Route::put('/updateProfile/{id}', [UserController::class, 'update']);
Route::put('/updatePassword/{id}', [UserController::class, 'updatePassword']);
Route::put('/resetPassword/{id}', [UserController::class, 'resetPassword']);
// category
Route::get('Category', [CategoryController::class, 'index']);
Route::post('Category', [CategoryController::class, 'store']);
Route::get('Category/{id}', [CategoryController::class, 'show']);
Route::put('CategoryName/{id}', [CategoryController::class, 'updateCategoryName']);
Route::put('CategoryStatus/{id}', [CategoryController::class, 'updateCategoryStatus']);
Route::delete('Category/{id}', [CategoryController::class, 'destroy']);

//post
Route::get('Post', [PostController::class, 'index']);
Route::post('Post', [PostController::class, 'store']);
Route::get('Post/{id}', [PostController::class, 'show']);
Route::put('Post/{id}', [PostController::class, 'update']);
Route::put('PostStatus/{id}', [PostController::class, 'updatePostStatus']);
Route::delete('Post/{id}', [PostController::class, 'destroy']);
