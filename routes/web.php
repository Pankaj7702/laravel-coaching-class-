<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserrController;




# route for user interface
Route::get('/',[UserrController::class,'home'])->name('/');
Route::get('/user-register',[UserrController::class,'registration'])->name('user-register');








#route for storing user data
Route::post('/store-register', [UserrController::class,'register'])->name('store-register');








#admin interface
Route::get('/admin',[AdminController::class,'index'])->name('admin');
#route for add course admin page
Route::get('/add-course',[AdminController::class,'addCourse'])->name('add-course');
Route::post('/store-course', [AdminController::class, 'store'])->name('store-course');
Route::get('/api/courses', [AdminController::class, 'getCourses']); // API route to fetch courses
#route for edit existing course admin page
Route::get('/show-course',[AdminController::class,'showCourse'])->name('show-course');
Route::get('/edit-course/{id}', [AdminController::class, 'editCourse'])->name('edit-course');
Route::post('/update-course/{id}', [AdminController::class, 'updateCourse'])->name('update-course');
Route::delete('/delete-course/{id}', [AdminController::class, 'deleteCourse'])->name('delete-course');
#route for manage student details admin page
Route::get('/manage-students',[AdminController::class,'manageStudents'])->name('manage-students');





Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
