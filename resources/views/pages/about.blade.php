@extends('layouts.app')
@section('content')

<!-- Page Title -->
<div class="page-title">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Kuhusu</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{Route('/')}}">Mwanzo</a></li>
        <li class="current">Kuhusu sisi</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <!-- <p class="who-we-are">Who We Are</p> -->
        <p class="who-we-are">Sisi ni nani</p>
        @if(count([$aboutusInfos]) > 0)
        @foreach($aboutusInfos as $aboutusInfo)
        @if($aboutusInfo->status == 1)
        <h3>{{$aboutusInfo->title}}</h3>
        <p class="fst-italic">
          {{$aboutusInfo->description}}
        </p>
        @endif
        @endforeach
        @endif


        <h3>HUDUMA ZINAZOTOLEWA</h3>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Kusimamia Sera, Sheria na Kanuni mbali mbali za Ofisi.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Kubuni na kusimamia utekelezaji wa miradi ya maendeleo.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Kudumisha Amani, Ulinzi na Usalama katika Mikoa na Wilaya hadi Shehia.</span></li>
          <hr>
          <a href="{{Route('read_more_about')}}" class="readmore"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </ul>

      </div>

      <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/team-tawala.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="assets/img/team-maonesho.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="assets/img/miaka-4-mwinyi.webp" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section><!-- /About Section -->

<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="section-title-container d-flex align-items-center justify-content-between">
      <h2>Viongozi</h2>
      <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 offset-3" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Masoud Ali Suleiman</h4>
            <span>Waziri Or-tamisemim</span>
            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/katibu-mkuu-issa.webp" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Issa Mahafoudh</h4>
            <span>Katibu Mkuu</span>
            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/naibu-katibu-mikidadi.webp" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Mikidadi Mbarouk Mzee</h4>
            <span>Naibu Katibu</span>
            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Haji Sheha Khamis</h4>
                <span>Mratibu Idara Maalum</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div> -->
      <!-- End Team Member -->

    </div>

  </div>

</section><!-- /Team Section -->
@endsection