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

                @if($departmentInfo->status == 1)
                @if($departmentInfo->departmentName == 'utumishi')
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>{{$departmentInfo->service}}</span></li>
                </ul>
                @elseif($departmentInfo->departmentName == 'mipango')
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>{{$departmentInfo->service}}</span></li>
                </ul>
                @elseif($departmentInfo->departmentName == 'uratibu')
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>{{$departmentInfo->service}}</span></li>
                </ul>
                @elseif($departmentInfo->departmentName == 'idara maalum')
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>{{$departmentInfo->service}}</span></li>
                </ul>
                @elseif($departmentInfo->departmentName == 'mrajis')
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>{{$departmentInfo->service}}</span></li>
                </ul>
                @else
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>No Data</span></li>
                </ul>
                @endif
                @endif

                <h3>Nyaraka</h3>
                @if($docInfo->status == 1)

                @if($docInfo->departmentName == 'utumishi')
                <ul>
                    <li><a href="{{ asset('storage/uploads/document_files/'.$docInfo->document)}}" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> {{$docInfo->fileName}}</a></li>
                </ul>
                @elseif($docInfo->departmentName == 'mipango')
                <ul>
                    <li><a href="{{ asset('storage/uploads/document_files/'.$docInfo->document)}}" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> {{$docInfo->fileName}}</a></li>
                </ul>
                @elseif($docInfo->departmentName == 'uratibu')
                <ul>
                    <li><a href="{{ asset('storage/uploads/document_files/'.$docInfo->document)}}" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> {{$docInfo->fileName}}</a></li>
                </ul>
                @elseif($docInfo->departmentName == 'idara maalum')
                <ul>
                    <li><a href="{{ asset('storage/uploads/document_files/'.$docInfo->document)}}" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> {{$docInfo->fileName}}</a></li>
                </ul>
                @elseif($docInfo->departmentName == 'mrajis')
                <ul>
                    <li><a href="{{ asset('storage/uploads/document_files/'.$docInfo->document)}}" class="collapsed card-link" target="_blank" style="color:#000;"><span><img src="{{asset('assets/img/pdf-image1.webp')}}" style="width:35px;height:60px;"></span> {{$docInfo->fileName}}</a></li>
                </ul>
                @else
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>No Data</span></li>
                </ul>
                @endif

                @endif


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