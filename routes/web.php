<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuestionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('about');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware([StudentMiddleware::class])->group(function () {
    Route::get('/student/home', [StudentController::class, 'index']);
    Route::get('/student/about_us', [StudentController::class, 'about_us'])->name('about');
    Route::get('/student/courses', [StudentController::class, 'courses'])->name('courses');
    Route::get('/student/courses/{course}', [StudentController::class, 'show'])->name('courses.show');
    Route::get('/courses/{id}', [StudentController::class, 'show'])->name('courses.show');
Route::get('/videos/{filename}', [StudentController::class, 'streamVideo'])->name('videos.stream');
Route::get('/quiz/{course_id}', [QuizController::class, 'start'])->name('quiz.start');

Route::get('/student/quiz', [QuizController::class, 'showQuizzes'])->name('quiz.show');
Route::post('/quiz/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
Route::get('/quiz/result/{quiz_id}', [QuizController::class, 'showResult'])->name('quiz.result');




});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);

    Route::get('/admin/courses', [AdminController::class, 'list_course'])->name('admin.list_course');
    Route::get('/admin/courses/create', [AdminController::class, 'create_course'])->name('admin.create_course');
    Route::post('/admin/courses', [AdminController::class, 'store_course'])->name('admin.store_course');
    Route::get('/admin/courses/{course}/edit', [AdminController::class, 'edit_course'])->name('admin.edit_course');
    Route::put('/admin/courses/{course}', [AdminController::class, 'update_course'])->name('admin.update_course');
    Route::delete('/admin/courses/{course}', [AdminController::class, 'delete_course'])->name('admin.delete_course');

    Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');
    Route::get('/sections/create', [SectionController::class, 'create'])->name('sections.create');
    Route::post('/sections', [SectionController::class, 'store'])->name('sections.store');
    Route::get('/sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
    Route::put('/sections/{section}', [SectionController::class, 'update'])->name('sections.update');
    Route::delete('/sections/{section}', [SectionController::class, 'destroy'])->name('sections.destroy');

    Route::get('/admin/materials', [MaterialController::class, 'index'])->name('materials.index');
    Route::get('/admin/materials/create', [MaterialController::class, 'create'])->name('materials.create');
    Route::post('/admin/materials', [MaterialController::class, 'store'])->name('materials.store');
    Route::get('/admin/materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
    Route::put('/admin/materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
    Route::delete('/admin/materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');

    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');
    Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');

    Route::get('/quiz_questions', [QuizQuestionController::class, 'index'])->name('quiz_questions.index');
    Route::get('/quiz_questions/create', [QuizQuestionController::class, 'create'])->name('quiz_questions.create');
    Route::post('/quiz_questions', [QuizQuestionController::class, 'store'])->name('quiz_questions.store');
    Route::get('/quiz_questions/{quizQuestion}/edit', [QuizQuestionController::class, 'edit'])->name('quiz_questions.edit');
    Route::put('/quiz_questions/{quizQuestion}', [QuizQuestionController::class, 'update'])->name('quiz_questions.update');
    Route::delete('/quiz_questions/{quizQuestion}', [QuizQuestionController::class, 'destroy'])->name('quiz_questions.destroy');
Route::resource('quiz_questions', QuizQuestionController::class);

});
