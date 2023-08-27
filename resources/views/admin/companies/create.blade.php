@extends('admin.layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Company Create
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.companies.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="" for="logo">Logo</label>
                    <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}" type="file" name="logo" id="logo">
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
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
