<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function ShowIndex(){

        return view('/index');


    }

    public function ShowBlog(){

        return view('/blog');


    }

    public function ShowCantact(){

        return view('/contact');


    }

    public function ShowCourses(){

        return view('/courses');


    }

    public function ShowPricing(){

        return view('/pricing');


    }
 public function showraw(){
     $users=DB::table('users')
     ->selectRaw('count(*) ,name')
     ->where('name','<>',10)
->groupBy('name')
     ->get();

    return view('showindex');
 }
}
