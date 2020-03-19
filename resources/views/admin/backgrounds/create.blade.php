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
                                <li class="breadcrumb-item active" aria-current="page">Background Photos</li>
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
                    <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">View All Backgrounds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Create Background</a>
                </li>
            </ul>
            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                        <div class="card">
                            <h5 class="card-header">All Background Photos</h5>
                            <div class="card-body">
                                <div class="row">
                                    @if(count($backgrounds) > 0)
                                        @foreach($backgrounds as $background)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">{{$background->page}} page background</h5>
                                                    <div class="card-body">
                                                        <div>
                                                        <a href = "#"><img src="../storage/pictures/{{$background->picture}}" alt="user" class="rounded" width="100%"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-center bg-white">
                                                        <div>
                                                            <a href = "/background/{{$background->id}}/edit" class="btn btn-primary">Update Background</a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br/>
                                        @endforeach
                                        <div class="align-content-center">
                                            {{$backgrounds->links()}}
                                        </div>
                                    @else
                                        <p>No Picture found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Create Background Photos</h5>
                                <div class="card-body">
                                    {{-- {!! Form::open(['action' => 'BgPicsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            <div class="custom-file mb-3">
                                                {{Form::file('picture', ['class'=> 'custom-file-input'])}}
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select New Picture</label>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::select('page', ['about' => 'About page', 'sermons' => 'Sermons page', 'events' => 'Events page', 'contact' => 'Contact Page', 'ebooks' => 'E-Books Page', 'blog' => 'Blog Page', 'testimony' => 'testimony', 'single-blog' => 'Single Blog Page'], null, ['class'=> 'form-control form-control-lg']) !!}

                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                                            </div>
                                        </div>
                                    {!! Form::close() !!} --}}
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