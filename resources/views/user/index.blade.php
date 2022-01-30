 @extends('layouts.master')

@section('pagetitle','koosharayan|indexform')


@section('title')

<h1>فرم نمایش  </h1>
@endsection


   @section('content')
@if(Request::routeIs('index.bilder'))

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

   <table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Family</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
        <th>Relation</th>
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
            <form action="user-builder/{{$user->id}}" method="POST">
                @csrf
                @method('DELETE')



                <a class="btn btn-primary" href="user-builder/{{$user->id}}/edit">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            </td>
            <td>
                <a class="btn btn-primary" href="user-builder/{{$user->id}}/factory">Createpost</a>
                <a class="btn btn-primary" href="user-builder/{{$user->id}}/showpost">showpost</a>
                <a class="btn btn-info" href="user-builder/{{$user->id}}/profile">Createprofile</a>
                <a class="btn btn-info" href="user-builder/{{$user->id}}/showprofile">Showprofile</a>
            </td>

    </tr>



    @endforeach
</table>

<div class="pull-left">

    <a class="btn btn-primary" href="user-builder/create">Create</a>
    <a class="btn btn-primary" href="user-builder/factory">Createuser</a>

   </div>

 @else

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

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

<div class="pull-left">

    <a class="btn btn-primary" href="user/create">Create</a>


   </div>
   @endif
@endsection






