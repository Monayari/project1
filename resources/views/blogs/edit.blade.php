@extends('layouts.master')


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

  <form action="/blogs/{{$blog->id}}/edit" method="Post">
    @csrf
@method('put')
<label for="name">title:</label>
<input type="text"  name="title" value="{{$blog->title}}" id="name" class="form-control">
<label for="family">body:</label>
<input type="text"   name="body" id="body" value="{{$blog->body}}" class="form-control">


 <button type="submit" class="btn btn-info">update</button>


 </form>
</div>
@endsection
