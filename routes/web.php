<?php
namespace App\Http\Controllers;

use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\AboutPageController;
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
Route::get('/', [CompanyInfoController::class, 'show']);
// Route::get('/', 'CompanyInfoController@show');

Route::get('/about', [AboutPageController::class, 'show']);
