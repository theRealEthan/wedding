<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/sample-endpoint', function (Request $request) {
    // Process the request data and return a response
    return response()->json([
        'message' => 'Data received successfully!',
        'data' => $request->all() // Echo back the received data
    ]);
});
