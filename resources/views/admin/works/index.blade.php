@extends('admin.layouts.admin')
@section('content')

    @can('works_create')
        <a href="{{route('admin.works.create')}}" class="btn btn-success mb-3">Create Work</a>
    @endcan

    <table class="table">
        <thead>
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Link Title</th>
        <th>Link</th>
        <th>Action</th>
        </thead>
        @foreach($works as $work)
            <tbody>
            <td>{{$work->id}}</td>
            <td>
                <img src="{{ asset('/images/work/'.$work->image) }}" alt="1" style="width: 50px; height: 50px;">
            </td>
            <td>{{$work->title}}</td>
            <td>{{$work->link_title}}</td>
            <td>{{$work->link}}</td>
            <td>

                @can('works_edit')
                    <a class="btn btn-info" href="{{route('admin.works.edit', $work->id)}}">Edit</a>
                @endcan

                @can('works_delete')
                    <form action="{{route('admin.works.destroy',$work->id)}}" method="post" style="display: inline-block;">
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
