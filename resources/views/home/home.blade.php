@extends('layouts.app')


@section('content')
<div class="container">
  <!-- Row  -->
  <div class="row justify-content-center">
    <!-- Column -->
    <div class="col-md-8 text-center">
      <h3 class="my-3">Latest News and Blog</h3>
      <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
    </div>
    <!-- Column -->
    <!-- Column -->
  </div>
  <div class="row mt-4">
    <!-- Column -->
    <div class="col-lg-6">
      <div class="card border-0 mb-4">
        <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img4.jpg" alt="wrappixel kit"></a>
        <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
        <h5 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">Techonologies started to change Drastically</a></h5>
        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <a href="#demo" data-toggle="collapse">Read more..</a>

        <div id="demo" class="collapse">
       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non laboriosam, id nisi qui aliquid totam dolorum numquam iure nesciunt enim! Magnam delectus nihil vel tempora, voluptas aspernatur necessitatibus quia assumenda dolore tenetur architecto provident fugiat accusantium omnis alias eos? Minus, rerum aspernatur nisi aut veniam dolorum fugiat illo architecto enim.
        </div>     
      </div>
    </div>
    <!-- Column -->
    <div class="col-lg-6">
      <div class="row">
        <!-- Column -->
        @foreach($posts as $post)
        <div class="col-md-6">
          <div class="card border-0 mb-4">
            <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
            <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{ $post->news_heading }}</div>
            <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">{{ $post->news }}</a></h6>
            <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">{{ $post->read_more }}</a></h6>
            
          </div>
        </div>
     
       
      
       
      </div>
    </div>
    <!-- Column -->
  </div>
</div>
</div>
@endforeach


<a href="#demo" data-toggle="collapse">Read more..</a>

<div id="demo" class="collapse">
  <textarea name="" id="" cols="10" rows="10"></textarea>

</div>




@endsection