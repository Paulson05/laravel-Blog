

@extends('admin.layouts.dashboard')

@section('content')
<div id="page-top">
    <div id="wrapper">
        @include('admin.partials.navbar')
      <div class="container">
          <h1>Edit Post</h1>
        <form action="{{ route('admin.update',  ['id'=>$post->id])}}" method="POST" enctype= "multipart/form-data" >
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="form-group">
                        <strong>News heading</strong>
                        <input type="text" name="news_heading" class="form-control" value="{{ $post->news_heading}}">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>News</strong>
                        <input type="text" name="news" class="form-control"value="{{ $post->news}}">
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Read more:</strong>
                        <textarea class="form-control" style="height:150px" name="read_more" value="{{ $post->read_more}}"
                            ></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>image</strong>
                        <input type="file" name="image" value="{{ $post->image}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
@endsection