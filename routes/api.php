<?php

use App\Http\Controllers\Api\ApiEnfantsController;
use App\Http\Controllers\Api\ApiMenusController;
use App\Http\Controllers\Api\ApiNouvellesController;
use App\Http\Controllers\Api\ApiOwnersController;
use App\Http\Controllers\Api\ApiPersonnelsController;
use App\Http\Controllers\Api\ApiPlanningsController;
use App\Http\Controllers\Api\ApiUserController;
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

Route::get('/users', [ApiUserController::class, 'index']);
Route::get('/user', [ApiUserController::class, 'getUserById']);
Route::get('/user-by-username', [ApiUserController::class, 'getUserByUsername']);
Route::get('/enfants', [ApiEnfantsController::class, 'index']);
Route::get('/enfant', [ApiEnfantsController::class, 'getEnfantById']);
Route::get('/nouvelles', [ApiNouvellesController::class, 'index']);
Route::get('/nouvelle', [ApiNouvellesController::class, 'getNouvelleById']);
Route::get('/plannings', [ApiPlanningsController::class, 'index']);
Route::get('/planning', [ApiPlanningsController::class, 'getPlanningById']);
Route::get('/menus', [ApiMenusController::class, 'index']);
Route::get('/menu', [ApiMenusController::class, 'getMenuById']);
Route::get('/personnels', [ApiPersonnelsController::class, 'index']);
Route::get('/personnel', [ApiPersonnelsController::class, 'getPersonnelById']);
Route::get('/owners', [ApiOwnersController::class, 'index']);
Route::get('/owner', [ApiOwnersController::class, 'getOwnerById']);
