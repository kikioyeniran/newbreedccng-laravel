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
                    <p class="pageheader-text">Edit the background image, vision and mission statement of newbreed.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about</li>
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
                    <h5 class="card-header">Update Background Image</h5>
                    <div class="card-body">
                        <form method = "post" enctype="multipart/form-data" action="#">

                            <img src='' alt="user" class="rounded" width="100%">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <br/>
                                <label class="custom-file-label" for="customFile">Select another picture</label>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Vision/Mission Statement Update</h5>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Vision Statement</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vision">Our Vission</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mision Statement</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mission">our Mission</textarea>
                        </div>
                        <input type ="submit" name = "update" id= "update" value="Update" class="btn btn-primary">

                        </form>
                    </div>
                </div>
            </div>
         </div>

    </div>
</div>
@endsection