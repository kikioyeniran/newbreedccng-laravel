@extends('layouts.newapp')

@section('content')
    @foreach($background as $post)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/pictures/{{$post->picture}}');" data-stellar-background-ratio="0.5">
    @endforeach
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-daily-verse bg-light">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 daily-verse text-center p-5">
            <span class="flaticon-bible"></span>
            <h3 class="ftco-animate">"12 For the perfecting of the saints, for the work of the ministry, for the edifying of the body of Christ:"</h3>
            <h4 class="h5 mt-4 font-weight-bold ftco-animate">&mdash; Ephesians 4:12 KJV</h4>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
            <p><span>Address:</span> 16, Chief Ejims Street, Off Stadium Road, Port-Harcout, Rivers State, Nigeria.</p>
            </div>
            <div class="col-md-3">
            <p><span>Phone:</span> <a href="#">+ 2347 0111 3186</a></p>
            </div>
            <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@newbreedccng.org">info@newbreedccng.org</a></p>
            </div>
            <div class="col-md-3">
            <p><span>Website</span> <a href="#">www.newbreedccng.org</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-lg-6 order-md-last d-flex">
                {!! Form::open(['action' => 'ContactsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'bg-light p-5 contact-form']) !!}
                    <div class="form-group">
                        {{-- <input type="text" class="form-control" placeholder="Your Name" name="name"> --}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name'])}}
                    </div>
                    <div class="form-group">
                        {{-- <input type="text" class="form-control" placeholder="Your Email" name="email"> --}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Your Email'])}}
                    </div>
                    <div class="form-group">
                        {{-- <input type="text" class="form-control" placeholder="Phone Number" name="phone"> --}}
                        {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
                    </div>
                    <div class="form-group">
                        {{-- <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea> --}}
                        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 7, 'cols'=> 30])}}
                    </div>
                    <div class="form-group">
                        {{-- <input type ="submit" name = "submit" id= "submit" value="Send Message" class="btn btn-primary py-3 px-5"> --}}
                        {{Form::submit('Send Message', ['class'=> 'btn btn-primary py-3 px-5'])}}
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
        </div>
    </section>
@endsection