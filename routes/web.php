<?php

use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
 
Route::resource('companies', CompanyCRUDController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('managers', ManagerController::class);