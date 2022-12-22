<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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


// Routes Book

Route::get('/', [HomeController::class, "index"])->name("homepage");
Route::get("/books/{id}/show", [HomeController::class, "show"])->name("book.show");
Route::get("/books/{id}/edit", [HomeController::class, "edit"])->name("book.edit");
Route::get("/books/create", [HomeController::class, "create"])->name("book.create");
Route::post("/books/store", [HomeController::class, "store"])->name("book.store");

// Routes Author

Route::get("/authors", [AuthorController::class, "index"])->name("author.index");
Route::get("/authors/{id}", [AuthorController::class, "showAuthor"])->name("author.show");
Route::get("/authors/create", [AuthorController::class, "createAuthor"])->name("author.create");


// Routes Category

Route::get("/categories", [CategoryController::class, "index"])->name("category.index");
Route::get("/categories/{id}", [CategoryController::class, "showCategory"])->name("category.show");
Route::get("/categories/create", [CategoryController::class, "createCategory"])->name("category.create");