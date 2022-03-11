<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\Serviceprovidercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [ServiceproviderController::class, 'home'])->name('home');
//registration
Route::get('/serviceproviderRegistration',[ServiceproviderController::class, 'serviceproviderRegistration'])->name('serviceproviderRegistration');
Route::post('/serviceproviderRegistration',[ServiceproviderController::class, 'serviceproviderRegistrationSubmit'])->name('serviceproviderRegistration');
//login
Route::get('/serviceproviderlogin',[ServiceproviderController::class, 'serviceproviderlogin'])->name('serviceproviderlogin');
Route::post('/serviceproviderlogin',[ServiceproviderController::class, 'serviceproviderloginSubmit'])->name('serviceproviderlogin');
Route::get('/serviceDash', [ServiceproviderController::class, 'serviceDash'])->name('serviceDash');

Route::get('/serviceproviderInfo', [ServiceproviderController::class, 'serviceproviderInfo'])->name('serviceproviderInfo');

Route::get('/serviceproviderUpdate', [ServiceproviderController::class, 'serviceproviderUpdate'])->name('serviceproviderUpdate');
Route::post('/serviceproviderUpdate', [ServiceproviderController::class, 'serviceproviderUpdateSubmit'])->name('serviceproviderUpdate');

Route::get('/serviceproviderLogout', [ServiceproviderController::class, 'serviceproviderLogout'])->name('serviceproviderLogout');