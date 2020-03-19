@extends('layouts.newapp')

@section('content')
    @foreach($background as $post)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/pictures/{{$post->picture}}');" data-stellar-background-ratio="0.5">
    @endforeach
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-2 bread">Watch &amp; Listen To Our Sermons</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sermons <i class="ion-ios-arrow-forward"></i></span></p>
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
                    @foreach($latest as $post)
                    <?php
                        $dt = $post->created_at;
                        $new_dt = explode(" ", $dt);
                        $date = date("M, jS, Y", strtotime($new_dt[0]));
                        $timw = $new_dt[1];
                        $new_dt2 = explode(",", $date);
                        $month = $new_dt2[0];
                        $day = $new_dt2[1];
                        $year = $new_dt2[2];
                    ?>
                    <div class="img" style="background-image: url(/storage/pictures/{{$post->picture}});"></div>
                </div>
                <div class="col-md-6 py-4 text ftco-animate">
                    <h2 class="mb-4"><a href="#">{{$post->title}}</a></h2>
                    <div class="meta">
                        <p>
                            <span>Sermon from: <a href="#" class="ptr">{{$post->preacher}}</a></span>
                            <span><a href="#"><?php echo $day . '-' . $month . ' , ' . $year ?></a></span>
                        </p>
                    </div>
                    <p>{{$post->summary}}p>
                    <p class="mt-4 btn-customize">
                        <audio controls>
                            <source src='/storage/audios/{{$post->audio}}' type="audio/mpeg"></audio>
                    </p>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span class="px-4">Our Sermons</span></h2>
                    <span class="subheading">Experience God's Presence. Download These Sermons Free</span>
                </div>
            </div>
            <div class="row">
                @foreach($sermons as $post)
                    <?php
                        $dt = $post->created_at;
                        $new_dt = explode(" ", $dt);
                        $date = date("M, jS, Y", strtotime($new_dt[0]));
                        $timw = $new_dt[1];
                        $new_dt2 = explode(",", $date);
                        $month = $new_dt2[0];
                        $day = $new_dt2[1];
                        $year = $new_dt2[2];
                    ?>
                    <div class="col-md-4">
                        <div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
                            <a href="sermons.html" class="img" style="background-image: url(/storage/pictures/{{$post->picture}});"></a>
                            <div class="text p-4 bg-light text-center">
                                <h2 class="mb-3"><a href="sermon.php">{{$post->title}}</a></h2>
                                <div class="meta">
                                    <p>
                                        <span class="mr-2">Sermon from: <a href="#" class="ptr">{{$post->preacher}}</a></span>
                                        <span><a href="#"><?php echo $day . '-' . $month . ' , ' . $year ?></a></span>
                                    </p>
                                </div>
                                <p class="">
                                    <audio controls>
                                        <source src='/storage/audios/{{$post->audio}}' type="audio/mpeg"></audio>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            {{$sermons->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection