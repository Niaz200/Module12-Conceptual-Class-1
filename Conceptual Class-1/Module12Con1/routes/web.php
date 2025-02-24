<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubjectController;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/students',[StudentController::class, 'index']);
Route::get('/profiles',[ProfileController::class, 'index']);
Route::get('/comments',[CommentController::class, 'index']);
Route::get('/subjects',[SubjectController::class, 'index']);
