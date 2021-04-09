<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaculityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;

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

Route::get("/",[FaculityController::class,'create']);

Route::get("/student",[StudentController::class,'create']);

Route::post("/studentread",[StudentController::class,'store']);

Route::get("/busadd",[BusController::class,'create']);

Route::post("/faculityread",[FaculityController::class,'store']);

Route::post("/busread",[BusController::class,'store']);

Route::get("/book",[BookController::class,'create']);

Route::post("/bookread",[BookController::class,'store']);

Route::get("/viewallfaculties",[FaculityController::class,'index']);

Route::post("/faculitysearch",[FaculityController::class,'search']);

Route::get("/faculty/{id}/edit",[FaculityController::class,'edit']);

Route::post("/facultyeditprocess/{id}",[FaculityController::class,'update']);