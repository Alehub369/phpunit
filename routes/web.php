<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return 'hola soy about';
});

Route::view('profile', 'profile');


/* Route::post('profile', function (Illuminate\Http\Request $request) {
    $request->file('photo')->store('profiles');

    return redirect('profile');
}); */

// Route::post('profile', [App\Http\Controllers\ProfileController::class, 'upload']);

Route::post('/profile', [ProfileController::class, 'upload']);


