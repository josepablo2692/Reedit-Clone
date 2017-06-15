@if ($post->exists)

  <form action="{{ route('update_post_path',['post' => $post->id]) }}" method="post">
    {{ method_field('put') }}

@else

  <form action="{{ route('store_post_path') }}" method="post">

@endif

{{csrf_field()}}







    <div class="form-group">

      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" value="{{$post->title or old('title')  }}">

    </div>


      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="5" class="form-control">{{ $post->description or old('description') }}</textarea>
      </div>

      <div class="form-group">

        <label for="url">Url:</label>
        <input type="text" class="form-control" name="url" value="{{ $post->url or old('url') }}">

      </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Post</button>
      </div>




</form>
