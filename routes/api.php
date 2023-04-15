<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::post('/courses', [CourseController::class, 'create'])->name('courses.create')->middleware('auth:api');
Route::post('/courses/{courseId}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll')->middleware('auth:api');
Route::delete('/courses/{courseId}', [CourseController::class, 'delete'])->name('courses.delete')->middleware('auth:api');


Route::post('/courses/{courseId}/posts', [PostController::class, 'create'])->name('posts.create')->middleware('auth:api');
Route::patch('/posts/{postId}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth:api');

Route::post('/posts/{postId}/reply', [PostController::class, 'reply'])->name('posts.reply')->middleware('auth:api');
