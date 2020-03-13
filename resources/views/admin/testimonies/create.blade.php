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
         <div class="influence-profile-content pills-regular">
            <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">View All Testimonies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Create New Testimony</a>
                </li>
            </ul>
            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                        <div class="card">
                            <h5 class="card-header">All Testimonies <strong>Click Image to Edit Testimony</strong></h5>
                            <div class="card-body">
                                <div class="row">
                                    @if(count($testimonies) > 0)
                                        @foreach($testimonies as $testimony)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Testifier: {{$testimony->testifier}}</h5>
                                                    <div class="card-body">
                                                        <div>
                                                        <a href = "/testimony/{{$testimony->id}}/edit"><img src="../storage/pictures/{{$testimony->picture}}" alt="user" class="rounded" width="100%"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-light">
                                                        <div id="sparkline-1">{{$testimony->testimony}}</div>
                                                    </div>
                                                    <div class="card-footer text-center bg-white">
                                                        {!!Form::open(['action'=>['TestimoniesController@destroy', $testimony->id], 'method'=> 'POST'])!!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete Testimony', ["class" => "btn btn-danger", "onclick" => "return confirm('Are you sure you want to delete this picture?');"])}}
                                                        {!!Form::close()!!}
                                                    {{-- <a href = "" onclick="return confirm('Are you sure you want to delete this picture?');">Delete testimony</a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <br/>
                                        @endforeach
                                        <div class="align-content-center">
                                            {{$testimonies->links()}}
                                        </div>
                                    @else
                                        <p>No Testimonies found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Create New testimony</h5>
                                <div class="card-body">
                                    {!! Form::open(['action' => 'TestimoniesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Testifier</label>
                                                    {{Form::text('testifier', '', ['class' => 'form-control', 'placeholder' => 'testifier'])}}
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
                                                    {{Form::textarea('testimony', '', ['class' => 'form-control', 'placeholder' => 'testimony Location', 'rows' => 4])}}
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