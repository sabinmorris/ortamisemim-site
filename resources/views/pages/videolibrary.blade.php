@extends('layouts.app')
@section('content')

<!-- Page Title -->
<div class="page-title position-relative">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Maktaba ya Video</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{Route('/')}}">Mwanzo</a></li>
                <li class="current">Videos</li>
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

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""> -->
                                    <span class="post-date">December 12 2025</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                                    <!-- <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                        </div>
                      </div> -->
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span class="post-date">March 19 2025</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden h-50">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span class="post-date">June 24</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h100">

                                <div class="post-img position-relative overflow-hidden">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span class="post-date">August 05</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</h3>

                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative">

                                <div class="post-img position-relative overflow-hidden">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span class="post-date">September 17</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>

                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <iframe class="col-lg-12 img-fluid" src="https://www.youtube.com/embed/K7h06JegpoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span class="post-date">December 07</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>

                                </div>

                            </article>
                        </div><!-- End post list item -->

                    </div>
                </div>

            </section><!-- /Blog Posts Section -->

            <!-- Blog Pagination Section -->
            <section id="blog-pagination" class="blog-pagination section">

                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul>
                            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>

            </section><!-- /Blog Pagination Section -->

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

                <!-- Recent Video Widget -->
                @include('inc.currentvideo')
                <!--/Recent Video Widget -->
            </div>

        </div>

    </div>
</div>
@endsection