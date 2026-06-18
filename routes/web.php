<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[UserController::class,'index']);
Route::post('insert',[UserController::class,'insert'])->name('insert');
Route::get('users',[UserController::class,'get']);
Route::get('edit{id}',[UserController::class,'edit'])->name('edit');