<?php

use App\Http\Controllers\Employee;
use App\Http\Controllers\Department;
use App\Http\Controllers\Home;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home page
Route::get('/',[Home::class ,"home"]); 

// List of Department
Route::get('/department',[Home::class ,"department"]); 

// List of Employees
Route::get('/employee',[Home::class ,"employees"]);

Route::get('/greet',[Employee::class ,"greetings"]); 






// Route::get('/user/{id}',[Employee::class ,'show'])->middleware('auth'); 

// Route::get('/user/{id}',[Employee::class ,'show']); 

