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
    Route::resource('/motivation','App\Http\Controllers\Admin\MotivationController'); 
    Route::resource('/bangladesh','App\Http\Controllers\Admin\BangladeshController');
    Route::resource('/world','App\Http\Controllers\Admin\WorldController');

    Route::resource('/poet','App\Http\Controllers\Admin\PoetController'); 
    Route::get('/poet/delete/{poet}','App\Http\Controllers\Admin\PoetController@destroy');
    Route::get('/course/delete/{course}','App\Http\Controllers\Admin\CourseController@destroy');
    Route::resource('/department','App\Http\Controllers\Admin\DepartmentController'); 
    Route::get('/department/delete/{department}','App\Http\Controllers\Admin\DepartmentController@destroy');
    Route::resource('/teacher','App\Http\Controllers\Admin\TeacherController'); 
    Route::get('/teacher/delete/{teacher}','App\Http\Controllers\Admin\TeacherController@destroy');
    Route::resource('/student','App\Http\Controllers\Admin\StudentController');
    Route::get('/student/pending','App\Http\Controllers\Admin\StudentController@pending')->name('student.pending'); 
    Route::get('/student/delete/{student}','App\Http\Controllers\Admin\StudentController@destroy');

    Route::resource('/current-affairs','App\Http\Controllers\Admin\CurrentAffairsController');
    Route::get('/current-affairs/delete/{currentAffair}','App\Http\Controllers\Admin\CurrentAffairsController@destroy');
 
    Route::resource('/bengali-grammer','App\Http\Controllers\Admin\GrammerController');
    Route::get('/bengali-grammer/delete/{bengaliGrammer}','App\Http\Controllers\Admin\GrammerController@destroy');

    Route::resource('/english-grammer','App\Http\Controllers\Admin\EnglishGrammerController');
    Route::get('/english-grammer/delete/{englishGrammer}','App\Http\Controllers\Admin\EnglishGrammerController@destroy');


    Route::resource('/math','App\Http\Controllers\Admin\MathController');
    Route::get('/math/delete/{mathTopic}','App\Http\Controllers\Admin\MathController@destroy');
});
// Teacher routes
Route::group(['prefix' => 'teacher',  'middleware' => 'is_teacher'],function() {
    Route::get('/','App\Http\Controllers\Teacher\HomeController@index');
    Route::get('/course','App\Http\Controllers\Teacher\CourseController@index');
    Route::get('/{course}/chapter','App\Http\Controllers\Teacher\ChapterController@index');
    Route::get('/{course}/chapter/create','App\Http\Controllers\Teacher\ChapterController@create');
    Route::post('/{course}/chapter/create','App\Http\Controllers\Teacher\ChapterController@store');
    Route::get('/chapter/delete/{chapter}','App\Http\Controllers\Teacher\ChapterController@destroy'); 
    Route::get('/{chapter}/topic','App\Http\Controllers\Teacher\TopicController@index');
    Route::get('/{chapter}/topic/create','App\Http\Controllers\Teacher\TopicController@create');
    Route::post('/{chapter}/topic/create','App\Http\Controllers\Teacher\TopicController@store');
    Route::get('/topic/delete/{topic}','App\Http\Controllers\Teacher\TopicController@destroy'); 
    Route::get('/{topic}/exercise','App\Http\Controllers\Teacher\ExerciseController@index');
    Route::get('/{topic}/exercise/create','App\Http\Controllers\Teacher\ExerciseController@create');
    Route::post('/{topic}/exercise/create','App\Http\Controllers\Teacher\ExerciseController@store');
    Route::get('/exercise/delete/{exercise}','App\Http\Controllers\Teacher\ExerciseController@destroy'); 

    Route::get('/{course}/exam','App\Http\Controllers\Teacher\ExamController@index');
    Route::get('/{course}/exam/create','App\Http\Controllers\Teacher\ExamController@create');
    Route::post('/{course}/exam/create','App\Http\Controllers\Teacher\ExamController@store');
    Route::get('/exam/delete/{exam}','App\Http\Controllers\Teacher\ExamController@destroy'); 
    //course/3/chapter/create

});
Route::get('/contact','App\Http\Controllers\Front\PageController@contact')->name('contact'); 
Route::get('/motivation','App\Http\Controllers\Front\PageController@motivation'); 
Route::get('/services','App\Http\Controllers\Front\PageController@service')->name('service'); 
Route::get('/teacher-info','App\Http\Controllers\Front\PageController@teacher')->name('teacher'); 
Route::get('/academic','App\Http\Controllers\Front\PageController@academic')->name('academic');
//course/apply/5
Route::get('/course/apply/{course}','App\Http\Controllers\Front\PageController@applyCourse');
Route::post('/pay/{course}','App\Http\Controllers\Front\PageController@payCourse');
Route::get('/literature','App\Http\Controllers\Front\PageController@literature')->name('literature'); 
Route::get('/course/{name}','App\Http\Controllers\Front\PageController@course');
Route::get('/chapter/{course}/{chapter}','App\Http\Controllers\Front\PageController@chapter');
///topic/view
Route::get('/topic/view/{topic}','App\Http\Controllers\Front\PageController@topicView');
Route::post('/topic/comment/{topic}','App\Http\Controllers\Front\PageController@topicComment');
Route::get('/poet/en/{poet}','App\Http\Controllers\Front\PageController@poetEn');
Route::get('/poet/bn/{poet}','App\Http\Controllers\Front\PageController@poetBn');
Route::get('/job','App\Http\Controllers\Front\PageController@job');
Route::get('/job/bangla','App\Http\Controllers\Front\PageController@jobBangla');
//job/bangla/grammer
Route::get('job/bangla/grammer','App\Http\Controllers\Front\PageController@jobBanglaGrammer');
Route::get('/job/english','App\Http\Controllers\Front\PageController@jobEnglish');
Route::get('job/english/grammer','App\Http\Controllers\Front\PageController@jobEnglishGrammer');
Route::get('/job/math','App\Http\Controllers\Front\PageController@jobMath'); 
Route::get('/job/gk','App\Http\Controllers\Front\PageController@jobGk');
Route::get('/job/bangladesh','App\Http\Controllers\Front\PageController@jobBangladesh');
Route::get('/job/world','App\Http\Controllers\Front\PageController@jobWorld');
Route::get('job/current-affairs','App\Http\Controllers\Front\PageController@currentAffairs');
Route::get('exercise/{topic}','App\Http\Controllers\Front\PageController@exercise');
Route::post('exercise/{topic}','App\Http\Controllers\Front\PageController@exerciseSubmit');
//job/current-affairs

Route::group(['prefix' => 'student'],function() {
    Route::get('/','App\Http\Controllers\Student\HomeController@index'); 
    Route::get('/exam','App\Http\Controllers\Student\HomeController@exam');
    Route::get('/result','App\Http\Controllers\Student\HomeController@result');
    Route::get('/{course}/exam','App\Http\Controllers\Student\HomeController@courseExam'); 
    Route::get('/{course}/exam/{n}/{ans}','App\Http\Controllers\Student\HomeController@courseQuestion');
    Route::get('/{course}/exam/finish','App\Http\Controllers\Student\HomeController@courseExamFinish');
    Route::get('/course/certificate/{course}','App\Http\Controllers\Student\HomeController@courseCertificate');
    //
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//ALTER TABLE `courses` ADD `duration` VARCHAR(50) NOT NULL AFTER `logo`;
//ALTER TABLE `courses` ADD `time_commitment` VARCHAR(100) NOT NULL AFTER `duration`, ADD `language` VARCHAR(100) NOT NULL AFTER `time_commitment`, ADD `price` VARCHAR(100) NOT NULL AFTER `language`;