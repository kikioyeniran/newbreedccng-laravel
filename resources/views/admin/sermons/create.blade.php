@extends('admin.layouts.app')

@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">

        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Home</h2>
                    <p class="pageheader-text">Sermon Posts</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sermon</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->


        <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="influence-profile-content pills-regular">
            <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">View All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Create New Post</a>
                </li>
            </ul>
            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                        <div class="card">
                            <h5 class="card-header">All Sermon Posts <strong>Click Image to Edit Post</strong></h5>
                            <div class="card-body">
                                <div class="row">
                                    @if(count($sermons) > 0)
                                        @foreach($sermons as $post)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">TITLE: {{$post->title}}</h5>
                                                    <div class="card-body">
                                                        <div class="metric-value d-inline-block">
                                                            <h4 class="mb-1">PREACHER: {{$post->preacher}}</h4>
                                                        </div>
                                                        <div>
                                                        <a href = "/sermons/{{$post->id}}/edit"><img src="../storage/pictures/{{$post->picture}}" alt="user" class="rounded" width="100%"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-light">
                                                        <div id="sparkline-1"><audio controls><source src='/storage/audios/{{$post->audio}}' type="audio/mpeg"></audio></div>
                                                        <div id="sparkline-1">{{$post->summary}}</div>
                                                        <h6>{{$post->created_at}}<h6>
                                                    </div>
                                                    <div class="card-footer text-center bg-white">
                                                        {!!Form::open(['action'=>['SermonsController@destroy', $post->id], 'method'=> 'POST'])!!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete Post', ['class' => 'btn btn-danger', "onclick" => "return confirm('Are you sure you want to delete this picture?');"])}}
                                                        {!!Form::close()!!}
                                                    {{-- <a href = "" onclick="return confirm('Are you sure you want to delete this picture?');">Delete Post</a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <br/>
                                        @endforeach
                                        <div class="align-content-center">
                                            {{$sermons->links()}}
                                        </div>
                                    @else
                                        <p>No posts found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Create New Sermon Post</h5>
                                <div class="card-body">
                                    {!! Form::open(['action' => 'SermonsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Title</label>
                                                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Preacher</label>
                                                    {{Form::text('preacher', '', ['class' => 'form-control', 'placeholder' => 'preacher'])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <label for="inputText3" class="col-form-label">Picture</label>
                                                <div class="custom-file mb-3">
                                                    {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                                    <br/>
                                                    <label class="custom-file-label" for="customFile">Select Picture</label>
                                                </div>
                                                <label for="inputText3" class="col-form-label">Audio File</label>
                                                <div class="custom-file mb-3">

                                                    {{Form::file('audio', ['class'=> 'custom-file-input'])}}
                                                    <br/>
                                                    <label class="custom-file-label" for="customFile">Select Audio File</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Post Summary</label>
                                                    {{Form::textarea('summary', '', ['class' => 'form-control', 'placeholder' => 'Post Summary', 'rows' => 4])}}
                                                </div>
                                                {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

         </div>
         </div>





        </div>
    </div>
</div>
@endsection