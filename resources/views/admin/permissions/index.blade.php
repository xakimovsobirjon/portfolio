@extends('admin.layouts.admin')
@section('content')

    @can('permissions_create')
        <a href="{{route('admin.permissions.create')}}" class="btn btn-success mb-3">Create Permission</a>
    @endcan

    <table class="table">
        <thead>
        <th>Name</th>
        <th>Action</th>
        </thead>
        @foreach($permissions as $permission)
            <tbody>
            <td>{{$permission->name}}</td>
            <td>

                @can('permissions_edit')
                    <a class="btn btn-info" href="{{route('admin.permissions.edit', $permission->id)}}">Edit</a>
                @endcan

                @can('permissions_delete')
                    <form action="{{route('admin.permissions.destroy',$permission->id)}}" method="post" style="display: inline-block;">
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
