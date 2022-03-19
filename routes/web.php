<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/',[TaskController::class, 'index'])->name('index');
Route::post('/',[TaskController::class, 'create'])->name('create');
Route::get('/edit/{id}',[TaskController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[TaskController::class, 'update'])->name('update');
Route::get('/delete/{id}',[TaskController::class, 'destroy'])->name('destroy');





