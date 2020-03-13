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
                    <p class="pageheader-text">Newbreed Pictures</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                    <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">View Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Create New Event</a>
                </li>
            </ul>
            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                        <div class="card">
                            <h5 class="card-header">All Events <strong>Click Image to Edit Event</strong></h5>
                            <div class="card-body">
                                <div class="row">
                                    @if(count($galleries) > 0)
                                        @foreach($galleries as $gallery)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">THEME: {{$event->theme}}</h5>
                                                    <div class="card-body">
                                                        <div class="metric-value d-inline-block">
                                                            <h4 class="mb-1">DATE: {{$event->dt}}</h4>
                                                        </div>
                                                        <div>
                                                        <a href = "#"><img src="../storage/pictures/{{$event->picture}}" alt="user" class="rounded" width="100%"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-light">
                                                        <div id="sparkline-1">{{$event->location}}</div>
                                                    </div>
                                                    <div class="card-footer text-center bg-white">
                                                        {!!Form::open(['action'=>['EventsController@destroy', $event->id], 'method'=> 'POST'])!!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete event', ['class' => 'btn btn-danger'])}}
                                                        {!!Form::close()!!}
                                                    {{-- <a href = "" onclick="return confirm('Are you sure you want to delete this picture?');">Delete event</a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <br/>
                                        @endforeach
                                        <div class="align-content-center">
                                            {{$events->links()}}
                                        </div>
                                    @else
                                        <p>No events found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Create New Event</h5>
                                <div class="card-body">
                                    {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Theme</label>
                                                    {{Form::text('theme', '', ['class' => 'form-control', 'placeholder' => 'theme'])}}
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
                                                    {{Form::textarea('location', '', ['class' => 'form-control', 'placeholder' => 'Event Location', 'rows' => 2])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

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