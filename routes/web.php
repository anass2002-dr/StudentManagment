<?php

use App\Http\Controllers\HomeController;
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
//all user
Route::post('/changePass', [HomeController::class, 'changePass'])->name('home.changePass');

//teacher
Route::get('/homeTeacher', [HomeController::class, 'homeTeacher'])->name('home.homeTeacher');
Route::get('/homeTeacher/userTeacher', [HomeController::class, 'userTeacher'])->name('home.userTeacher');
Route::get('/homeTeacher/calendarTeacher', [HomeController::class, 'calendarTeacher'])->name('home.calendarTeacher');
Route::get('/homeTeacher/gradesTeacher', [HomeController::class, 'gradesTeacher'])->name('home.gradesTeacher');
Route::get('/homeTeacher/coursesTeacher', [HomeController::class, 'coursesTeacher'])->name('home.coursesTeacher');
Route::get('/homeTeacher/absenceTeacher', [HomeController::class, 'absenceTeacher'])->name('home.absenceTeacher');
Route::get('/homeTeacher/manageAbsencesStudent', [HomeController::class, 'manageAbsencesStudent'])->name('home.manageAbsencesStudent');
Route::get('/homeTeacher/helpTeacher', [HomeController::class, 'helpTeacher'])->name('home.helpTeacher');
Route::get('/homeTeacher/createGrades', [HomeController::class, 'createGrades'])->name('home.createGrades');

//Student
Route::get('/homestudent', [HomeController::class, 'homeStudent'])->name('home.homeStudent');
Route::get('/homestudent/userStudent', [HomeController::class, 'userStudent'])->name('home.userStudent');
Route::get('/homestudent/calendarStudent', [HomeController::class, 'calendarStudent'])->name('home.calendarStudent');
Route::get('/homestudent/gradesStudent', [HomeController::class, 'gradesStudent'])->name('home.gradesStudent');
Route::get('/homestudent/coursesStudent', [HomeController::class, 'coursesStudent'])->name('home.coursesStudent');
Route::get('/homestudent/get_courses', [HomeController::class, 'get_courses'])->name('home.get_courses');
Route::get('/homestudent/get_courses', [HomeController::class, 'get_courses'])->name('home.get_courses');
Route::get('/homestudent/absenceStudent', [HomeController::class, 'absenceStudent'])->name('home.absenceStudent');
Route::get('/homestudent/helpStudent', [HomeController::class, 'helpStudent'])->name('home.helpStudent');

//managment
Route::get('/homeManagment', [HomeController::class, 'homeManagment'])->name('home.homeManagment');
Route::get('/homeManagment/userManagment', [HomeController::class, 'userManagment'])->name('home.userManagment');
Route::get('/homeManagment/calendarManagment', [HomeController::class, 'calendarManagment'])->name('home.calendarManagment');
Route::get('/homeManagment/gradesManagment', [HomeController::class, 'gradesManagment'])->name('home.gradesManagment');
Route::get('/homeManagment/manageStudent', [HomeController::class, 'manageStudent'])->name('home.manageStudent');
Route::get('/homeManagment/manageTeacher', [HomeController::class, 'manageTeacher'])->name('home.manageTeacher');
Route::get('/homeManagment/manageAbsencesManagment', [HomeController::class, 'manageAbsencesManagment'])->name('home.manageAbsencesManagment');
Route::get('/homeManagment/helpManagment', [HomeController::class, 'helpManagment'])->name('home.helpManagment');
Route::get('/homeManagment/manageClass', [HomeController::class, 'manageClass'])->name('home.manageClass');
Route::post('/homeManagment/add_student', [HomeController::class, 'add_student'])->name('home.add_student');
Route::post('/homeManagment/add_teacher', [HomeController::class, 'add_teacher'])->name('home.add_teacher');

//accountable
Route::get('/homeaccountable', [HomeController::class, 'homeAccountable'])->name('home.homeAccountable');


Route::get('/', [HomeController::class, 'login'])->name('home.login');
Route::get('/register', [HomeController::class, 'register'])->name('home.register');
Route::post('/login_post', [HomeController::class, 'login_post'])->name('home.login_post');
Route::post('/register_post', [HomeController::class, 'register_post'])->name('home.register_post');
