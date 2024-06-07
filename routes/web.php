<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;

Route::get('/', [ProductsController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);


Route::get('/test', function () {
    return 'Test';
});

/* Display the form to add a new product */
Route::get('/products/create', [ProductsController::class, 'create']);

/* Save the new product into the database */
Route::post('/products/create', [ProductsController::class, 'store']);

/* Display one product */
Route::get('/products/view/{product_id}', [ProductsController::class, 'view']);

/* Displays the form du modify a product */
Route::get('/products/modify/{product_id}', [ProductsController::class, 'modify']);

/* Save changes in the database */
Route::post('/products/modify/{product_id}', [ProductsController::class, 'save']);

/* Delete a product */
Route::get('/products/delete/{product_id}', [ProductsController::class, 'delete']);

/* Show all Suppliers */
Route::get('/suppliers', [SuppliersController::class, 'index']);

/* Display one supplier details */
Route::get('/suppliers/view/{id}', [SuppliersController::class, 'view']);

/* Form to create a supplier */
Route::get('/suppliers/create', [SuppliersController::class, 'create']);

/* Add new supplier in DB */
Route::post('/suppliers/create', [SuppliersController::class, 'store']);

/* Change and save a supplier */
Route::get('/suppliers/modify/{id}', [SuppliersController::class, 'modify']);
Route::post('/suppliers/modify/{id}', [SuppliersController::class, 'save']);

/* Delete supplier */
Route::get('/suppliers/delete/{id}', [SuppliersController::class, 'delete']);
