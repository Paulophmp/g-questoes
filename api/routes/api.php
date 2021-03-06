<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('assuntos', 'AssuntoController')->only(['index']);
Route::apiResource('orgaos', 'OrgaoController')->only(['index']);
Route::apiResource('bancas', 'BancaController')->only(['index']);
Route::apiResource('questoes', 'QuestaoController')->only(['index']);
