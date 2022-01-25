@extends('layouts.master')

@section('connect')
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Family</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>body</th>
    </tr>


    @foreach ($user as $user)


    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->family }}</td>
        <td>{{$user->phone }}</td>
        <td>{{$user->email }}</td>
        <td>{{$user->address }}</td>
        <td>{{$user->body }}</td>
<td>
            <form action="user/{{$user->id}}" method="POST">
                @csrf
                @method('DELETE')



                <a class="btn btn-primary" href="user/{{$user->id}}/edit">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            </td>

    </tr>



    @endforeach
</table>
@endsection