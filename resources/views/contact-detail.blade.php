<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara Global Inovasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.css" integrity="sha384-riGksuuOgYqG/wOcKhpq1iHu+FxWecsn4oCVrAC1PfCIr4m2t0CNTlQAct2x5s0P" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" integrity="sha384-No+VI8Wwi7LzQn9F3FVzBXMxHH2DQpi1C2B8xrgG/EcPXRuAv1gUo8zA92+F+sEz" crossorigin="anonymous">
    <link rel="stylesheet" href="ne/css/contact.css">

    <!--VENDOR-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>

    <!--GOOGLE FONT-->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Manrope:wght@200&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,400;0,6..12,500;1,6..12,400&family=Playfair+Display:ital,wght@1,400;1,500;1,600&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>

<!--=================================NAVIGASI=====================================-->

<body>
    <div id="navbar" class="container-fluid container-lg fixed-top" data-aos="fade">
        <nav class="navbar navbar-expand-lg bg-white rounded-5 shadow my-3 py-2" data-aos="fade">
            <a class="navbar-brand ms-3 me-0 d-flex" href="{{route('webngi')}}" rel="tooltip" data-placement="bottom" data-aos="zoom-in">
                <img class="d-flex mx-2 my-1" src="ne/img/Logo NGI.png" style="height: 30px;">
                <img class="d-none d-sm-block mx-2 my-1" src="ne/img/Text ngi.png" style="height: 30px;">
            </a>
            <button class="navbar-toggler border-0 shadow-none ms-2 me-3 fs-6 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i>
            </button>
            <div class="navbar-collapse w-100 py-3 py-lg-0 collapse" id="navigation">
                <ul class="navbar-nav gap-1 mx-lg-auto">
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link scrollto rounded-pill px-lg-3 ps-3 fw-medium" href="{{route('webngi')}}">Home</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link scrollto rounded-pill px-lg-3 ps-3 fw-medium" href="{{route('webngi')}}">About</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link scrollto rounded-pill px-lg-3 ps-3 fw-medium" href="{{route('webngi')}}">Product</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link scrollto rounded-pill px-lg-3 ps-3 fw-medium" href="{{route('webngi')}}">Portfolio</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link scrollto rounded-pill px-lg-3 ps-3 fw-medium" href="{{route('webngi')}}">News</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3 d-lg-none d-block">
                        <a class="nav-link scrollto rounded-pill px-3 fw-medium" href="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-lg-block d-none mx-2">
                    <li class="nav-item mx-2">
                        <a href="#contact" class="btn bt-contact rounded-pill" style="width: 158px;">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--=================================HEADER=====================================-->
    <header>
        <div id="home" class="overflow-hidden">
            <div class="d-flex align-items-center position-absolute min-vh-100 w-100 z-2">

                <div class="container z-1">
                    <div class="text-center mx-auto">
                        <h1 class="text-black pt-5 mt-5" data-aos="fade-down">Nusantara Global Inovasi</h1>

                        @foreach($header as $item)
                        @if($item->section == 'home')
                        <h2 class="text-black mt-3 f-s" data-aos="fade-up">{{$item->judul}}</h2>
                        <p class="lead text-black mt-3" data-aos="fade">
                            <strong>
                                {{$item->subjudul}}
                            </strong>
                        </p>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators z-2">
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    @foreach($image as $item)
                    <div class="carousel-item min-vh-100  @if($loop->first) active @endif">
                        <img class="position-absolute h-100 w-100 object-fit-cover" src="{{asset('img/'. $item->slide)}}">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev z-2" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next z-2" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!--=================================CONTENT=====================================-->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="clients-slider swiper" data-aos="zoom-in">
                <div class="swiper-wrapper align-items-center">
                    @foreach ($logo as $item)
                    <div class="swiper-slide"><img src=" {{asset('img/'.$item->logo)}} " class="img-fluid" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center pt-5">
                @foreach($header as $item)
                @if($item->section == 'kontak')
                <h1>{{$item->judul}}</h1>
                <p>{{$item->subjudul}}.</p>
                @endif
                @endforeach

                <!-- ======= Get Started Section ======= -->
                <div class="contact row justify-content-between gy-4 pt-5">

                    <div class="col-lg-6 align-self-start order-lg-last order-first" data-aos="fade">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.800433144523!2d110.41814389999999!3d-7.032727599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708daa5fe893d9%3A0xc9934d2f33d13fea!2sPT%20Nusantara%20Global%20Inovasi!5e0!3m2!1sen!2sid!4v1696270188224!5m2!1sen!2sid" width="100%" height="490px" style="border:0; border-radius:1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="form-input col-lg-6" data-aos="fade">
                        <div class="text-center">
                            <p>Please write the message you want to convey below!</p>
                        </div>
                        <form id="contact-form" method="POST" action=" {{route('simpan-contact-detail')}} " class="php-email-form" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row gy-3">

                                <div class="form-group col-md-12">
                                    <input type="text" id="nama" name="nama" class="form-control input-cleare" placeholder="Name" required>
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="email" id="email" class="form-control input-cleare" name="email" placeholder="Email" required>
                                </div>

                                <!-- <div class="col-md-12">
                                <input type="text" name="name" class="input-cleare" placeholder="Subject" required>
                            </div> -->

                                <div class="form-group col-md-12">
                                    <textarea class="form-control input-cleare" id="isi" name="isi" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="submit-button d-flex justify-content-center">
                                    <a class="text-black" href=" "> <button class="btn-border" type="submit"> Send </button> </a>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->
                </div>
            </div>
    </section>

    <section class="contact">
        <div class="container pt-5 pb-5" data-aos="fade-up">

            <div class="row">
                @foreach ($kontak as $item)
                <div class="contac-area col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box ">
                        <div class="icon"><img src="{{asset('img/'.$item->ikon)}}" alt=""></div>
                        <div>
                            <h4>{{$item->judul}}</h4>
                            <p>{!!$item->deskripsi!!}</p>
                        </div>
                        <div>
                            <a href="{{$item->url}}"> <button class="btn-contactme">{{$item->link}}</button> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Contact Section -->


    <!--=================================FOOTER=====================================-->
    <footer id="footer" class="footer-main">
        <div class="footer-top">
            <div class="container p-4">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h1 class="title-brand justify-content-between">Nusantara Global Inovasi</h1>
                            <p>
                                Jl. Teuku Umar No.58 A, Ngesrep, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50261.
                            </p>
                            <p><br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Utility</h4>
                        <div>
                            <ul>
                                <a href="{{route('webngi')}}">
                                    <p>Home</p>
                                </a><br>
                                <a href="{{route('webngi')}}">
                                    <p>About</p>
                                </a><br>
                                <a href="{{route('webngi')}}">
                                    <p>Products</p>
                                </a><br>
                                <a href="{{route('webngi')}}">
                                    <p>Portfolio</p>
                                </a><br>
                                <a href="{{route('webngi')}}">
                                    <p>News</p>
                                </a>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Contact</h4>
                        <div class="justify-content-center">
                            <p>info@nginovasi.com</p>
                            <p>+628024-2489-433</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Follow Us</h4>
                        <div>
                            <div class="social-links mt-3  d-flex">
                                <a href="https://web.facebook.com/p/Nusantara-Global-Inovasi-PT-100076010906176/?_rdc=1&_rdr" class="facebook"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="https://instagram.com/nusantaraglobalinovasi.id?igshid=OGY3MTU3OGY1Mw==" class="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                                <a href="https://www.youtube.com/@nusantaraglobalinovasioffi9486" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://id.linkedin.com/company/pt-nusantara-global-inovasi" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright d-flex justify-content-between pt-3" style="padding: 20px">
                <p>
                    © Nusantara Global Inovasi, 2023. All right reserved
                </p>
                <div class="list-inline">
                    <p>Design &amp; Development By E.A. Works</p>
                </div>
            </div>
        </div>
    </footer>

    <!--=================================SCRIPT=====================================-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.js" integrity="sha384-Wslfgb2YeFIRDO00l4OCLpOFis1gqfYMw6cj99gt4cEUMjN53lUwHb4dDY5Ghh8S" crossorigin="anonymous"></script>
    <script src="ne/js/contact.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
