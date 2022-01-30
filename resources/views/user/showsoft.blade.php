@extends('layouts.master')

@section('pagetitle','koosharayan|indexform')


@section('title')

<h1>فرم نمایش  </h1>
@endsection


   @section('content')
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Family</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>

    </tr>


    @foreach ($user as $user)


    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->family }}</td>
        <td>{{$user->phone }}</td>
        <td>{{$user->email }}</td>
        <td>{{$user->address }}</td>

<td>





                <a class="btn btn-primary" href="/softdelete/{{$user->id}}">Restore</a>
              

            </td>

    </tr>



    @endforeach
</table>
@endsection
