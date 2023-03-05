<?php

use App\Http\Controllers\v1\ClientController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['auth:sanctum']], function() {
    Route::apiResource('clients', ClientController::class);
});