<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
