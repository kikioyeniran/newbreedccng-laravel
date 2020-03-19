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
                        <p class="pageheader-text">Contacts List</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">List of Ministry Contacts</h5>

                        <div class="table-responsive ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $post)
                                        <tr>
                                            <th scope="row">{{$post->id}}</th>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->phone}}</td>
                                            <td><a href="#">{{$post->email}}</a></td>
                                            <td>{{$post->message}}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-content-center">
                {{$contacts->links()}}
            </div>
        </div>
    </div>
@endsection