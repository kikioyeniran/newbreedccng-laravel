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
                    <p class="pageheader-text">Edit vision and mission statement of newbreed.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Viion and Mission</li>
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
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Update Vision Image</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['VisionController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <img src='../../storage/pictures/{{$post->vision}}' alt="user" class="rounded" width="100%">
                            <div class="custom-file mb-3">
                                {{Form::file('vision', ['class'=> 'custom-file-input'])}}
                                <br/>
                                <label class="custom-file-label" for="customFile">Select New Vision Image</label>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Update Mission Image</h5>
                    <div class="card-body">
                        <img src='../../storage/pictures/{{$post->mission}}' alt="user" class="rounded" width="100%">
                        <div class="custom-file mb-3">
                            {{Form::file('mission', ['class'=> 'custom-file-input'])}}
                            <br/>
                            <label class="custom-file-label" for="customFile">Select New Mission Image</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Update', ['class'=> 'btn btn-primary btn-lg'])}}

                {!! Form::close() !!}
            </div>
         </div>

    </div>
</div>
@endsection