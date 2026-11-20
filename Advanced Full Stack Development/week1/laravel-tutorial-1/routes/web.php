<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use 

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('form');
});

Route::post('/contact', function (Request $request) {

    $validated_data = $request->validate([
        "name" => ["required", "max:10"],
        "email" => ["required", "email"]
    ]);

    return "Received name: " . $validated_data["name"] .
        " Received email: " . $validated_data["email"];

});


