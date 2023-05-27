<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategorieController;
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

Route::get('/', [AppController::class, 'index'])->name('index');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::post('send-contact', [AppController::class, 'sendContact'])->name('send-contact');

Route::get('category', [CategorieController::class, 'category'])->name('category');

Route::post('category', [CategorieController::class, 'PostCategory'])->name('PostCategory');

Route::get('liste', [CategorieController::class, 'liste'])->name('liste');

Route::get('edit_categorie/{id}', [CategorieController::class, 'edit_categorie'])->name('edit_categorie');

Route::put('update_categorie/{id}', [CategorieController::class, 'update_categorie'])->name('update_categorie');

Route::delete('delete_category/{id}', [CategorieController::class, 'delete_category'])->name('delete_category');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
