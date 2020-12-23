<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\EmployeeTasksController;
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
//     return view('index');
// });

Route::get('/', [EmployeeTasksController::class, 'index']);
Route::get('/project/{id}', [ProjectsController::class, 'index']);
