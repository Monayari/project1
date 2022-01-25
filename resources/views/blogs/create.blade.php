 @extends('layouts.master')

 @section('pagetitle','koosharayan|creatform')


 @section('title')

 <h1>فرم ثبت نام  </h1>
 @endsection


    @section('content')
{{-- @if(Request::routeIs('create.bilder')) --}}
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

<div>
  <form action="/blogs/create" method="POST">
    @csrf

 <label for="name">title:</label>
 <input type="text"  name="title" id="name" class="form-control">
 <label for="family">body:</label>
 <input type="text"   name="body" id="body" class="form-control">

 <button type="submit" class="btn btn-primary mb-2">submit</button>


 </form>
</div>
</div>
@endsection
