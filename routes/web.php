<?php

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

Route::get('/', 'App\Http\Controllers\blog_Controller@index');
Route::get('/blog', 'App\Http\Controllers\blog_Controller@blog');
Route::get('/index', 'App\Http\Controllers\blog_Controller@index');
Route::get('/kelas', 'App\Http\Controllers\kelas_controller@index');
