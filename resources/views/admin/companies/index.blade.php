@extends('admin.layouts.admin')
@section('content')

    @can('companies_create')
        <a href="{{route('admin.companies.create')}}" class="btn btn-success mb-3">Create Company</a>
    @endcan

    <table class="table">
        <thead>
        <th>Logo</th>
        <th>Action</th>
        </thead>
        @foreach($companies as $company)
            <tbody>
            <td>
                <img src="{{ asset('/images/company/'.$company->logo) }}" alt="1" style="width: 50px; height: 50px;">
            </td>
            <td>

                @can('companies_edit')
                    <a class="btn btn-info" href="{{route('admin.companies.edit', $company->id)}}">Edit</a>
                @endcan

                @can('companies_delete')
                    <form action="{{route('admin.companies.destroy',$company->id)}}" method="post" style="display: inline-block;">
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
