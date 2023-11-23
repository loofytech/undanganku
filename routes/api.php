<?php

use App\Http\Controllers\StaticController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/mempelai/{username}", [StaticController::class, "getMempelai"]);
Route::post("/greeting", [StaticController::class, "storeGreeting"]);
