@extends('admin.layouts.admin')
@section('content')

    @can('roles_create')
        <a href="{{route('admin.roles.create')}}" class="btn btn-success mb-3">Create Role</a>
    @endcan

    <table class="table">
        <thead>
        <th>Name</th>
        <th>Permissions</th>
        <th>Action</th>
        </thead>
        @foreach($roles as $role)
            <tbody>
            <td>{{$role->name}}</td>
            <td>
                @foreach($role->permissions as $key => $item)
                    <span class="badge badge-info">{{ $item->name }}</span>
                @endforeach
            </td>
            <td>

                @can('roles_edit')
                    <a class="btn btn-info" href="{{route('admin.roles.edit', $role->id)}}">Edit</a>
                @endcan

                @can('roles_delete')
                    <form action="{{route('admin.roles.destroy',$role->id)}}" method="post" style="display: inline-block;">
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

