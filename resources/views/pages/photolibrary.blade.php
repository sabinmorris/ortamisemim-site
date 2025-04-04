@extends('layouts.app')
@section('content')

<!-- Page Title -->
<div class="page-title position-relative">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Maktaba ya Picha</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{Route('/')}}">Mwanzo</a></li>
                <li class="current">Picha</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">

        <div class="col-lg-8">

            <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">

                <div class="container">
                    <div class="row gy-4">

                        @if(count([$postInfos1]) > 0)
                        @foreach($postInfos1 as $postInfo)
                        @if($postInfo->post_status == 1)
                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/uploads/post_images/'.$postInfo->post_image)}}" class="img-fluid" alt="">
                                    <span class="post-date">{{$postInfo->created_at->diffForHumans()}}</span>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                        @endif
                        @endforeach
                        @endif

                        @if(count([$slideInfos]) > 0)
                        @foreach($slideInfos as $slideInfo)
                        @if($slideInfo->status == 1)
                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/uploads/slide_images/'.$slideInfo->slide_image)}}" class="img-fluid" alt="">
                                    <span class="post-date">{{$postInfo->created_at->diffForHumans()}}</span>
                                </div>
                            </article>
                        </div><!-- End post list item -->
                        @endif
                        @endforeach
                        @endif

                    </div>
                </div>
            </section><!-- /Blog Posts Section -->

        </div>

        <div class="col-lg-4 sidebar">

            <div class="widgets-container">

                <!-- Blog Author Widget 2 -->
                @include('inc.waziriwidget')
                <!--/Blog Author Widget 2 -->

                <!-- Search Widget -->
                <div class="search-widget widget-item">

                    <h3 class="widget-title">Search</h3>
                    <form action="">
                        <input type="text">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>

                </div><!--/Search Widget -->

                <!-- Recent Posts Widget -->
                @include('inc.currentpost')
                <!--/Recent Posts Widget -->
            </div>

        </div>

    </div>
</div>
@endsection