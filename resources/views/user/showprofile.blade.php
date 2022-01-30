@extends('layouts.master')

@section('pagetitle','koosharayan|indexform')


@section('title')

<h1>فرم نمایش  </h1>
@endsection


   @section('content')

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>age</th>
        <th>tahsilat</th>
        <th>job</th>
        <th>user_id</th>

    </tr>


    @foreach ($user as $user)


    <tr>
         <td>{{ $user->id }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->tahsilat }}</td>
        <td>{{ $user->job }}</td>
        <td>{{$user->user_id }}</td>


    </tr>



    @endforeach
</table>
 @endsection
