<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "auth"], function () {

    Route::group(["middleware" => "auth:api"], function () {
        Route::get("/logout", [LandingController::class, "logout"]);
        Route::get("/refresh", [LandingController::class, "refresh"]);
    });


    Route::post("/register", [AuthController::class, "register"]);
    Route::post("/login", [AuthController::class, "login"]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
