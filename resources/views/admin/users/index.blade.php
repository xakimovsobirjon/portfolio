@extends('admin.layouts.admin')
@section('content')

    @can('users_create')
        <a href="{{route('admin.users.create')}}" class="btn btn-success mb-3">Create User</a>
    @endcan

    <table class="table">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
        </thead>
        @foreach($users as $user)
            <tbody>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach($user->roles as $item)
                        <span class="badge badge-info">{{ $item->name }}</span>
                    @endforeach
                </td>
                <td>

                    @can('users_edit')
                        <a class="btn btn-info" href="{{route('admin.users.edit', $user->id)}}">Edit</a>
                    @endcan

                    @can('users_delete')
                        <form action="{{route('admin.users.destroy',$user->id)}}" method="post" style="display: inline-block;">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    @endcan
                </td>
            </tbody>
        @endforeach

    </table>

@endsection
