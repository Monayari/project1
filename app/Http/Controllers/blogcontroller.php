<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blogrequest;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogcontroller extends Controller
{
    public  function index(){

        $blog=Blog::all();
        //  $user->blog()->get();
        return view('blogs.index',['blog'=>$blog]);



    }

    public function create($id){

        $user = User::find($id);

 return view('blogs.create',compact('user'));
    }

    public function store(Blogrequest $request,$id)
    {
        $request->validated();
        $user=User::find($id);

       $user->blog()->create([

    'title'=>$request->title,
    'body'=>$request->body,
        'user_id'=>$user
]

);
return back()->with('success','user created successfully');
    }

    public function edit($id){

        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));

    }

    public function update(Blogrequest $request ,$id){

      $request->validated();
      $blog=Blog::find($id);
      $blog->update([

        'title'=>$request->title,
        'body'=>$request->body


      ]);
      return redirect('blogs')->with('success','update success');

    }

    public function destory($id){

        $user=User::find($id);
        $user->delete();

    }

    public function createtag($id){

      $blog=Blog::find($id);

    $blog->tags()->saveMany(Tag::factory(rand(1,3))->make());

      return back();
    }

    public function ShowTag($id)
    {
        $blog= Blog::find($id)->tags()->get();
        return view('blogs.showtag',['blog'=>$blog]);
    }
}
