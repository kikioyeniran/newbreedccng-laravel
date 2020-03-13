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
                    <h2 class="pageheader-testifier">Home</h2>
                    <p class="pageheader-text">Newbreed Testimonies</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonies</li>
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
                    <h5 class="card-header">Edit Testimony</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['TestimoniesController@update', $testimony->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Testifier</label>
                                        {{Form::text('testifier', $testimony->testifier, ['class' => 'form-control', 'placeholder' => 'testifier'])}}
                                    </div>
                                    <div class="custom-file mb-3">
                                        {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Picture</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Testimony</label>
                                        {{Form::textarea('testimony', $testimony->testimony, ['class' => 'form-control', 'placeholder' => 'testimony Location', 'rows' => 4])}}
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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