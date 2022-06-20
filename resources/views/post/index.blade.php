@extends('layouts.app')
@section('content')


    @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif

   <div class="container">
    <a href="{{ route('post.create') }}" class="btn btn-danger text-center m-3">Add new post</a>
   </div>
<div class="container">
    <div class="row">

      @foreach ($posts as $post)
      <div class="col-sm-4">
      <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{ url('/storage/images/'.$post->file) }}" alt="Card image cap">
        <div class="card-header">
            <p class="card-text">{{ $post->title }} {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ substr($post->content, 0, 100) }}</p>
        </div>
       <a href="{{ route('post.show', $post->id) }}"> <button class="btn btn-primary m-3 text-center" >Details</button></a>
      </div>
      </div>
      @endforeach
      <div>{{ $posts->links() }}</div>
    </div>

</div>
@endsection


{{--  <div class="card-header">
    <img src="{{ url('/storage/images/'.$post->file) }}" />
     </div>  --}}
