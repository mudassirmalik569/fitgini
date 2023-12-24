<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin Authentication Routes
Route::middleware(['web'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login.post');
    Route::get('admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
});

// Admin Routes

Route::middleware(['web', 'auth:admin'])->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/user', [App\Http\Controllers\UserController ::class, 'index'])->name('admin.user');
    Route::get('admin/user/create', [App\Http\Controllers\UserController ::class, 'create'])->name('admin.user.create');
    Route::post('admin/user/store', [App\Http\Controllers\UserController ::class, 'store'])->name('admin.user.store');
    Route::get('admin/user/edit/{id}', [App\Http\Controllers\UserController ::class, 'edit'])->name('admin.user.edit');
    Route::put('admin/user/update/{id}', [App\Http\Controllers\UserController ::class, 'update'])->name('admin.user.update');
    Route::get('admin/user/delete/{id}', [App\Http\Controllers\UserController ::class, 'delete'])->name('admin.user.delete');

    // activity

    Route::get('admin/activity', [App\Http\Controllers\ActivityController ::class, 'index'])->name('admin.activity');
    Route::get('admin/activity/create', [App\Http\Controllers\ActivityController ::class, 'create'])->name('admin.activity.create');
    Route::post('admin/activity/store', [App\Http\Controllers\ActivityController ::class, 'store'])->name('admin.activity.store');
    Route::get('admin/activity/edit/{id}', [App\Http\Controllers\ActivityController ::class, 'edit'])->name('admin.activity.edit');
    Route::post('admin/activity/update/{id}', [App\Http\Controllers\ActivityController ::class, 'update'])->name('admin.activity.update');
    Route::get('admin/activity/delete/{id}', [App\Http\Controllers\ActivityController ::class, 'delete'])->name('admin.activity.delete');

    // nutrition

    Route::get('admin/nutrition', [App\Http\Controllers\NutritionController ::class, 'index'])->name('admin.nutrition');
    Route::get('admin/nutrition/create', [App\Http\Controllers\NutritionController ::class, 'create'])->name('admin.nutrition.create');
    Route::post('admin/nutrition/store', [App\Http\Controllers\NutritionController ::class, 'store'])->name('admin.nutrition.store');
    Route::get('admin/nutrition/edit/{id}', [App\Http\Controllers\NutritionController ::class, 'edit'])->name('admin.nutrition.edit');
    Route::post('admin/nutrition/update/{id}', [App\Http\Controllers\NutritionController ::class, 'update'])->name('admin.nutrition.update');
    Route::get('admin/nutrition/delete/{id}', [App\Http\Controllers\NutritionController ::class, 'delete'])->name('admin.nutrition.delete');

    // goals

    Route::get('admin/goals', [App\Http\Controllers\GoalsController ::class, 'index'])->name('admin.goals');
    Route::get('admin/goals/create', [App\Http\Controllers\GoalsController ::class, 'create'])->name('admin.goals.create');
    Route::post('admin/goals/store', [App\Http\Controllers\GoalsController ::class, 'store'])->name('admin.goals.store');
    Route::get('admin/goals/edit/{id}', [App\Http\Controllers\GoalsController ::class, 'edit'])->name('admin.goals.edit');
    Route::post('admin/goals/update/{id}', [App\Http\Controllers\GoalsController ::class, 'update'])->name('admin.goals.update');
    Route::get('admin/goals/delete/{id}', [App\Http\Controllers\GoalsController ::class, 'delete'])->name('admin.goals.delete');


    // social

    Route::get('admin/social', [App\Http\Controllers\SocialController ::class, 'index'])->name('admin.social');
    Route::get('admin/social/create', [App\Http\Controllers\SocialController ::class, 'create'])->name('admin.social.create');
    Route::post('admin/social/store', [App\Http\Controllers\SocialController ::class, 'store'])->name('admin.social.store');
    Route::get('admin/social/edit/{id}', [App\Http\Controllers\SocialController ::class, 'edit'])->name('admin.social.edit');
    Route::post('admin/social/update/{id}', [App\Http\Controllers\SocialController ::class, 'update'])->name('admin.social.update');
    Route::get('admin/social/delete/{id}', [App\Http\Controllers\SocialController ::class, 'delete'])->name('admin.social.delete');
    

    

});


