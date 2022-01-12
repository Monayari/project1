<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/index',[PageController::class,'ShowIndex'])->name('index');
 Route::get('/blog',[PageController::class,'ShowBlog'])->name('blog');
 Route::get('/contact',[PageController::class,'ShowCantact'])->name('contact');
 Route::get('/courses',[PageController::class,'ShowCourses'])->name('courses');
 Route::get('/pricing',[PageController::class,'ShowPricing'])->name('pricing');


// Route::get('index', function () {
//     return view('index');

// })->name('index');

//  Route::get('blog', function () {
//         return view('blog');

//     })->name('blog');



// Route::get('contact', function () {
//    return view('contact');

// })->name('contact');

//    Route::get('courses', function () {
//     return view('courses');
//    })->name('courses');

//    Route::get('pricing', function () {
//     return view('pricing');
//    })->name('pricing');
