<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController
};


Route::delete('users/{id}',[UserController::class , 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');
Route::post('/users',[UserController::class, 'store'])->name('users.store');

Route::get('/', function () {
    return view('welcome');
});


