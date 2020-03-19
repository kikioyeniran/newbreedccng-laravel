@extends('layouts.newapp')

@section('content')
    @foreach($bgAbt as $post)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/pictures/{{$post->picture}}');" data-stellar-background-ratio="0.1">
    @endforeach
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-4 order-last d-flex flex-column align-items-stretch">
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(images/pic26.jpg);">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section heading-section-no-line ftco-animate">
                            <h3 class="mb-4">About Us</h3>
                            <p>Newbreed Christian Community is an apostolic set-up mandated by God to raise a generation with a passion for the Glory of Christ, representing the whole counsel of God.
                                We are on a mission to present all men perfect in Christ by maturing the saints to come unto the measure of the stature of the fullness of Christ.
                                For this reason we are also known as THE PERFECTING CHURCH, drawing from Ephesians 4:11-13</p>
                            <hr>
                            <p>Among many other reasons, we are called NEWBREED because We emphasize what Christ has done and is doing in the new creation. We always in declare "In Christ, I am God's Newbreed". Thus We are passionate about spiritual growth and the all round, complete development of the new man in Christ. This influences everything we do.</p>
                            <hr>
                            <p>The Ministry has it's Church base in Port Harcourt, Rivers State, Nigeria. However it runs bi-monthly meetings (I.e Once in two months in Lagos and Abuja, Nigeria). You can check our events page to see the next meeting close to you.</p>
                            <hr>
                            <p>Do well to be a part of the NewbreedCC and watch yourself evolve into all that Christ prayed for and paid for.</p>
                            <h3 class="mb-4">Welcome On Board!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span class="px-4">How We Do What We Do</span></h2>
                    <span class="subheading">About NCC</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span class="flaticon-praying"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Prayers</h3>
                            <p>We train people to love prayer and enjoy the spiritual bliss of communing with God by Jesus Christ </p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span class="flaticon-bible"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Bible Study</h3>
                            <p>We train the saints to understand the bible, especially the doctrine set forth by Jesus Christ and his holy apostles.</p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span class="flaticon-promotion"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Evangelism</h3>
                            <p>We are a people on a mission raising saints passionate about saving the souls of other men by the gospel of Jesus Christ.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-church"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Orthodox Discipleship</h3>
                            <p>We are intentional and serious about training the saints, seeing them grow and become burning and shining lights.</p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-social-care"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Nurturing Gifts</h3>
                            <p>Everyone has a place with us! We nurture saints into greatness by giving them an opportunity to blossom. </p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-praying"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Spiritual Fervor</h3>
                            <p>We celebrate the ministry of the Holy Spirit, we celebrate miracles, signs and wonders!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @foreach($leadsteward as $post)
    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-last d-flex flex-column align-items-stretch">
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center leadsteward" style="background-image:url(/storage/pictures/{{$post->picture}}); width:100% !important;">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section heading-section-no-line ftco-animate">
                            <h2 class="mb-4">Meet The Lead Steward</h2>
                            <p>{{$post->profile}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    @foreach($bgTest as $post)
    <section class="ftco-section testimony-section" style="background-image: url(/storage/pictures/{{$post->picture}});">
    @endforeach
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-2">Inspirational Testimonies</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($testimony as $post)
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(/storage/pictures/{{$post->picture}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text p-3">
                                        <p class="mb-4">{{$post->testimony}}</p>
                                        <p class="name">{{$post->testifier}}</p>
                                        <span class="position">Member</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row no-gutters">
                        @foreach($gallery as $post)
                            <div class="col-md-3 ftco-animate">
                                <a href="/storage/pictures/{{$post->picture}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/storage/pictures/{{$post->picture}}">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="icon-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
