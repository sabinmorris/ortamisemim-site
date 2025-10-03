@extends('layouts.app')
@section('content')

<!-- Slider Section -->

<section id="slider" class="slider section dark-background">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .swiper {
      width: 69%;
      height: 75vh;
      /* Fullscreen slider */
    }

    .swiper-slide {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2rem;
      color: #fff;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Auto crop images */
    }

    /* Navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
      color: #fff;
    }

    /* Pagination */
    .swiper-pagination-bullet {
      background: #fff;
      opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
      background: #007aff;
      opacity: 1;
    }
  </style>


  <!-- Swiper -->
  <div class="swiper mySwiper">

    <div class="swiper-wrapper">
      @if(count([$slideInfos]) > 0)
      @foreach($slideInfos as $slideInfo )
      <div class="swiper-slide"><img src="{{ asset('storage/uploads/slide_images/' .$slideInfo->slide_image)}}" alt="Slide 1">
      
    </div>
    <div class="content">
        <h2><a href="#">{{$slideInfo->tittle}}</a></h2>
        <p>{{$slideInfo->caption}}.</p>
      </div>
      @endforeach
      @endif
    </div>


    <!-- Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Config -->
  <script>
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      speed: 800,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true // ✅ Pause on hover
      },
      slidesPerView: 1,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  </script>

</section><!-- /Slider Section -->


<!-- Culture Category Section -->
<section id="culture-category" class="culture-category section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="section-title-container d-flex align-items-center justify-content-between">
      <h2>Or-tamisemim-Habari</h2>
      <p><a href="{{Route('events')}}">Angali Habari Zote</a></p>
    </div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-md-8">
        @if(count([$postInfos1]) > 0)
        @foreach($postInfos1 as $postInfo)
        @if($postInfo->post_status == 1)
        <div class="d-lg-flex post-entry">
          <a href="{{Route('read_more', $postInfo->id)}}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
            <img src="{{ asset('storage/uploads/post_images/' .$postInfo->post_image)}}" alt="" class="img-fluid">
          </a>
          <div>
            <div class="post-meta"><span class="date">Post</span> <span class="mx-1">•</span> <span>{{$postInfo->created_at->diffForHumans()}}</span> <span style="float: right;"><i class="bi bi-people"></i>{{$postInfo->view_count}}</span></div>
            <h3><a href="{{Route('read_more', $postInfo->id)}}">{{$postInfo->post_tittle}}</a></h3>
            @if(substr($postInfo->post_description, 0,200))
            <p>
              {!! htmlspecialchars_decode(substr($postInfo->post_description, 0,255)) !!}
              <hr>
              <!-- class="stretched-link" this class used to keep all page linke with one linke addres define within -->
              <a href="{{Route('read_more', $postInfo->id)}}" class="readmore"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </p>
            @else
            {!! htmlspecialchars_decode($postInfo->post_description) !!}
            <hr>
            </p>
            @endif

            <!-- <div class="d-flex align-items-center author">
              <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
              <div class="name">
                <h3 class="m-0 p-0">Wade Warren</h3>
              </div>
            </div> -->
          </div>
        </div>
        @endif
        @endforeach
        @endif

        @if(count([$ministerInfos]) > 0)
        @foreach($ministerInfos as $ministerInfo)
        @if($ministerInfo->status == 1)
        <div class="row">
          <div class="col-lg-4">
            <div class="post-list border-bottom">
              <a href="single-post.html#"><img src="{{ asset('storage/uploads/minister_images/' .$ministerInfo->minister_image)}}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Post</span> <span class="mx-1">•</span> <span>{{$ministerInfo->created_at->diffForHumans()}}</span></div>
              <h2 class="mb-2"><a href="single-post.html#">{{$ministerInfo->minister_title}}</a></h2>
              <span class="author mb-3 d-block">{{$ministerInfo->minister_name}}</span>
            </div>
          </div>

          <div class="col-lg-8" style="margin-top: 100px;">
            <div class="post-list">
              <p class="mb-4 d-block">{{$ministerInfo->description}}</p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @endif

      </div>

      <div class="col-md-4">
        <!-- Recent Posts Widget -->
        @include('inc.currentpost')
        <!-- <div class="recent-posts-widget widget-item"> -->



        <!-- </div> -->
        <!--/Recent Posts Widget -->

        <!-- Recent Video Widget -->
        @include('inc.currentvideo')
        <!--/Recent Video Widget -->

        <!-- Recent anouncement -->
        @include('inc.anouncement')
        <!--End Recent anouncement -->
      </div>
    </div>

  </div>

</section><!-- /Culture Category Section -->

@endsection