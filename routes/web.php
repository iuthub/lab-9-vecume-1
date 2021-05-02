<?php

use Illuminate\Routing\Router;
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

Route::get('/', function () {
    $posts = [
        [
            "id" => 1,
            "title" => "How to be a good programmer?",
            "content" => "You just should start coding and critical thinking, You also need to write something."
        ],
        [
            "id" => 2,
            "title" => "Great jokes",
            "content" => "Write it write it dont simply sit dont waste my time"
        ]
        ];
    return view('components.blog.posts', ["posts" => $posts]);
});

Route::get("/post", function () {
    return view("post");
});

Route::get('/admin/create', function () {
    return view('admin.create');
});

Route::get('/admin/edit/{id}', function () {
    return view('admin.edit');
});
