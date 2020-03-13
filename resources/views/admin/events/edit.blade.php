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
                    <p class="pageheader-text">Edit Event Posts</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Event Post</li>
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
                    <h5 class="card-header">Edit Event</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Theme</label>
                                        {{Form::text('theme', $event->theme, ['class' => 'form-control', 'placeholder' => 'theme'])}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Select Date</label>
                                        {{-- <div class="input-group date" id="datetimepicker10" data-target-input="nearest"> --}}
                                            {{-- <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" /> --}}
                                            {{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control datetimepicker-input', 'data-target' => '#datetimepicker10'])}}
                                            {{-- <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="custom-file mb-3">
                                        {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Picture</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Event Location</label>
                                        {{Form::textarea('location', $event->location, ['class' => 'form-control', 'placeholder' => 'Event Location', 'rows' => 2])}}
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