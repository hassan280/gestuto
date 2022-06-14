<?php

namespace App\Http\Controllers;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route :: group(['middleware'=> 'auth'], function(){
    Route::post('/store-schedule', [ScheduleController::class, 'store'])->name('store-schedule');
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
    Route::get('/add-schedule', [ScheduleController::class, 'create'])->name('add-schedule');
    Route::delete('/schedule/{id}', [ScheduleController::class, 'destroy'])->name('delete-schedule');
    Route::get('/meetings', [ReunionController::class, 'index'])->name('meetings');
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects');
    Route::get('/add-subject', [SubjectController::class, 'create'])->name('add-subject');
    Route::delete('/subjects/{id}', [SubjectController::class, 'destroy'])->name('delete-subject');
    Route::delete('/meetings/{id}', [ReunionController::class, 'destroy'])->name('delete-meeting');
    Route::post('/store-subject', [SubjectController::class, 'store'])->name('store-subject');
    
    Route::group(['middleware' => 'role:student','prefix' => 'student', 'as' => 'student.'],function(){
        Route ::resource('lessons',\App\Http\Controllers\Students\LessonController::class);
        
    });
Route::group(['middleware' => 'role:teacher','prefix' => 'teacher', 'as' => 'teacher.'],function(){
    Route ::resource('courses',\App\Http\Controllers\Teachers\CourseController::class);
    
});


});

require __DIR__.'/auth.php';
