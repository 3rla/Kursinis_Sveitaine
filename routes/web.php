<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/upload_feedbackkkkk', [HomeController::class, 'upload_feedbackkkkk']);

// NEWS FUNCTIONS

Route::get('/add_news', [AdminController::class, 'add_news']);

Route::post('/upload_news', [AdminController::class, 'upload_news']);

Route::get('/edit_news', [AdminController::class, 'edit_news']);

Route::get('/delete_news/{id}', [AdminController::class, 'delete_news']);

Route::get('/update_news/{id}', [AdminController::class, 'update_news']);

Route::post('/EditNewsInDB/{id}', [AdminController::class, 'EditNewsInDB']);



// Route::get('/search', [AdminController::class, 'search']);

Route::get('/user_list', [AdminController::class, 'user_list']);

Route::get('/update_user_data', [AdminController::class, 'update_user_data']);  //User edit

Route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);


//Maps routes

//EV POPULAR STATIONS FUNCTIONS

Route::get('/add_popular_view', [AdminController::class, 'add_popular_view']);

Route::post('/upload_popular', [AdminController::class, 'upload_popular']);

Route::get('/showstations', [AdminController::class, 'showstations']);

Route::get('/deletestation/{id}', [AdminController::class, 'deletestation']);

Route::get('/updatestation/{id}', [AdminController::class, 'updatestation']);

Route::post('/editstation/{id}', [AdminController::class, 'editstation']);
