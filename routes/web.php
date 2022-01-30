<?php

use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserConrtoller;
use App\Http\Controllers\UserController;

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

Route::get('/index',[PageController::class,'ShowIndex'])->name('index')->middleware('test');
 Route::get('/blog',[PageController::class,'ShowBlog'])->name('blog');
 Route::get('/contact',[PageController::class,'ShowCantact'])->name('contact');
 Route::get('/courses',[PageController::class,'ShowCourses'])->name('courses');
 Route::get('/pricing',[PageController::class,'ShowPricing'])->name('pricing');
 Route::get('/showindex',[PageController::class,'Showraw'])->name('show');


  Route::resource('user',UserController::class);


   Route::prefix('softdelete')->group(function(){
Route ::get('/showsoft',[Formcontroller::class,'trashes']);
Route ::get('/{id}',[Formcontroller::class,'restore']);

});

    Route::prefix('user-builder')->group(function(){

    Route::get('/',[UserConrtoller::class,'showindex'])->name('index.bilder');
    Route::get('/create',[UserConrtoller::class,'create'])->name('create.bilder');
    Route::post('/create',[UserConrtoller::class,'store'])->name('store.bilder');
    Route::get('/{id}/edit',[UserConrtoller::class,'edit'])->name('edit.bilder');
    Route::put('/{id}/edit',[UserConrtoller::class,'update'])->name('update.bilder');
    Route::delete('/{id}',[UserConrtoller::class,'destory'])->name('delete.bilder');
    Route::get('/show',[UserConrtoller::class,'show'])->name('show.blider');
  



    Route::get('/factory',[UserConrtoller::class,'creatfactoryuser'])->name('factoryuser.blider');
    Route::get('/{id}/factory',[UserConrtoller::class,'creatfactoryblog'])->name('factoryblog.blider');
    Route::get('/{id}/showpost',[UserConrtoller::class,'ShowPost'])->name('showpost');
    Route::get('/{id}/profile',[UserConrtoller::class,'Createprofile'])->name('profile');
    Route::get('/{id}/showprofile',[UserConrtoller::class,'ShowProfile'])->name('showprofile');
});








Route::prefix('blogs')->group(function(){

Route::get('/',[blogcontroller::class,'index'])->name('blogs.index');
Route::get('/{id}/create',[blogcontroller::class,'create'])->name('blogs.create');
Route::post('/{id}/create',[blogcontroller::class,'store'])->name('blogs.store');
Route::get('/{id}/edit',[blogcontroller::class,'edit'])->name('blogs.edit');
Route::put('/{id}/edit',[blogcontroller::class,'update'])->name('blogs.update');
Route::delete('/{id}',[blogcontroller::class,'destory'])->name('blogs.delete');
Route::get('/{id}/createtag',[blogcontroller::class,'createtag'])->name('tag');
Route::get('/{id}/showtag',[blogcontroller::class,'ShowTag'])->name('showtag');

});




