<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});

// Route::get('posts', function () {
//     return view('app',[
//         'posts' => Post::all()
//     ]);
// });

// different ways to call the index funciton in the controllers
Route::resource('posts', PostsController::class);
Route::get('/users', [UsersController::class, 'index']);

// Route::get('user-data', function() {
//     $model = User::query();

//     $jsonResponse =  Datatables::eloquent($model)
//                 ->addColumn('intro', 'Hi {{$name}}!')
//                 ->make();

//     $data = json_decode($jsonResponse->content(), TRUE);
//     return $data["data"];
// });

// this will get all the users
Route::get('usersForDatatable', [UsersController::class, 'getUsers'])->name('get.users');
// this will load the view
Route::get('user-data', [UsersController::class, 'indexDataTable']);

// this will get all the posts
Route::get('postsForDatatable', [PostsController::class, 'getPosts'])->name('get.posts');
// this will load the view
Route::get('post-data', [PostsController::class, 'indexDataTable']);


