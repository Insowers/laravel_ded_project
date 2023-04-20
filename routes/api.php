<?php

use App\Http\Controllers\MonsterController;
use App\Models\Monster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::get('/monsters',[MonsterController::class, 'monsters_all_data']);



Route::get('/monster/{id}',MonsterController::class, 'single_monster_data'); */

Route::apiResource('monsters', MonsterController::class);

Route::get('/name_list',[MonsterController::class, 'name_list']);