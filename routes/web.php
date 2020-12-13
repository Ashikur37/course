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

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'],function() {
    Route::get('/home','App\Http\Controllers\Admin\HomeController@index');
    Route::get('/course/delete/{course}','App\Http\Controllers\Admin\CourseController@destroy');

    //course/delete/
    Route::resource('/course','App\Http\Controllers\Admin\CourseController'); 
});

Route::get('/contact','App\Http\Controllers\Front\PageController@contact')->name('contact'); 
Route::get('/services','App\Http\Controllers\Front\PageController@service')->name('service'); 
Route::get('/teacher-info','App\Http\Controllers\Front\PageController@teacher')->name('teacher'); 
Route::get('/academic','App\Http\Controllers\Front\PageController@academic')->name('academic'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
