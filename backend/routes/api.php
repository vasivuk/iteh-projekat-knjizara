<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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


//Public Routes

//Register user
Route::post('/users', [UserController::class, 'register']);
//Login user
Route::post('/users/login', [UserController::class, 'login']);
//Show all books
Route::get('/books', [BookController::class, 'index']);
//Show specific book
Route::get('/books/{id}', [BookController::class, 'show']);
//Show all categories
Route::get('/categories', [CategoryController::class, 'index']);
//Show specific category
Route::get('/categories', [CategoryController::class, 'show']);



//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/checkingAuthenticated', function () {
        return response()->json(['message'=>'You are in','status'=>200], 200);
    });
    //Logout user
    Route::post('/logout', [UserController::class, 'logout']);
    //Create new book

    //Edit book

    //Delete book

    //Create category

    //Delete category

    //Create author

    //Delete author

    //Show all orders

    //Show specific order

    //Create order
});
