@extends('layouts.master')

@section('pagetitle','koosharayan|indexform')


@section('title')

<h1>فرم نمایش  </h1>
@endsection


   @section('content')
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>name</th>


    </tr>


    @foreach ($blog as $blog)


    <tr>
         <td>{{ $blog->id }}</td>
        <td>{{ $blog->name }}</td>




    </tr>



    @endforeach
</table>
@endsection
