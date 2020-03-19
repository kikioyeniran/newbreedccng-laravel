@extends('layouts.newapp')

@section('content')
    @foreach($background as $post)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/pictures/{{$post->picture}}');" data-stellar-background-ratio="0.5">
    @endforeach
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach($blog as $post)
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

                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end"><a href = "">
                            <a href="/blog/{{$post->id}}" class="block-20" style="background-image: url('/storage/pictures/{{$post->picture}}');">
                            </a>
                            <div class="text d-flex float-right d-block">
                                <div class="topper text-center pt-4 px-3">
                                        <span class="day"><?php echo $day;?></span>
                                        <span class="mos"><?php echo $month;?></span>
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
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            {{$blog->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection