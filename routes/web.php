<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', [TeacherController::class, 'dashboard'])->name('dashboard');
Route::get('/student_dashboard', [StudentController::class, 'dashboard'])->name('student_dashboard');
Route::get('/student', [StudentController::class, 'loginstudent'])->name('loginstudent');
Route::get('/grading', [TeacherController::class, 'grading'])->name('grading');
Route::get('/courses', [TeacherController::class, 'courses'])->name('courses');
Route::get('/reports', [TeacherController::class, 'reports'])->name('reports');
Route::post('/loginStudentSubmit',  [StudentController::class, 'loginStudentSubmit'])->name('loginStudentSubmit');

require __DIR__.'/auth.php';

Route::post('/addStudent',  [TeacherController::class, 'addStudent'])->name('addStudent');
Route::post('/addCourse',  [TeacherController::class, 'addCourse'])->name('addCourse');
Route::get('/deleteCourse/{id}',  [TeacherController::class, 'deleteCourse'])->name('deleteCourse');
Route::post('/editStudent',  [TeacherController::class, 'editStudent'])->name('editStudent');
Route::post('/editCourses',  [TeacherController::class, 'editCourses'])->name('editCourses');
Route::post('/addGrade',  [TeacherController::class, 'addGrade'])->name('addGrade');
Route::get('/deleteStudent/{id}',  [TeacherController::class, 'deleteStudent'])->name('deleteStudent');
