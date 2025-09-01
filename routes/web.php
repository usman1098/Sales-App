<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('welcome');
// });

//***********************/
//Admin Routes
//*********************/

// Route::group(['prefix' => 'admin'], function () {

    Route::any('login', [AdminAuthController::class, 'admin_login'])->name('admin.login')->middleware('laravelguest');

    // Route::group(['middleware' => 'laravelauth:superadmin'], function () {

        Route::get('logout', [AdminAuthController::class, 'logout'])->name("admin.logout");

        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'dashboard')->name('admin.dashboard');
        });


        Route::controller(SettingsController::class)->group(function () {
            Route::group(['middleware' => ['permission:manage settings']], function () {
                Route::any('settings', 'setting')->name('admin.settings');
            });
        });
        Route::prefix('users')->controller(UserController::class)->group(function () {
            Route::group(['middleware' => ['permission:manage users']], function () {
                Route::get('/', 'user_list')->name('admin.users');
            });
            Route::group(['middleware' => ['permission:create users']], function () {
                Route::any('add', 'add_user')->name('admin.user.add');
            });
            Route::group(['middleware' => ['permission:edit users']], function () {
                Route::any('edit/{id}', 'edit_user')->name('admin.user.edit');
            });
        });
        Route::prefix('roles')->controller(UserController::class)->group(function () {
            Route::group(['middleware' => ['permission:manage roles']], function () {
                Route::get('/', 'all_roles')->name('admin.roles');
            });
            Route::group(['middleware' => ['permission:create roles']], function () {
                Route::post('add', 'add_admin_role')->name('admins.roles.add');
            });
            Route::group(['middleware' => ['permission:edit roles']], function () {
                Route::post('update/{id}', 'update_admin_role')->name('admins.roles.edit');
            });
            Route::group(['middleware' => ['permission:delete roles']], function () {
                Route::get('delete/{id}', 'delete_admin_role')->name('admins.roles.delete');
            });
            // Route::any('edit/{id}', 'edit_user')->name('admin.user.edit');

        });

        Route::prefix('discount-codes')->controller(DiscountController::class)->group(function () {

            Route::group(['middleware' => ['permission:manage discounts']], function () {
                Route::get('/', 'discount_codes_list')->name('admin.discount_codes');
                Route::any('usage/{id}', 'urmeals_usage')->name('admin.discount_codes.urmeals.usage');
            });
            Route::group(['middleware' => ['permission:create discounts']], function () {
                Route::any('add', 'add_discount_codes')->name('admin.discount_codes.add');
            });
            Route::group(['middleware' => ['permission:edit discounts']], function () {
                Route::any('edit/{id}', 'edit_discount_codes')->name('admin.discount_codes.edit');
            });
        });
    // });
// });
