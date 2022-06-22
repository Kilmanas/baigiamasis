<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::resource('/tripsheet', 'App\Http\Controllers\TripsheetsController');
Route::post('/getmodels', [App\Http\Controllers\CarModelController::class, 'getModels'])->name('getmodels');
Route::post('/getoptions', [App\Http\Controllers\FuelOptionController::class, 'fuelOption'])->name('getoptions');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
Route::get('/role/assign', [App\Http\Controllers\RoleController::class, 'assign'])->name('role.assign');
Route::get('/permission/assign', [App\Http\Controllers\RoleController::class, 'permissionToRole'])
    ->name('permission.assign');
Route::post('/comadmin/store/user', [App\Http\Controllers\CompanyAdminPanelController::class, 'storeUser'])
    ->name('user.store');
Route::get('/comadmin/user/create', [App\Http\Controllers\CompanyAdminPanelController::class, 'createUser'])
    ->name('user.create');
Route::get('/comadmin/user/edit/{user_id}', [App\Http\Controllers\CompanyAdminPanelController::class, 'userEdit'])
    ->name('user.edit');
Route::get('/comadmin/user/deactivate/{user_id}', [App\Http\Controllers\CompanyAdminPanelController::class, 'deactivate'])
    ->name('user.deactivate');
Route::get('/comadmin/tripsheet/list', [App\Http\Controllers\CompanyAdminPanelController::class, 'companyTripsheets'])
    ->name('company.tripsheets');
Route::post('/comadmin/user/update/{user_id}', [App\Http\Controllers\CompanyAdminPanelController::class, 'userUpdate'])
    ->name('user.update');
Route::get('/comadmin/user/list', [App\Http\Controllers\CompanyAdminPanelController::class, 'showUsers'])->name('user.list');
Route::get('/export/tripsheet/{id}', [App\Http\Controllers\ExportController::class, 'tripsheetExport'])->name('export.tripsheet');
Route::get('/export/report/', [App\Http\Controllers\ExportController::class, 'reportExport'])->name('export.report');
Route::get('/report/', [App\Http\Controllers\ReportController::class, 'select'])->name('report.select');
Route::get('/stats/', [App\Http\Controllers\StatisticsController::class, 'index'])->name('stats.index');
Route::post('/stats/period', [App\Http\Controllers\StatisticsController::class, 'monthStats'])->name('stats.month');

