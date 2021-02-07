

@extends('admin.layouts.dashboard')

@section('content')
<div id="page-top">
    <div id="wrapper">
        @include('admin.partials.navbar')
      <div class="container">
          <h1>Show Post</h1>
        

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News heading</strong>   
                        {{ $post->news_heading}}
                        <h2></h2>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News</strong>
                        {{ $post->news}}
                        <h2></h2>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Read more:</strong>
                      
                     <h2>  <{{ $post->read_more}}</h2>                           
                    </div>
                </div>
                {{--  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>image</strong>
                        <input type="file" name="image" value="{{ $post->image}}">
                    </div>
                </div>  --}}
             
            </div>

     
    </div>
</div>
</div>
@endsection