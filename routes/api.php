<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function() {
    return response(['message' => 'hello'], 200);
});


require __DIR__.'/auth.php';