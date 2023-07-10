<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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


Route::get('/sign-in', function () {
    // $posts = auth()->user()->usersCoolPosts()->latest()->get();
    $posts = Post::where('user_id', auth()->id())->get();
    return view('sign-in', ['posts' => $posts]);
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

//User related routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//Blog related routes
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);