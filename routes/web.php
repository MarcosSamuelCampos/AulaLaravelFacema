<?php

use App\Http\Controllers\PostagemCotroller;
use App\Models\postagem;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[PostagemCotroller::class,'index'])->name('index');