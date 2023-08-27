@extends('admin.layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Work Edit
        </div>

        <div class="card-body">
            <form method="POST" action="{{route("admin.works.update", [$work->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="" for="image">Image</label>
                    <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="file" name="image" id="image" value="{{ old('image', $work->image) }}" >
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="title">Title</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $work->title) }}">
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="link_title">Link title</label>
                    <input class="form-control {{ $errors->has('link_title') ? 'is-invalid' : '' }}" type="text" name="link_title" id="link_title" value="{{ old('link_title', $work->link_title) }}">
                    @if($errors->has('link_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('link_title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="link">Link</label>
                    <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', $work->link) }}">
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
