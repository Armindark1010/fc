<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/demo/test', function () {
    return view('tail');
});
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');

require __DIR__.'/demo.php';
