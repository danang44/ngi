<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara Global Inovasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.css" integrity="sha384-riGksuuOgYqG/wOcKhpq1iHu+FxWecsn4oCVrAC1PfCIr4m2t0CNTlQAct2x5s0P" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" integrity="sha384-No+VI8Wwi7LzQn9F3FVzBXMxHH2DQpi1C2B8xrgG/EcPXRuAv1gUo8zA92+F+sEz" crossorigin="anonymous">
    <link rel="stylesheet" href="ne/css/style.css">

    <link href="ne/img/Logo NGI.svg" rel="icon">
    <link href="ne/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!--VENDOR-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Manrope:wght@200&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,400;0,6..12,500;1,6..12,400&family=Playfair+Display:ital,wght@1,400;1,500;1,600&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>

<!--=================================NAVIGASI=====================================-->

<body>
    <div class="container-fluid container-lg fixed-top" data-aos="fade">
        <nav id="navbar" class="navbar navbar-expand-lg bg-white rounded-5 shadow my-3 py-2">
            <a class="navbar-brand ms-3 me-0 d-flex" href="{{route('webngi')}}" rel="tooltip" data-placement="bottom" data-aos="zoom-in">
                <img class="d-flex mx-2 my-1" src="ne/img/logo NGI.png" style="height: 30px;">
                <img class="d-none d-sm-block mx-2 my-1" src="ne/img/Text ngi.png" style="height: 30px;">
            </a>
            <button class="navbar-toggler border-0 shadow-none ms-2 me-3 fs-6 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i>
            </button>
            <div class="navbar-collapse w-100 py-3 py-lg-0 collapse" id="navigation">
                <ul class="navbar-nav gap-1 mx-lg-auto">
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link rounded-pill px-lg-3 ps-3 fw-medium" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link rounded-pill px-lg-3 ps-3 fw-medium" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link rounded-pill px-lg-3 ps-3 fw-medium" href="#product">Product</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link rounded-pill px-lg-3 ps-3 fw-medium" href="#portofolio">Portfolio</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3">
                        <a class="nav-link rounded-pill px-lg-3 ps-3 fw-medium" href="#news">News</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-3 d-lg-none d-block">
                        <a class="nav-link rounded-pill px-3 fw-medium" href="{{route('contact-detail')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-lg-block d-none mx-2">
                    <li class="nav-item mx-2">
                        <a href="{{route('contact-detail')}}" class="btn bt-contact rounded-pill" style="width: 158px;">Contact</a>
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
                        <h2 class="text-black mt-3 f-s" data-aos="fade">{{$item->judul}}</h2>
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
    <!--CLIENT-->
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
    <!--ABOUT-->
    <section id="about" class="about">
        <div class="container" data-aos="">
            @foreach($video as $item)
            <div class="section-title text-center py-5">

                <h1> {{$item->header}} </h1>
                <p>{{$item->subheader}}</p>
            </div>


            <div class="row">

                <iframe width="100%" height="700px" src="{{$item->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>
            @endforeach
        </div>
    </section>
    <br>
    <!--SERVICE-->
    <section id="service" class="service">
        <div class="container" data-aos="">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    @foreach ($layanan as $item)
                    <div class="icon-box mt-5 mt-lg-0 s-t" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx"><img src="{{asset('img/'.$item->icon)}}" alt="icon"></i>
                        <h4>{{$item->judul}}</h4>
                        <p>{{$item->deskripsi}}</p>
                    </div>
                    @endforeach

                </div>
                <div class="image col-lg-6" style='background-image: url("ne/img/features.png");' data-aos="fade"></div>
            </div>
        </div>
    </section>
    <br>
    <!--COMPRO-->
    <section id="product" class="brosur">
        <div class="container" data-aos="zoom-in">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 align-item-center" data-aos="fade-right" data-aos-delay="100">
                    <h3>NGINOVASI ComPro2023</h3>
                    @foreach($header as $item)
                    @if($item->section == 'home')
                    <p class="text-white"> {{$item->subjudul}}</p>
                    @endif
                    @endforeach
                    <button type="button" class="button-download rounded-pill" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-file-arrow-down"></i> Download Company Profile
                    </button>
                </div>
            </div>
        </div>


        <!--modal download-->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel"></h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex ">
                        <div class="col d-flex justify-content-center">
                            <img class="justify-content-center" src="ne/img/brochure.png" alt="compro-img" height="400px" width="300px">
                        </div>
                        <div class="col">
                            <div class="mod-title d-flex">
                                <h1 class="modal-tit">NGINOVASI <span class="f-s">Company Profile</span></h1>
                            </div>
                            <p class="pt-1 text-center">Temukan semua yang perlu anda ketahui tentang produk kami dalam Brosur informasi ini</p>
                            <form action="{{route('simpan-compro')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="input-group mb-3 d-flex input-bg">
                                    <span class="input-group-text mar" id="inputGroup-sizing-default"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" id="nama" name="nama" class="input-cleare" placeholder="Nama Identitas" aria-label="Username" required>
                                </div>
                                <div class="input-group mb-3 d-flex input-bg">
                                    <span class="input-group-text mar" id="inputGroup-sizing-default"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="input-cleare" placeholder="Alamat Email" aria-label="Username" required>
                                </div>
                                <div class="input-group mb-3 d-flex input-bg">
                                    <span class="input-group-text mar" id="inputGroup-sizing-default"><i class="fa-solid fa-phone"></i></span>
                                    <input type="tel" id="whatsapp" name="whatsapp" class="input-cleare" placeholder="Nomor Telepon (WhatsApp)" aria-label="Username" required>
                                </div>
                                <!--Download Button-->
                                <a class="input-group mb-3" href="ne/img/NGI.pdf" download="NGINOVASI Company Profile" download>
                                    <input type="submit" class="form-control" value="Dapatkan Brosur">
                                </a>
                                <!--End Download Button-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--PORTOFOLIO-->
    <section id="portofolio" class="portofolio overflow-hidden h-p py-5 mb-0" data-aos="">
        <div class="container">
            <div class="section-title text-center s-t">
                @foreach($header as $item)
                @if($item->section == 'portfolio')
                <h1> {{$item->judul}} </h1>
                <p>{{$item->subjudul}}</p>
                @endif
                @endforeach
            </div>


            <ul class="nav nav-pills justify-content-center pb-2 mb-4" id="kategori" role="tablist">

                <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-links mb-2 mb-md-0 mt-2 active" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
                </li>
                @foreach($kategori as $item)
                <li class="nav-item me-2 me-sm-4" role="presentation">

                    <button class="nav-links mb-2 mb-md-0 mt-2" data-bs-toggle="tab" data-bs-target="#{{$item->nama}}-tab-pane" type="button" role="tab" aria-controls="{{$item->nama}}-tab-pane" aria-selected="false">{{$item->slug}}</button>

                </li>
                @endforeach
                <!--
                <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-2 mb-md-0" data-bs-toggle="tab" data-bs-target="#travel-tab-pane" type="button" role="tab" aria-controls="travel-tab-pane" aria-selected="false">Travel & Tourism</button>
                </li>
                <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-2 mb-md-0" data-bs-toggle="tab" data-bs-target="#retails-tab-pane" type="button" role="tab" aria-controls="retails-tab-pane" aria-selected="false">Retails</button>
                </li>
                <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-2 mb-md-0" data-bs-toggle="tab" data-bs-target="#productifity-tab-pane" type="button" role="tab" aria-controls="productifity-tab-pane" aria-selected="false">Productifity</button>
                </li>
                <li class="nav-item me-2 me-sm-4" role="presentation">
                    <button class="nav-link mb-2 mb-md-0" data-bs-toggle="tab" data-bs-target="#banking-tab-pane" type="button" role="tab" aria-controls="banking-tab-pane" aria-selected="false">Banking</button>
                </li> -->
            </ul>

            <div class="tab-content" id="kategori">

                <!--ALL TAB-->
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">

                    <!-- Slider main container -->
                    <div class="swiper swiper-container">
                        <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem; max-width:75ch;">
                                    <div class="card-img" style="width:100%;">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}" style="height:200px">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small>{{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                        <div class="pt-2 mt-4">
                            <!-- <div class="swiper-pagination position-relative"></div> -->
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($kategori as $item)

                <!--PUBLIC SERVICES TAB-->
                <div class="tab-pane fade show  " id="services-tab-pane" role="tabpanel" aria-labelledby="services-tab" tabindex="1">

                    <div class="swiper swiper-container">
                        <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)

                            @if($item->kategori == 'Public Service')
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-img">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}" style="height:200px">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small> {{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}} </h5>
                                        <p class="card-text"> {!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach



                        </div>
                        <div class="pt-2 mt-4">
                            <!-- <div class="swiper-pagination position-relative"></div> -->
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!--TRAVEL & TOURISM TAB-->
                <div class="tab-pane fade show " id="travel-tab-pane" role="tabpanel" aria-labelledby="travel-tab" tabindex="2">


                    <div class="swiper swiper-container">
                        <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)
                            @if($item->kategori == 'Travel & Tourism')
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-img">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}" style="height:200px">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small>{{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="pt-2 mt-4">
                            <!-- <div class="swiper-pagination position-relative"></div> -->
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--RETAILS TAB-->
                <div class="tab-pane fade show " id="retails-tab-pane" role="tabpanel" aria-labelledby="retails-tab" tabindex="3">


                    <div class="swiper swiper-container">
                        <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)
                            @if($item->kategori == 'Retails')
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-img">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}" style="height:200px">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small>{{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="pt-2 mt-4">
                            <!-- <div class="swiper-pagination position-relative"></div> -->
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--PRODUCTIFITY TAB-->
                <div class="tab-pane fade show " id="productifity-tab-pane" role="tabpanel" aria-labelledby="productifity-tab" tabindex="4">


                    <div class="swiper swiper-container">
                        <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)
                            @if($item->kategori == 'Productifity')
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-img">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}" style="height:200px">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small>{{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="pt-2 mt-4">
                            <div class="swiper-pagination position-relative"></div>
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--BANKING TAB-->
                <div class="tab-pane fade show  " id="banking-tab-pane" role="tabpanel" aria-labelledby="banking-tab" tabindex="4s">

                    <div class="swiper swiper-container">
                        url <div class="swiper-wrapper m-auto">

                            @foreach ($card as $item)
                            @if($item->kategori == 'Banking')
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-img">
                                        <img class="card-img card-img-top p-0 d-inline" src="{{asset('img/'.$item->gambar)}}">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-subtitle">
                                            <small>{{$item->kategori}}</small>
                                        </div>
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{!!$item->deskripsi!!}</p>
                                        <a href="{{url('detailcard',$item->id)}}" target=”_blank” class="btn btn-new">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="pt-2 mt-4">
                            <div class="swiper-pagination position-relative"></div>
                            <div class="d-flex justify-content-center mt-2">
                                <button class="swiper-button-prev position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-left"></i></button>
                                <button class="swiper-button-next position-static h-auto w-auto mx-2 my-auto d-inline btn btn-outline-primarys" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section id="portfolio" class="news-page">
        <div class="container news" data-aos="">

            <div class="text-center">
                <h1>Latest News About Us</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate quisquam cumque, distinctio adipisci tenetur blanditiis.</p>
            </div>

            <!--Card Portofolio Slider-->
    <!-- <div class="container">
                <div class="row">
                    <!--<div class="col-sm-12 mb-3 d-flex justify-content-center align-content-sm-center">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="">
            </div>-->
    <!-- </div>
                <div class="row" id="myItems">
                    <div class="col-sm-12 mb-3">

                        <div class="news-slider  swiper" data-aos="" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                @foreach ($artikel as $item)
                                <div class="card swiper-slide">
                                    <div class="card-body2 d-flex">
                                        <div class="card-image">
                                            <a href="{{url('detailartikel',$item->id)}}"> <img class="card-img-top" src="{{asset('img/'. $item->gambar)}}" alt="Card image cap"></a>

                                        </div>
                                        <div class="card-content p-3">
                                            <h4 class="card-title">{{$item->judul}}</h4>
                                            <p class="card-text">{!!$item->deskripsi!!}</p>
                                            <p><small class="text-body-secondary">{{date('d-m-Y',strtotime($item->tanggal))}}</small></p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="swiper-button-prev swiper-navBtn swiper-btn"><i class="fa-solid fa-arrow-right fa-flip-horizontal"></i></button>
                    <button class="swiper-button-next swiper-navBtn swiper-btn"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>  -->
    <!-- End Portfolio Section -->

    <!--NEWS-->
    <section id="news" class="news">
        <div class="container">
            <div class="section-title text-center s-t" data-aos="">
                @foreach($header as $item)
                @if($item->section == 'news')
                <h2>{{$item->judul}}</h2>
                <p>{{$item->subjudul}}</p>
                @endif
                @endforeach
            </div>

            <div class="search-filter">
                <div class="search" data-aos="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input class="search-input" type="text" placeholder="Search">
                </div>
            </div>


            <div class="scroll" data-aos="">

                @foreach ($artikel->sortByDesc('id') as $item)


                <div class="card-news p-m" style="width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img class="card-img rounded-3" src="{{asset('img/'. $item->gambar)}}" alt="{{$item->judul}}" width="10px" height="250px">
                        </div>
                        <div class="col-md-7 pt-3">
                            <div class="card-body">
                                <a target=”_blank” href="{{url('detailartikel',$item->id)}}" class="card-link d-flex card-title t-c">
                                    <div class="title-card">
                                        <h2 class="card-title p-r">{{$item->judul}}</h2>
                                    </div>
                                    <div class="go-page"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
                                </a>
                                <div class="pt-3">
                                    <small class="d-flex">
                                        <p>{{$item->author}}</p>
                                        <p>&nbsp;.&nbsp;</p>
                                        <p>{{date('d-m-Y',strtotime($item->tanggal))}}</p>
                                    </small>
                                    <p class="card-text">{!!$item->deskripsi!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach





            </div>
        </div>
    </section>

    <!-- ======= MAPS ======= -->

    <section id="contact" class="contact">
        <div class="container mt-5" data-aos="">
            <div class="section-title text-center">
                @foreach($header as $item)
                @if($item->section == 'kontak')
                <h1>{{$item->judul}}</h1>
                <p>{{$item->subjudul}}</p>
                @endif
                @endforeach
            </div>
            <div class="maps-show col-lg-12 position-relative align-self-start order-lg-last order-first mt-5">
                <div>
                    <a href="https://maps.app.goo.gl/gcZexEsaaX3zc6Er9" target=”_blank” class="maps-button"><img src="ne/img/location.png"></a>
                    <div class="maps-img d-flex">
                        <img src="ne/img/maps.png" class="img-fluid rounded-5 justify-content-center align-item-center" alt="" width="90%">
                    </div>
                </div>
            </div>
        </div>

        <!--CONTACT-->
        <section class="contact">
            <div class="container pt-5 pb-5" data-aos="">

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
                                <a target=”_blank” href="{{$item->url}}"> <button class="btn-contactme">{{$item->link}}</button> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!--=================================FOOTER=====================================-->
        <footer id="footer">
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
                                    <a href="#home">
                                        <p>Home</p>
                                    </a><br>
                                    <a href="#about">
                                        <p>About</p>
                                    </a><br>
                                    <a href="#clients">
                                        <p>Products</p>
                                    </a><br>
                                    <a href="#portofolio">
                                        <p>Portfolio</p>
                                    </a><br>
                                    <a href="#news">
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
                                    <a target=”_blank” href="https://web.facebook.com/p/Nusantara-Global-Inovasi-PT-100076010906176/?_rdc=1&_rdr" class="facebook"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a target=”_blank” href="https://instagram.com/nusantaraglobalinovasi.id?igshid=OGY3MTU3OGY1Mw==" class="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                                    <a target=”_blank” href="https://www.youtube.com/@nusantaraglobalinovasioffi9486" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                                    <a target=”_blank” href="https://id.linkedin.com/company/pt-nusantara-global-inovasi" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
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
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!--=================================SCRIPT=====================================-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.js" integrity="sha384-Wslfgb2YeFIRDO00l4OCLpOFis1gqfYMw6cj99gt4cEUMjN53lUwHb4dDY5Ghh8S" crossorigin="anonymous"></script>
        <script src="ne/js/script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
