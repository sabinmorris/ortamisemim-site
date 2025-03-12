@extends('layouts.app')
@section('content')

<!-- Page Title -->
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Uendeshaji na Utumishi</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{Route('/')}}">Mwanzo</a></li>
                <li class="current">Utumishi</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8 content" data-aos="fade-up" data-aos-delay="100">
                <h3>HUDUMA ZINAZOTOLEWA</h3>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Kusimamia Sera, Sheria na Kanuni mbali mbali za Ofisi.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Kubuni na kusimamia utekelezaji wa miradi ya maendeleo.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Kudumisha Amani, Ulinzi na Usalama katika Mikoa na Wilaya hadi Shehia.</span></li>

                </ul>

                <h3>Nyaraka</h3>
                <ul>
                    <li><a href="#" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> Description</a></li>
                    <li><a href="#" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> Description</a></li>
                    <li><a href="#" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> Description</a></li>

                </ul>

            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">
                    <!-- Recent Posts Widget -->
                    @include('inc.currentpost')
                    <!--/Recent Posts Widget -->

                    <!-- Recent anouncement -->
                    @include('inc.anouncement')
                    <!--End Recent anouncement -->
                </div>

            </div>

        </div>

    </div>
</section><!-- /About Section -->
@endsection