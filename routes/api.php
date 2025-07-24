<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

// Auth routes
Route::post('/login', [AuthController::class, 'sanctumLogin']);
Route::post('/logout', [AuthController::class, 'sanctumLogout']);

// Protected route
Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return response()->json($request->user());
});
