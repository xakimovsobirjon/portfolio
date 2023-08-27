@extends('admin.layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Role Edit
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.roles.update", [$role->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="" for="name">Name</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $role->name) }}" >
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="permissions">Permissions</label>
                    <select class="form-control select2 {{ $errors->has('permissions') ? 'is-invalid' : '' }}" name="permissions[]" id="permissions" multiple>
                        @foreach($permissions as $permission)
                            <option value="{{$permission->id}}" {{(in_array($permission->id, old('permissions', [])) || $role->permissions->contains($permission->id)) ? 'selected' : '' }}>{{$permission->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('permissions'))
                        <div class="invalid-feedback">
                            {{ $errors->first('permissions') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
