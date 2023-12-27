<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route:: get('/', function () {
    return view('index');
})->name('home');

Route::get('/catagory/{catagory}',
 [MoviesController::class, 'show_movies_by_catagory'])
 ->name('catagory');

 Route::get('contact', function () {
    return view('contact');
 })->name('contact');

 Route::get('admin', [AdminController::class, 'admin_home'])
 ->name('admin_home');

Route::post('admin/store_movie', [AdminController::class, 'store_movie'])
->name('store_movie');

Route::get('admin/upload_movie', [AdminController::class, 'upload_movie'])
->name('upload_movie');

Route::post('submit_selected_movies', [adminController::class, 'submit_selected_movies'])
->name('submit_selected_movies');

Route::get('admin/ordered_movies', [adminController::class,'ordered_movies'])
->name('ordered_movies');

Route::get('admin/delete_order/{id}', [AdminController::class,'delete_order'])
->name('delete_order');

Route::get('admin/edit_selected_movie/{id}', [AdminController::class, 'edit_selected_movie'])
->name('edit_selected_movie');

Route::post('admin/save_edited_movie/{id}', [AdminController::class, 'save_edited_movie'])
->name('save_edited_movie');
