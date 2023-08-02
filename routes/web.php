<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantsController;
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


Route::get('not_access', function () {
    return view('error.not_access');
});


Route::get('/login',[LoginController::class, 'login']);
Route::post('/login_insrt', [LoginController::class,'login_insrt']);
Route::get('/signout', [LoginController::class, 'signout']);
Route::post('/insert_regis', [LoginController::class, 'insert_regis']);

Route::get('/', [FrontController::class, 'index'])->name('login');
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/dashboard', [dashboardController::class, 'dashboard']);

Route::get('/properties', [PropertyController::class, 'properties']);
Route::post('/create_properties', [PropertyController::class, 'create_properties']);
Route::get('/destroy_propr/{id}', [PropertyController::class, 'destroy_propr']);
Route::get('/show_propr/{id}', [PropertyController::class ,'show_propr']);
Route::put('/update_propr/{id}', [PropertyController::class, 'update_propr']);

Route::get('/tenants', [TenantsController::class, 'tenants']);
Route::post('/insert_ten', [TenantsController::class, 'insert_ten']);
Route::get('/destroy_ten/{id}', [TenantsController::class, 'destroy_ten']);
Route::get('/show_ten/{id}', [TenantsController::class, 'show_ten']);
Route::put('/update_ten/{id}', [TenantsController::class, 'update_ten']);
Route::get('/trash', [TenantsController::class, 'trash']);
Route::get('/trash_prop', [PropertyController::class, 'trash']);
Route::get('/restore_ten/{id}',[TenantsController::class, 'restore_ten']);
Route::get('/force_delete/{id}', [TenantsController::class, 'force_delete']);;
Route::get('/restore_prop/{id}', [PropertyController::class , 'restore_prop']);
Route::get('/permanent_del/{id}', [PropertyController::class, 'permanent_del']);
});

Route::middleware(['auth', 'role:tenants'])->group(function (){
    Route::get('rental', [FrontController::class, 'rental']);
    Route::post('/insert_rental/', [FrontController::class, 'insert_rental']);
});