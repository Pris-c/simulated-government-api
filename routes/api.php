<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\People;



//Route::get('/user', function (Request $request) {
    //return $request->user();
//})->middleware('auth:sanctum');

Route::apiResource('people', UserApiController::class); // Api para checar todos os dados
Route::post('people/verify', [UserApiController::class, 'verify']); //Api POST que faz a verificação específica em JSON 



