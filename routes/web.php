<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function () {
    /* User */
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::delete('/admin/users/{users}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/{users}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{users}', [UserController::class, 'update'])->name('admin.users.update');
    /* Admin */
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    /* Kid */
    Route::get('/admin/children', [EnfantController::class, 'index'])->name('admin.children.index');
    Route::get('/admin/children/create', [EnfantController::class, 'create'])->name('admin.children.create');
    Route::post('/admin/children', [EnfantController::class, 'store'])->name('admin.children.store');
    Route::delete('/admin/children/{enfant}', [EnfantController::class, 'destroy'])->name('admin.children.destroy');
    Route::get('/admin/children/{enfant}/edit', [EnfantController::class, 'edit'])->name('admin.children.edit');
    Route::put('/admin/children/{enfant}', [EnfantController::class, 'update'])->name('admin.children.update');

    Route::get('/admin/menus/index', [MenuController::class, 'index'])->name('admin.menus.index');
    Route::get('/admin/menus/create', [MenuController::class, 'create'])->name('admin.menus.create');
    Route::post('/admin/menus', [MenuController::class, 'store'])->name('admin.menus.store');
    Route::delete('/admin/menus/{menu}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');
    Route::get('/admin/menus/{menu}/edit', [MenuController::class, 'edit'])->name('admin.menus.edit');
    Route::put('/admin/menus/{menu}', [MenuController::class, 'update'])->name('admin.menus.update');

    Route::get('/admin/news/index', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/admin/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::delete('/admin/news/{news}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/admin/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/admin/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
    /* Owner */
    Route::get('/admin/owners', [OwnerController::class, 'index'])->name('admin.owners.index');
    Route::get('/admin/owners/create', [OwnerController::class, 'create'])->name('admin.owners.create');
    Route::post('/admin/owners', [OwnerController::class, 'store'])->name('admin.owners.store');
    Route::delete('/admin/owners/{owner}', [OwnerController::class, 'destroy'])->name('admin.owners.destroy');
    Route::get('/admin/owners/{owner}/edit', [OwnerController::class, 'edit'])->name('admin.owners.edit');
    Route::put('/admin/owners/{owner}', [OwnerController::class, 'update'])->name('admin.owners.update');

    Route::get('/admin/plannings/index', [PlanningController::class, 'index'])->name('admin.plannings.index');
    Route::get('/admin/plannings/create', [PlanningController::class, 'create'])->name('admin.plannings.create');
    Route::post('/admin/plannings', [PlanningController::class, 'store'])->name('admin.plannings.store');
    Route::delete('/admin/plannings/{planning}', [PlanningController::class, 'destroy'])->name('admin.plannings.destroy');
    Route::get('/admin/plannings/{planning}/edit', [PlanningController::class, 'edit'])->name('admin.plannings.edit');
    Route::put('/admin/plannings/{planning}', [PlanningController::class, 'update'])->name('admin.plannings.update');

    Route::get('/admin/staffs/index', [PersonnelController::class, 'index'])->name('admin.staffs.index');
    Route::get('/admin/staffs/create', [PersonnelController::class, 'create'])->name('admin.staffs.create');
    Route::post('/admin/staffs', [PersonnelController::class, 'store'])->name('admin.staffs.store');
    Route::delete('/admin/staffs/{personnel}', [PersonnelController::class, 'destroy'])->name('admin.staffs.destroy');
    Route::get('/admin/staffs/{personnel}/edit', [PersonnelController::class, 'edit'])->name('admin.staffs.edit');
    Route::put('/admin/staffs/{personnel}', [PersonnelController::class, 'update'])->name('admin.staffs.update');

    Route::get('admin/kid_planning/index', [EnfantController::class, 'index'])->name('admin.kid_planning.index');
    Route::get('admin/kid_planning/create', [EnfantController::class, 'create'])->name('admin.kid_planning.create');
    Route::post('admin/kid_planning', [EnfantController::class, 'store'])->name('admin.kid_planning.store');
    Route::delete('admin/kid_planning/{kid_planning}', [EnfantController::class, 'destroy'])->name('admin.kid_planning.destroy');
    Route::get('admin/kid_planning/{kid_planning}/edit', [EnfantController::class, 'edit'])->name('admin.kid_planning.edit');
    Route::put('admin/kid_planning/{kid_planning}', [EnfantController::class, 'update'])->name('admin.kid_planning.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
