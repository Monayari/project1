extends('layouts.master')


 @section('pagetitle','koosharayan|editpage')




 @section('title')

    <h1> فرم ویرایش </h1>
    {{-- <h2>Laravel 8 CRUD Example from scratch - uclass.ir</h2> --}}


 @endsection

 @section('content')
 {{-- @if(Request::RouteIs('edit.bilder')) --}}


 <div class="alert alert-danger">
 @if ($errors->any())

 <ul>
     @foreach ($errors->all() as $error )

     <li>{{$error}}</li>

     @endforeach
 </ul>
 @endif
 </div>

 @if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

  <form action="/blog.edit/{{$user->id}}/edit" method="Post">
    @csrf
@method('put')
 <label for="name">Name:</label>
 <input type="text"  name="name" value="{{$user->name}}" id="name" class="form-control">
 <label for="family">Family:</label>
 <input type="text"   name="family" value="{{$user->family}}" id="family" class="form-control">
 <label for="phone">Phone:</label>
 <input type="text"  name="phone" value="{{$user->phone}}" id="phone"  class="form-control">
 <label for="email">Email:</label>
 <input type="email" name="email" value="{{$user->email}}" id="email"  class="form-control">
 <label for="address">Address:</label>
 <input type="text"   name="address" value="{{$user->address}}" id="address" class="form-control">
 <button type="submit" class="btn btn-info">update</button>


 </form>
</div>