<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ordercontroller;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view-employee', [App\Http\Controllers\EmployeeController::class, 'view_employee'])->name('employee.view');
Route::get('/create-employee', [App\Http\Controllers\EmployeeController::class, 'create_employee'])->name('employee.create')->middleware('admin');
Route::post('/save-employee', [App\Http\Controllers\EmployeeController::class, 'save_employee'])->name('employee.save');
Route::get('/edit-employee/{id}', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('employee.edit')->middleware('admin');;
Route::put('/update-employee/{id}', [App\Http\Controllers\EmployeeController::class, 'update_employee'])->name('employee.update');
Route::get('/delete-employee/{id}', [App\Http\Controllers\EmployeeController::class, 'delete_employee'])->name('employee.delete')->middleware('admin');;
//Route::post('/save-employee', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('employee.save');
