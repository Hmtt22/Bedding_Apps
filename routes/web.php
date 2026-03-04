<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\SettingBedController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('layout.index');
    })->name('layouts.index');

    // Buildings
    Route::get('/buildings', [BuildingController::class, 'index'])->name('buildings.index');
    // Route::get('/buildings/create', [BuildingController::class, 'create'])->name('buildings.create');
    Route::post('/buildings', [BuildingController::class, 'store'])->name('buildings.store');
    Route::get('/buildings/{id}/edit', [BuildingController::class, 'edit'])->name('buildings.edit');
    Route::put('/buildings/{id}', [BuildingController::class, 'update'])->name('buildings.update');
    Route::delete('/buildings/{id}', [BuildingController::class, 'destroy'])->name('buildings.destroy');

    // Rooms
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    // Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('/rooms/{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');

    // Beds
    Route::get('/beds', [BedController::class, 'index'])->name('beds.index');
    // Route::get('/beds/create', [BedController::class, 'create'])->name('beds.create');
    Route::post('/beds', [BedController::class, 'store'])->name('beds.store');
    Route::get('/beds/{id}/edit', [BedController::class, 'edit'])->name('beds.edit');
    Route::put('/beds/{id}', [BedController::class, 'update'])->name('beds.update');
    Route::delete('/beds/{id}', [BedController::class, 'destroy'])->name('beds.destroy');

    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Roles
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // User Logins
    Route::get('/userlogins', [UserLoginController::class, 'index'])->name('userlogins.index');
    // Route::get('/userlogins/create', [UserLoginController::class, 'create'])->name('userlogins.create');
    Route::post('/userlogins', [UserLoginController::class, 'store'])->name('userlogins.store');
    Route::get('/userlogins/{id}/edit', [UserLoginController::class, 'edit'])->name('userlogins.edit');
    Route::put('/userlogins/{id}', [UserLoginController::class, 'update'])->name('userlogins.update');
    Route::delete('/userlogins/{id}', [UserLoginController::class, 'destroy'])->name('userlogins.destroy');

    // Setting Bed
    Route::get('/setting_beds', [SettingBedController::class, 'index'])->name('setting_beds.index');
    // Route::get('/setting_beds/create', [SettingBedController::class, 'create'])->name('setting_beds.create');
    Route::post('/setting_beds', [SettingBedController::class, 'store'])->name('setting_beds.store');
    Route::get('/setting_beds/{id}/edit', [SettingBedController::class, 'edit'])->name('setting_beds.edit');
    Route::put('/setting_beds/{id}', [SettingBedController::class, 'update'])->name('setting_beds.update');
    Route::delete('/setting_beds/{id}', [SettingBedController::class, 'destroy'])->name('setting_beds.destroy');


});
