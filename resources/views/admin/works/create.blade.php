@extends('admin.layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Work Create
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.works.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="" for="image">Image</label>
                    <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="file" name="image" id="image">
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="title">Title</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title">
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="link_title">Link title</label>
                    <input class="form-control {{ $errors->has('link_title') ? 'is-invalid' : '' }}" type="text" name="link_title" id="link_title">
                    @if($errors->has('link_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('link_title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="link">Link</label>
                    <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link">
                    @if($errors->has('link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('link') }}
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
