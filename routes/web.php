<?php

use App\Http\Controllers\Employee;
use App\Http\Controllers\Department;
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


Route::get('/',[Employee::class ,"index"]); 
// Route::get('/',[Employee::class ,"index"]); 

Route::get('/department',[Department::class ,"index"]); 

Route::get('/greet',[Employee::class ,"greetings"]); 

// Route::get('/user/{id}',[Employee::class ,'show'])->middleware('auth'); 

// Route::get('/user/{id}',[Employee::class ,'show']); 

