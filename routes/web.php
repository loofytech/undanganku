<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, "checkUser"])->name("dashboard");

Route::get("login", [AuthController::class, "login"])->name("login");
Route::post("login", [AuthController::class, "authenticate"])->name("authenticate");
Route::get("logout", [AuthController::class, "logout"])->name("logout");


Route::group(["prefix" => "user", "middleware" => ["isUser"]], function() {
    Route::get("/", [UserController::class, "index"])->name("dashboard.user");
    Route::get("undanganku", [UserController::class, "undanganku"])->name("undanganku");
});

Route::group(["prefix" => "admin", "middleware" => ["isAdmin"]], function() {
    Route::get("/", [AdminController::class, "index"])->name("dashboard.admin");
    Route::get("/pengguna", [AdminController::class, "pengguna"])->name("pengguna");
    Route::get("pengguna/create", [AdminController::class, "penggunaCreate"])->name("pengguna.create");
    Route::post("pengguna/store", [AdminController::class, "penggunaStore"])->name("pengguna.store");
    Route::get("/pengguna/data", [AdminController::class, "penggunaData"])->name("pengguna.data");
    Route::get("pengguna/edit/{id}", [AdminController::class, "penggunaEdit"])->name("pengguna.edit");
    Route::put("pengguna/update/{id}", [AdminController::class, "penggunaUpdate"])->name("pengguna.update");
});