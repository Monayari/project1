<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserConrtoller extends Controller
{
    public function showindex(){


         $user=DB::table('users')->orderBy('name','ASC')

         ->get();



        return view('user.index',['user'=>$user]);
    }

    public function create(){

        return view('user.create');

    }
    public function store(Request $request){

        $validate=validator::make($request->all(),[

            'name'=>'required',
            'family'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required'
             ])->validated();


        $user=DB::table('users')->insert([

            'name'=>$request->name,
            'family'=>$request->family,
            'phone'=>$request->phone,

            'email'=>$request->email,
            'address'=>$request->address

            ]);

           return back()->with('success','user created successfully');


    }

    public function edit($id){

        $user=DB::table('users')->where('id',$id)->first();
        return view('user.edit',['user'=>$user]);
    }
    public function update(Request $request ,$id)
    {
        $validate=validator::make($request->all(),[

            'name'=>'required',
            'family'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required'
             ])->validated();

             $uer=DB::table('users')->where('id',$id)->update([

                'name'=>$request->name,
            'family'=>$request->family,
            'phone'=>$request->phone,

            'email'=>$request->email,
            'address'=>$request->address
             ]);

             return redirect('user-builder')->with('success','user update successfully');

    }

    public function show(){

        $user=DB::table('users')->join('blogs', 'users.id', '=', 'blogs.user_id')->get();
        return view('user.show',compact('user'));
    }

    public function destory($id){
        $user=DB::table('users')->where('id',$id)->delete();
        return back()->with('success','user delete successfuly');
    }
}
