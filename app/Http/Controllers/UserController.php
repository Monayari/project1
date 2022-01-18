<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index',[

            'user'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'family'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required'
             ])->validated();

             User::query()->create([

                'name'=>$request->name,
                 'family'=>$request->family,
                 'phone'=>$request->phone,

                 'email'=>$request->email,
                 'address'=>$request->address

                 ]);

                return back()->with('success','user created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit',[

            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validate_data=$this->validate(request(),[
            'name'=>'required',
             'family'=>'required',
             'phone'=>'required',
             'address'=>'required',
             'email'=>'required'
        ]);

        $user->update([
            'name'=>$request->name,
            'family'=>$request->family,
            'phone'=>$request->phone,

            'email'=>$request->email,
         'address'=>$request->address

                    ]);

                    return redirect('user')->with('success','user update successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success','user delete successfuly');
    }
}
