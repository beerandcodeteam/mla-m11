<?php

use App\Http\Controllers\v2\ClientController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['auth:sanctum']], function() {
    Route::apiResource('clients', ClientController::class);
});