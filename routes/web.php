<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', [PostsController::class, "index"])->name("index");



Route::post('/post/add', [PostsController::class, "add"])->name("add");
Route::get('/delete/{id}', [PostsController::class, "delete"])->name("delete");
Route::post('/edit', [PostsController::class, "edit"])->name("edit");
Route::get('/like/{id}', [PostsController::class, "like"])->name("like");

Route::get('/admin/edit/{id}', [PostsController::class, "edit_view"])->name("admin/edit");

Route::get('/admin/add', function () {
    return view('admin.add');
});
