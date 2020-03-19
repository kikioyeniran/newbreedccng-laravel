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
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/blog">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
        </div>
    </section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
            <p><img src="/storage/pictures/{{$blog->picture}}" alt="" class="img-fluid"></p>
            <h2 class="mb-3">{{$blog->title}}</h2>
            <p>{{$blog->main_post}}</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                    <a href="/blog" class="tag-cloud-link">Faith</a>
                    <a href="/blog" class="tag-cloud-link">Love</a>
                    <a href="/blog" class="tag-cloud-link">Relationships</a>
                    <a href="/blog" class="tag-cloud-link">Healing</a>
                    <a href="/blog" class="tag-cloud-link">Prayer</a>
                    <a href="/blog" class="tag-cloud-link">Worship</a>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog Post</h3>
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
                <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/storage/pictures/{{$post->picture}});"></a>
                <div class="text">
                    <h3 class="heading"><a href="/blog">{{$post->title}}</a></h3>
                    <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo " ". $date; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span>{{$post->author}}</a></div>
                    </div>
                </div>
                </div>
            @endforeach
          </div>


          <div class="sidebar-box ftco-animate">
            <h3>Blog Topics</h3>
            <div class="tagcloud">
              <a href="/blog" class="tag-cloud-link">Faith</a>
              <a href="/blog" class="tag-cloud-link">Love</a>
              <a href="/blog" class="tag-cloud-link">Relationships</a>
              <a href="/blog" class="tag-cloud-link">Healing</a>
              <a href="/blog" class="tag-cloud-link">Prayer</a>
              <a href="/blog" class="tag-cloud-link">Worship</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Ephesians 4:12 KJV</h3>
            <p>"12 For the perfecting of the saints, for the work of the ministry, for the edifying of the body of Christ:"</p>
                  </div>
        </div>

      </div>
    </div>
</section> <!-- .section -->
@endsection