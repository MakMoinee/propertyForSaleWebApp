<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProperInfoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AgentDashboardController;
use App\Http\Controllers\AgentPropertyController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\ClientPropertyListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::post("/login", [LoginController::class, 'store']);
Route::resource("/admin_dashboard", AdminDashboardController::class);
Route::resource("/admin_users", AdminUserController::class);
Route::resource("/admin_property", AdminProperInfoController::class);
Route::resource("/agent_dashboard", AgentDashboardController::class);
Route::resource("/agent_property", AgentPropertyController::class);
Route::get("/logout", [LogoutController::class, 'index']);
Route::resource("/client_home", ClientHomeController::class);
Route::resource("/property_list", ClientPropertyListController::class);
Route::post("/charge", [PaymentController::class, 'charge']);
Route::post("/success", [PaymentController::class, 'success']);
