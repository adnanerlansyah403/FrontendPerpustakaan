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
Route::get("/books/{id}/destroy", [HomeController::class, "destroy"])->name("book.destroy");
Route::post("/books/store", [HomeController::class, "store"])->name("book.store");
Route::post("/books/{id}/update", [HomeController::class, "update"])->name("book.update");

// Routes Author

Route::get("/authors", [AuthorController::class, "index"])->name("author.index");
Route::get("/authors/{id}", [AuthorController::class, "showAuthor"])->name("author.show");
Route::get("/authors/create", [AuthorController::class, "createAuthor"])->name("author.create");


// Routes Category

Route::get("/categories", [CategoryController::class, "index"])->name("category.index");
Route::get("/categories/create", [CategoryController::class, "create"])->name("category.create");
Route::post("/categories/store", [CategoryController::class, "store"])->name("category.store");
Route::get("/categories/{id}/edit", [CategoryController::class, "edit"])->name("category.edit");
Route::post("/categories/{id}/update", [CategoryController::class, "update"])->name("category.update");
Route::get("/categories/{id}/show", [CategoryController::class, "show"])->name("category.show");
Route::get("/categories/{id}/destroy", [CategoryController::class, "destroy"])->name("category.destroy");
