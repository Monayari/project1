<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Formcontroller;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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

//    Route::prefix('formuser')->group( function(){

 Route::resource('user',UserController::class);

    // });



// Route::get('db',function(){

//     Try{
//        $result= DB::connection()->table('user')->get();
// // dd($result);
//      echo "connection";
//     }
//     catch(Exception $exception){
// die("pleas cheack your connection".$exception->getMessage());
//     }
// });





