
@extends('admin.layouts.dashboard')

@section('content')

<div id="page-top">
    <div id="wrapper">
        @include('admin.partials.navbar')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('admin.partials.usernavbar')
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Create POST
                    </button>
                </div>


                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Creat Post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <form action="{{ route('post') }}" method="POST" enctype= "multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>News heading</strong>
                                        <input type="text" name="news_heading" class="form-control" placeholder="News Heading">
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>News</strong>
                                        <input type="text" name="news" class="form-control" placeholder="NEws">
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Read more:</strong>
                                        <textarea class="form-control" style="height:150px" name="read_more"
                                            ></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>image</strong>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>

                        </form>
                      </div>



                    </div>
                  </div>
                </div>




                <table class="table table-bordered table-responsive-lg">
                    <tr>
                        <th>News HEADING</th>
                        <th>News</th>
                        <th>READ MORE</th>

                    </tr>
                    @foreach ($posts as $post)
                        <tr>

                            <td>{{ $post->news_heading }}</td>
                            <td>{{ $post->news }}</td>
                            <td>{{ $post->read_more }}</td>

                            <td>


                                    <a href="{{ route('admin.show', ['id'=>$post->id]) }}" title="show">
                                        <i class="btn btn-danger fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.edit', ['id'=>$post->id]) }}" >
                                        <i class="btn btn-danger fas fa-edit" ></i>
                                    </a>
                                    <a href="{{ route('admin.delete', ['id'=>$post->id]) }}" >
                                        <i class="btn btn-danger fas fa-trash-alt" ></i>
                                    </a>
                                       
                                          
                            </td>

                        </tr>
                 @endforeach
                </table>






                      </div>
                    </div>
                  </div>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

@endsection
