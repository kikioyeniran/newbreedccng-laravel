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
                    <h2 class="pageheader-theme">Home</h2>
                    <p class="pageheader-text">Newbreed Pages Background</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Background Photos</li>
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
                    <h5 class="card-header">Edit Background</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['BgPicsController@update', $background->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row">
                                <div class="custom-file mb-3">
                                    {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                    <br/>
                                    <label class="custom-file-label" for="customFile">Select New Picture</label>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Update', ['class'=> 'btn btn-primary'])}}
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