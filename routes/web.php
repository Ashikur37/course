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
    Route::resource('/course','App\Http\Controllers\Admin\CourseController'); 
    Route::get('/course/delete/{course}','App\Http\Controllers\Admin\CourseController@destroy');
    Route::resource('/department','App\Http\Controllers\Admin\DepartmentController'); 
    Route::get('/department/delete/{department}','App\Http\Controllers\Admin\DepartmentController@destroy');
    Route::resource('/teacher','App\Http\Controllers\Admin\TeacherController'); 
    Route::get('/teacher/delete/{teacher}','App\Http\Controllers\Admin\TeacherController@destroy');

});
// Teacher routes
Route::group(['prefix' => 'teacher',  'middleware' => 'is_teacher'],function() {
    Route::get('/','App\Http\Controllers\Teacher\HomeController@index');
    Route::get('/course','App\Http\Controllers\Teacher\CourseController@index');
    Route::get('/{course}/chapter','App\Http\Controllers\Teacher\ChapterController@index');
    Route::get('/{course}/chapter/create','App\Http\Controllers\Teacher\ChapterController@create');
    Route::post('/{course}/chapter/create','App\Http\Controllers\Teacher\ChapterController@store');
    Route::get('/chapter/delete/{chapter}','App\Http\Controllers\Teacher\ChapterController@destroy');


    //course/3/chapter/create

});
Route::get('/contact','App\Http\Controllers\Front\PageController@contact')->name('contact'); 
Route::get('/services','App\Http\Controllers\Front\PageController@service')->name('service'); 
Route::get('/teacher-info','App\Http\Controllers\Front\PageController@teacher')->name('teacher'); 
Route::get('/academic','App\Http\Controllers\Front\PageController@academic')->name('academic'); 
Route::get('/course/{name}','App\Http\Controllers\Front\PageController@course');
Route::get('/chapter/{course}/{chapter}','App\Http\Controllers\Front\PageController@chapter');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
