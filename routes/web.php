<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SubunitController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ResourceController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\FeedbackController;


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

Auth::routes();
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [HomeController::class, 'show']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/test', function () {
    return view('vendor.file-manager.ckeditor');
});
Route::get('/home', [UsersController::class, 'index'])->name('home');




// Route::apiResource(['posts' => PostsController::class,]);
// Route::apiResource(['users' => UsersController::class,])->middleware('role:admin,manager');
// Route::apiResource(['roles' => RolesController::class,])->middleware('can:isAdmin');

Route::get('/users', [UsersController::class, 'index'])->middleware('role:admin,manager');
Route::get('/users/create', [UsersController::class, 'create'])->middleware('role:admin,manager');
Route::get('/users/{user}', [UsersController::class, 'show'])->middleware('role:admin,manager');
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->middleware('role:admin,manager');
Route::patch('/users/{user}', [UsersController::class, 'update'])->middleware('role:admin,manager');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->middleware('role:admin,manager');

Route::get('/roles', [RolesController::class, 'index'])->middleware('can:isAdmin');
Route::get('/roles/create', [RolesController::class, 'create'])->middleware('can:isAdmin');
Route::get('/roles/{role}', [RolesController::class, 'show'])->middleware('can:isAdmin');
Route::post('/roles', [RolesController::class, 'store'])->middleware('can:isAdmin');
Route::get('/roles/{role}/edit', [RolesController::class, 'edit'])->middleware('can:isAdmin');
Route::patch('/roles/{role}', [RolesController::class, 'update'])->middleware('can:isAdmin');
Route::delete('/roles/{role}', [RolesController::class, 'destroy'])->middleware('can:isAdmin');

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::patch('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

//----------------------------------------------------------------------------------------------------------------------
Route::get('/quiz', [QuizController::class, 'index']);
Route::get('/Quize/create', [QuizeController::class, 'create']);
Route::get('/Quize/{post}', [QuizeController::class, 'show']);
Route::post('/addquiz', [QuizController::class, 'store']);
Route::get('/Quize/{post}/edit', [QuizeController::class, 'edit']);
Route::patch('/Quize/{post}', [QuizeController::class, 'update']);
Route::delete('/Quize/{post}', [QuizeController::class, 'destroy']);
//-----------------------------------------------------------------------------------------------------------------------------

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/user/{id}/{type}',[WelcomeController::class, 'show'])->name('single');
Route::get('/view',[WelcomeController::class, 'view'])->name('view');
Route::get('/search',[WelcomeController::class, 'search'])->name('search');
Route::get('/typeMore',[WelcomeController::class, 'typeMore'])->name('typeMore');
Route::get('/searchCourse',[WelcomeController::class, 'searchCourse'])->name('searchCourse');
Route::get('/courseType',[WelcomeController::class, 'courseType'])->name('courseType');
Route::get('/gradeType',[WelcomeController::class, 'gradeType'])->name('gradeType');

Route::POST('/moeuser',[WelcomeController::class, 'moeuser'])->name('moeuser');
Route::POST('/file/download',[WelcomeController::class, 'download'])->name('download');
Route::GEt('/download',[WelcomeController::class, 'fileDownload'])->name('fileDownload');
Route::GET('/file/likeDislike',[WelcomeController::class, 'likeDislike'])->name('likeDislike');
Route::get('/pagination',[WelcomeController::class,'fetch_data']);

Route::apiResources([

   
    'grades' => GradeController::class,
    'courses' => CourseController::class,
    'units' => UnitController::class,
    'subunits' => SubunitController::class,
    'medias' => MediaController::class,
    'types' => TypeController::class,
    'medias' => MediaController::class,
    'resources' => ResourceController::class,
    'feedbacks' => FeedbackController::class,
]);


URL::forceScheme('https');

