@extends('layouts.app')

@section('content')

    @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>

    @endif

    <form action="{{ route('store_post_path') }}" method="post">

      {{csrf_field()}}
        <div class="form-group">

          <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" value="{{ old('title') }}">

        </div>


          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>
          </div>

          <div class="form-group">

            <label for="url">Url:</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}">

          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary">Create Post</button>
        </div>

    </form>
@endsection
