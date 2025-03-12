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

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                                    <span class="post-date">December 12</span>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                                    <span class="post-date">March 19</span>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                                    <span class="post-date">June 24</span>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
                                    <span class="post-date">August 05</span>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
                                    <span class="post-date">September 17</span>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
                                    <span class="post-date">December 07</span>
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

                <!-- Recent Posts Widget -->
                @include('inc.currentpost')
                <!--/Recent Posts Widget -->
            </div>

        </div>

    </div>
</div>
@endsection