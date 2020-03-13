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
                    <p class="pageheader-text">Edit Blog Posts</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Blog Post</li>
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
                <div class="card">
                    <h5 class="card-header">Edit Post</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['BlogController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Title</label>
                                        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Author</label>
                                        {{Form::text('author', $post->author, ['class' => 'form-control', 'placeholder' => 'Author'])}}
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="custom-file mb-3">
                                        {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Picture</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Post Summary</label>
                                        {{Form::textarea('summary', $post->summary, ['class' => 'form-control', 'placeholder' => 'Post Summary', 'rows' => 4])}}
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Main Post</label>
                                        {{Form::textarea('main_post', $post->main_post, ['class' => 'form-control', 'placeholder' => 'Main Blog Post', 'rows' => 4])}}
                                    </div>
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection