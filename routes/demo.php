<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/demo/test', function () {
    return view('test');
});
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');
Route::get('/demo/coach', function () {
    return view('democoach');
})->name('coach');
Route::get('/demo/train', function () {
    return view('demo_train');
})->name('train');
Route::get('/demo/players', function () {
    return view('demo_players');
})->name('players');
