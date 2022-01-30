@extends('layouts.master')

@section('connect')
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>titl</th>
        <th>body</th>
        <th>user_id</th>

    </tr>


    @foreach ($user as $user)


    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->title }}</td>
        <td>{{ $user->body }}</td>
        <td>{{$user->user_id }}</td>

<td>
            <form action="user-bilder/{{$user->id}}/show" method="POST">
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
