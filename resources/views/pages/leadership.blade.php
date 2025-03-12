@extends('layouts.app')
@section('content')

<!-- Page Title -->
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Uongozi</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{Route('/')}}">Mwanzo</a></li>
                <li class="current">Uongozi wa Or-tamisemim</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>Or-Tamisemim</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
        </div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 offset-3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Masoud Ali Mohammed</h4>
                        <span>Waziri Or-tamisemim</span>
                        <p>Kazi Nzuri ndio Heshima ktk Taifa</p>
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
                        <p>Hapa Kazi Iendelee</p>
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
                        <p>Kazi ndio kazi ya Taifa</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->
        </div>

        <div class="row">
            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <!-- <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div> -->
                        <div class="member-info">
                            <h4>Issa Maabadi</h4>
                            <span>Katibu Tume Idara Maalum</span>
                            <p><i class="bi bi-telephone"> +255 717 890 467</i></p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member d-flex align-items-start">
                        <!-- <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div> -->
                        <div class="member-info">
                            <h4>Haji Sheha Khamis</h4>
                            <span>Mratibu Idara Maalum</span>
                            <p><i class="bi bi-telephone"> +255 777 890 987</i></p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member d-flex align-items-start">
                        <!-- <div class="pic"><img src="assets/img/team/katibu-mkuu-issa.webp" class="img-fluid" alt=""></div> -->
                        <div class="member-info">
                            <h4>Silima Khamis Suleiman</h4>
                            <span>Mkurugenzi Uendeshaji & Utumishi</span>
                            <p><i class="bi bi-telephone"> +255 773 846 339</i></p>
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
                        <!-- <div class="pic"><img src="assets/img/team/naibu-katibu-mikidadi.webp" class="img-fluid" alt=""></div> -->
                        <div class="member-info">
                            <h4>Abdalla Issa Mgongo</h4>
                            <span>Mkurugenzi Mipango & Sera</span>
                            <p><i class="bi bi-telephone"> +255 777 226 640</i></p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6 offset-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"></div>
                        <div class="member-info">
                            <h4>Zainabu kibwana</h4>
                            <span>Mkurugenzi Tawala za Mikoa</span>
                            <p><i class="bi bi-telephone"> +255 773 420 309</i></p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>
        </div>

    </div>

</section><!-- /Team Section -->


<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>Mikoa</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
        </div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 offset-3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"></div>
                    <div class="member-info">
                        <h4>Idrissa Kitwana</h4>
                        <span>Mkuu wa Mkoa Mjini Magharibi</span>
                        <p>Mjini ndio tizamio la taifa tufanye kazi kwa bidii</p>
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
                    <div class="member-info">
                        <h4>Matar</h4>
                        <span>Mkuu wa Mkoa wa Kaskazini unguja</span>
                        <p>kazi kazi</p>
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
                    <!-- <div class="pic"><img src="assets/img/team/naibu-katibu-mikidadi.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Ayoub</h4>
                        <span>Mkuu wa Mkoa wa Kusini Unguja</span>
                        <p>Kazi ndio kazi ya Taifa</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Abdi</h4>
                        <span>Mkuu wa Mkoa wa Kusini Pemba</span>
                        <p><i class="bi bi-telephone"> +255 717 890 467</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Haji</h4>
                        <span>Mkuu wa Mkoa wa Kaskazini Pemba</span>
                        <p><i class="bi bi-telephone"> +255 777 890 987</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        </div>

    </div>

</section><!-- /Team Section -->

<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>Vikosi</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
        </div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 offset-3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/msingiri.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Br.Msingiri</h4>
                        <span>Mkuu wa Kikosi cha kikosi cha Kuzuia Magendo Zanzibar</span>
                        <p>Slogan or Phone Number</p>
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
                <div class="pic"><img src="assets/img/team/msingiri.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Col.Makame Abdalla Daima</h4>
                        <span>Mkuu wa Jeshi la Kujenga Uchumi Zanzibar</span>
                        <p>kazi kazi</p>
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
                    <div class="pic"><img src="assets/img/team/shamuuna.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Ali Juma Shamuuna</h4>
                        <span>Mkuu wa Kikosi cha Valantia Zanzibar</span>
                        <p>Kazi ndio kazi ya Taifa</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Name</h4>
                        <span>Mkuu wa Chuo Cha Mafunzo Zanzibar</span>
                        <p><i class="bi bi-telephone"> +255 717 890 467</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Name</h4>
                        <span>Mkuu wa Kikosi cha Zimamoto na Uokozi Zanzibar</span>
                        <p><i class="bi bi-telephone"> +255 777 890 987</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        </div>

    </div>

</section><!-- /Team Section -->


<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>Wilaya</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
        </div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/msingiri.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Br.Msingiri</h4>
                        <span>Mkuu wa Kikosi cha kikosi cha Kuzuia Magendo Zanzibar</span>
                        <p>Slogan or Phone Number</p>
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
                <div class="pic"><img src="assets/img/team/msingiri.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Col.Makame Abdalla Daima</h4>
                        <span>Mkuu wa Jeshi la Kujenga Uchumi Zanzibar</span>
                        <p>kazi kazi</p>
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
                    <div class="pic"><img src="assets/img/team/shamuuna.webp" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Ali Juma Shamuuna</h4>
                        <span>Mkuu wa Kikosi cha Valantia Zanzibar</span>
                        <p>Kazi ndio kazi ya Taifa</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Name</h4>
                        <span>Mkuu wa Chuo Cha Mafunzo Zanzibar</span>
                        <p><i class="bi bi-telephone"> +255 717 890 467</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                    <!-- <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div> -->
                    <div class="member-info">
                        <h4>Name</h4>
                        <span>Mkuu wa Kikosi cha Zimamoto na Uokozi Zanzibar</span>
                        <p><i class="bi bi-telephone"> +255 777 890 987</i></p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        </div>

    </div>

</section><!-- /Team Section -->

@endsection