<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//Route::get('/user', function (Request $request) {
    //return $request->user();
//})->middleware('auth:sanctum');

Route::post('/citizen/verify', [UserApiController::class, 'verify']);


Route::get('/citizens', [UserApiController::class, 'index']);
