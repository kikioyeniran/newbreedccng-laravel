@extends('layouts.newapp')

@section('content')

    @foreach($landingpg as $post)
    <div class="hero-wrap js-fullheight" style="background-image: url('/storage/pictures/{{$post->picture}}');" data-stellar-background-ratio="0.5">
    @endforeach
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-0">Newbreed Christian Community</h1>
                    <h3 class="subheading mb-4 pb-1">Welcome To Perfecting Church</h3>
                    <p><a href="#" class="btn btn-primary py-3 px-4">New here!</a> <a href="#" class="btn btn-white py-3 px-4"><span class="icon-play-circle"></span>See Our YouTube Channel</a></p>
                    <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro py-5">
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($events as $post)
                <div class="item">
                    <img src="/storage/pictures/{{$post->picture}}" class="img-fluid" alt="12">
                </div>
           @endforeach
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

    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-last d-flex flex-column align-items-stretch">
                    @foreach($vision as $post)
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(/storage/pictures/{{$post->vision}});">
                    </div>
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(/storage/pictures/{{$post->mission}});">
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6 px-5 py-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section heading-section-no-line ftco-animate">
                            <h2 class="mb-4">About Newbreed Christian Community</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-praying"></span>
                                    </div>
                                    <strong class="number">Bridging the Gap</strong>
                                    <span>Intercession, Evangelism and Crusades</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-bible"></span>
                                    </div>
                                    <strong class="number">Newbreed's Bible Illumina</strong>
                                    <span>Teaching, Doctrine and Establishing Clarity</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-promotion"></span>
                                    </div>
                                    <strong class="number">The Glory Brook</strong>
                                    <span>Newbreed Music and Arts Ministry</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-social-care"></span>
                                    </div>
                                    <strong class="number">Church Ministry</strong>
                                    <span>The Perfecting Church</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
                    <h2 class="mb-2"><span class="px-4">Our Latest Sermon</span></h2>
                    <span class="subheading">Experience God's Presence</span>
                </div>
            </div>

            <div class="row d-flex sermon-wrap">
                <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                    @foreach($sermons as $post)
                    <div class="img" style="background-image: url(/storage/pictures/{{$post->picture}});"></div>
                </div>
                <div class="col-md-6 py-4 text ftco-animate">
                    <h2 class="mb-4"><a href="#">{{$post->title}}</a></h2>
                    <div class="meta">
                        <p>
                            <span>Sermon from: <a href="#" class="ptr">{{$post->preacher}}</a></span>
                            <span><a href="#">{{$post->created_at}}</a></span>
                        </p>
                    </div>
                    <p>{{$post->summary}}</p>
                    <p class="mt-4 btn-customize">
                        <a href="#" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="icon-play"></span> Watch Sermons</a> <a href="#" class="btn btn-black px-4 py-3 ml-lg-2"><span class="icon-download"></span> Download Sermons</a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @foreach($background as $post)
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
                        @foreach($testimonies as $post)
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

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-5">
                    <div class="heading-section heading-section-no-line ftco-animate mb-5">
                        <h2 class="mb-2">Upcoming Events</h2>
                        <span class="subheading">Join Us: Experience Perfection</span>
                    </div>
                    @foreach($events as $post)
                    <?php
                        $dt = $post->dt;
                        $date = date("M-jS, Y", strtotime($dt));
                    ?>
                        <div class="event-wrap d-md-flex ftco-animate">
                            <div class="img" style="background-image: url(/storage/pictures/{{$post->picture}});"></div>
                            <div class="text pl-md-5">
                                <h2 class="mb-3"><a href="/events">{{$post->theme}}a></h2>
                                <div class="meta">
                                    <p>
                                        <span><i class="icon-calendar mr-2"></i><?php echo $date; ?></span>
                                        <span><i class="icon-my_location mr-2"></i> <a href="#">{{$post->location}}</a></span>
                                    </p>
                                </div>
                                <p><a href="sermons.php" class="btn btn-primary">Join Us</a></p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    @foreach($ebooks as $post)
                        <div class="subsermon p-5">
                            <h2 class="heading mb-5 ftco-animate">Recent E-Books</h2>
                            <div class="sermon-wrap mb-4 ftco-animate">
                                <a href="sermons.html" class="img mb-3" style="background-image: url(/storage/pictures/{{$post->picture}});"></a>
                                <div class="text">
                                    <h2 class="mb-4"><a href="/ebooks">{{$post->title}}</a></h2>
                                    <div class="meta">
                                        <p>
                                            <span>Author: <a href="/ebooks" class="ptr">{{$post->author}}</a></span>
                                            <span>{{$post->summary}}</span>
                                        </p>
                                    </div>
                                    <p class="mt-4">
                                        <a href="ebooks.php" class="btn-custom  p-2 text-center"><span class="icon-download"></span> Download E-Books</a>
                                    </p>
                                </div>
                            </div>
                            <a href="ebooks.php" class="sermon-wrap sermon-wrap-2 d-flex align-items-start py-3 ftco-animate">
                                <div class="icon">
                                    <span class="icon-download"></span>
                                </div>
                                <div class="desc">
                                    <h3>The Bible Code</h3>
                                </div>
                            </a>
                            <a href="ebooks.php" class="sermon-wrap sermon-wrap-2 d-flex align-items-start py-3 ftco-animate">
                                <div class="icon">
                                    <span class="icon-download"></span>
                                </div>
                                <div class="desc">
                                    <h3>Forever Young</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
                    <h2 class="mb-2"><span class="px-4">Recent Blog Posts</span></h2>
                    <span class="subheading">Our Blog</span>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($blog as $post)
                <?php
                    $dt = $post->created_at;
                    $new_dt = explode(" ", $dt);
                    $date = date("M, j, Y", strtotime($new_dt[0]));
                    $timw = $new_dt[1];
                    $new_dt2 = explode(",", $date);
                    $month = $new_dt2[0];
                    $day = $new_dt2[1];
                    $year = $new_dt2[2];
                ?>
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="/blog" class="block-20" style="background-image: url('/storage/pictures/{{$post->picture}}');">
                            </a>
                            <div class="text d-flex float-right d-block">
                                <div class="topper text-center pt-4 px-3">
                                    <span class="day"><?php echo $day; ?></span>
                                    <span class="mos"><?php echo $month; ?></span>
                                    <span class="yr"><?php echo $year; ?></span>
                                </div>
                                <div class="desc p-4">
                                    <h3 class="heading mt-2"><a href="#">{{$post->title}}</a></h3>
                                    <p>{{$post->summary}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                <a href="/storage/pictures/{{$post->picture}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/storage/pictures/{{$post->picture}});">
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

