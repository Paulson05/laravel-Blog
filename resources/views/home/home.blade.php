@extends('layouts.app')


@section('content')



  @foreach($posts as $post)
        

     
  <div class="card-group col-md-6"  >
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $post->news_heading }}</h5>
        <p class="card-text">{{ $post->news }}</p>
        <p class="card-text">{{ $post->read_more }}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        <span>comment 6</span>
      </div>
    </div>
   
  </div>

@endforeach




@endsection