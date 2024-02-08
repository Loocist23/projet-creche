<?php

use App\Http\Controllers\Api\ApiEnfantsController;
use App\Http\Controllers\Api\ApiMenusController;
use App\Http\Controllers\Api\ApiNouvellesController;
use App\Http\Controllers\Api\ApiOwnersController;
use App\Http\Controllers\Api\ApiPersonnelsController;
use App\Http\Controllers\Api\ApiPlanningsController;
use App\Http\Controllers\Api\ApiUserController;
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

Route::middleware('auth:api')->group(function () {
    Route::get('/users', [ApiUserController::class, 'index']); // Reste en GET
    Route::post('/user', [ApiUserController::class, 'getUserById']); // Modifié en POST
    Route::post('/user-by-username', [ApiUserController::class, 'getUserByUsername']); // Modifié en POST
    Route::get('/enfants', [ApiEnfantsController::class, 'index']); // Reste en GET
    Route::post('/enfant', [ApiEnfantsController::class, 'getEnfantById']); // Modifié en POST
    Route::get('/nouvelles', [ApiNouvellesController::class, 'index']); // Reste en GET
    Route::post('/nouvelle', [ApiNouvellesController::class, 'getNouvelleById']); // Modifié en POST
    Route::get('/plannings', [ApiPlanningsController::class, 'index']); // Reste en GET
    Route::post('/planning', [ApiPlanningsController::class, 'getPlanningById']); // Modifié en POST
    Route::get('/menus', [ApiMenusController::class, 'index']); // Reste en GET
    Route::post('/menu', [ApiMenusController::class, 'getMenuById']); // Modifié en POST
    Route::get('/personnels', [ApiPersonnelsController::class, 'index']); // Reste en GET
    Route::post('/personnel', [ApiPersonnelsController::class, 'getPersonnelById']); // Modifié en POST
    Route::put('/personnel', [ApiPersonnelsController::class, 'update']);
    Route::delete('/personnel', [ApiPersonnelsController::class, 'destroy']);
    Route::get('/owners', [ApiOwnersController::class, 'index']); // Reste en GET
    Route::post('/owner', [ApiOwnersController::class, 'getOwnerById']); // Modifié en POST
});

