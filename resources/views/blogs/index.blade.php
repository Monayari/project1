@extends('layouts.master')

@section('pagetitle','koosharayan|indexform')


@section('title')

<h1>فرم نمایش  </h1>
@endsection


   @section('content')
{{-- @if(Request::routeIs('index.bilder')) --}}

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

   <table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>user_id</th>

        <th>Action</th>
        <th>Relation</th>
    </tr>


    @foreach ($blog as $blog)


    <tr>
         <td>{{ $blog->id }}</td>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->body }}</td>
        <td>{{$blog->user_id }}</td>

<td>
            <form action="blogs/{{$blog->id}}" method="POST">
                @csrf
                @method('DELETE')



                <a class="btn btn-primary" href="blogs/{{$blog->id}}/edit">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

            </td>
            <td>
            <a class="btn btn-primary" href="blogs/{{$blog->id}}/createtag">Createtag</a>
            <a class="btn btn-primary" href="blogs/{{$blog->id}}/showtag">showtag</a>
            </td>


    </tr>



    @endforeach
</table>

<div class="pull-left">

    <a class="btn btn-primary" href="blogs/create">Create</a>
   </div>
@endsection

