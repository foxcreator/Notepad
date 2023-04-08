<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/createform', [HomeController::class, 'createForm'])->name('createform');
Route::get('/show/{id}', [HomeController::class, 'showOneNote'])->name('showonenote');
Route::post('/createnote',[HomeController::class, 'createNote'])->name('createNote');
Route::post('/updatenote/{id}',[HomeController::class, 'updateNote'])->name('updatenote');
Route::post('/deletenote/{id}',[HomeController::class, 'deleteNote'])->name('deletenote');

