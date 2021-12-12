@extends('users.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}">New User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Comment</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user ?? '' as $key => $value)
            <tr>
                <!-- i= auto increment -->
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->comment}}</td>
                <td>
                    <form action="{{ route('users.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('users.show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('users.edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $user ?? ''->links() !!}
@endsection
