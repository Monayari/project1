<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogcontroller extends Controller
{
    public  function index(){

        $user=User::all();
        return view('blogs.index',compact($user));

    }

    public function create(){

 return view('blogs.create');
    }

    public function store(Request $request)
    {
     $user=User::find(2);
//  $user=Auth::user();
$user->blog()->create([

    'title'=>$request->title,
    'body'=>$request->body,
'user_id'=>$user
]

);
return back()->with('success','user created successfully');
    }

    public function edit(){

    }

    public function update(){


    }

    public function destory(){

        $user=User::first();
        $user->blog()->delete();

    }
}
