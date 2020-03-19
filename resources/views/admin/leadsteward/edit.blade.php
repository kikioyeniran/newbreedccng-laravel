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
                    <p class="pageheader-text">Edit Lead Steward Information</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lead Steward</li>
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
                    <h5 class="card-header">Update Lead Steward Image</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['LeadstewardController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                            <img src='../../storage/pictures/{{$post->picture}}' alt="user" class="rounded" width="100%">
                            <div class="custom-file mb-3">
                                {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                <br/>
                                <label class="custom-file-label" for="customFile">Select New Picture</label>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Landing Text Update</h5>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Landing Text</label>
                            {{Form::textarea('profile', $post->profile, ['class' => 'form-control', 'placeholder' => 'Lead Stweward Profile', 'rows' => 8])}}
                        </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update', ['class'=> 'btn btn-primary'])}}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
         </div>

    </div>
</div>
@endsection