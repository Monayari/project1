<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Formcontroller extends Controller
{
    public function creat(){


        return view('formuser.create');
    }

public function show(User $user){

    $user=User::all();

    return view('formuser.index',[

        'user'=>$user
    ]);
}


public function  trashes()
{
    $user=User::onlyTrashed()
    ->get();
    return view('user.showsoft',['user'=>$user]);
}

public function restore($id)
{
    User::withTrashed()->find($id)->restore();
    return back();
}

    public function Store(Request $request){


        $validate=Validator::make($request->all(),[
        'name'=>'required',
        'family'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'email'=>'required'
        ]);

        // $validate->stopOnFirstFailure();
        $validate->errors()->all();

        if($validate->fails()){

            return redirect()->back()->withErrors($validate->errors());
        }

// $user=new User();

//         $user->name=$request->name;
//         $user->family=$request->family;
//         $user->phone=$request->phone;
//         $user->email=$request->email;
//         $user->address=$request->address;
//         $user->save();
//         return back();

User::query()->create([

'name'=>$request->name,
'family'=>$request->family,
'phone'=>$request->phone,

'email'=>$request->email,
'address'=>$request->address

]);

return back();
    }

    public function edit(User $user)
    {
    //    $user = User::find($id);
       return view('formuser.edit', compact('user'));
    }


    public function update(Request $request, User $user){

        // $user = User::find($id);

        //  $validate=Validator::make($request->all(),[
        // 'name'=>'required',
        // 'family'=>'required',
        // 'phone'=>'required',
        // 'address'=>'required',
        // 'email'=>'required'
        // ])->validated();
$validate_data=$this->validate(request(),[
    'name'=>'required',
     'family'=>'required',
     'phone'=>'required',
     'address'=>'required',
     'email'=>'required'
]);




// User::query()->where('id',$user)->update([
      $user->update([
'name'=>$request->name,
'family'=>$request->family,
'phone'=>$request->phone,

'email'=>$request->email,
'address'=>$request->address

        ]);

        return back()->with('update success');
    }


    public function destory(User $user){

        // $user=User::find($id);
        $user->delete();
        return back();
    }
}
