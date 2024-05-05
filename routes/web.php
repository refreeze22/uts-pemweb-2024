<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Books;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
	return view('welcome');
}); */

# HOME
Route::get('/', [Home::class, 'index']);

# AUTH
Route::get('/auth/login', [UserAuth::class, 'login']);
Route::get('/auth/logout', [UserAuth::class, 'logout']);
Route::get('/auth/register', [UserAuth::class, 'register']);

# BOOKS
Route::get('/books', [Books::class, 'index']);
Route::post('/books/save/{id}', [Books::class, 'save']);
Route::get('/books/delete/{id}', [Books::class, 'delete']);

# CATEGORIES
Route::get('/categories', [Categories::class, 'index']);
Route::post('/categories/save/{id}', [Categories::class, 'save']);
Route::get('/categories/delete/{id}', [Categories::class, 'delete']);

# REVIEWS
Route::get('/reviews', [Reviews::class, 'index']);
Route::post('/reviews/save/{id}', [Reviews::class, 'save']);
Route::get('/reviews/delete/{id}', [Reviews::class, 'delete']);

# USERS
Route::get('/users', [Users::class, 'index']);