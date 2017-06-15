@extends('layouts.app')


@section('content')
  @foreach ($posts as $post)
    <hr>

    <div class="row">

    <div class="col-md-12">

      <h2> <a href="{{route('post_path',['post' => $post->id])}}">{{ $post->title }}</a>
        <small class="pull-right">
          <a href="{{route('edit_post_path',['post'=>$post->id]) }}" class="btn btn-info">Edit</a>
          <form  action="{{route('delete_post_path',['ṕost'=>$post->id])}}" method="post">
            {{csrf_field()}}

            {{method_field('delete')}}
            
              <button type="submit" class="btn btn-danger">Delete</button>

          </form>
        </small>
      </h2>
      <p>Posted {{ $post->created_at->diffForHumans() }}</p>


    </div>
    </div>
    <hr>
  @endforeach

  {{ $posts->render() }}

@endsection
