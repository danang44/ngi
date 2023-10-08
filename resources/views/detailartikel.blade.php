<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail Artikel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/ne/img/Logo NGI.png" rel="icon">
    <link href="/ne/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/ne/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ne/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/ne/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/ne/css/style-artikel.css" rel="stylesheet">

    <!--Font Style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Manrope:wght@200&family=Playfair+Display:ital,wght@1,400;1,500;1,600&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <!--
  font-family: 'Rubik', sans-serif;
  -->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Manrope:wght@200&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,400;0,6..12,500;1,6..12,400&family=Playfair+Display:ital,wght@1,400;1,500;1,600&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <!--
  font-family: 'Playfair Display', serif;
  -->

    <!--Font Awsome-->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v18.0" nonce="qYrNfKmk"></script>
    <div id="fb-root"></div>
</head>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0">
            <a class="d-flex" href="{{route('webngi')}}">
                <img class="d-flex mx-2 my-1" src="/ne/img/logo NGI.png" style="height: 30px;">
                <img class="d-none d-sm-block mx-2 my-1" src="/ne/img/Text ngi.png" style="height: 30px;">
            </a>
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto act-btn" href="{{route('webngi')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('webngi')}}">About</a></li>
                <li><a class="nav-link scrollto" href="{{route('webngi')}}">Product</a></li>
                <li><a class="nav-link scrollto" href="{{route('webngi')}}">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="{{route('webngi')}}">News</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="{{route('contact-detail')}}" class="contact-btn scrollto rounded-pill">Contact</a>
    </div>
</header>
<!--End Header-->

<body>
    @foreach($artikel as $item)
    <section class="artikel-top col-12">
        <!-- Post header-->
        <header class="mb-4">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1 text-center">{{$item->judul}}</h1>
        </header>
        <!-- Preview image figure-->
        <figure class="mb-4 ">
            <div class="head-img d-flex justify-content-center">
                <img class="img-fluid rounded-4 justify-content-center" style="width:500px" src="{{asset('img/'.$item->gambar)}}" alt="..." />
            </div>
        </figure>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2 d-flex s-title">
            <div class="text-white d-flex">
                <p>Tanggal Posting</p>
                <p>&nbsp;.&nbsp;</p>
                <p>{{date('d-m-Y',strtotime($item->tanggal))}}</p>
            </div>
            <div class="social">
                <a href="whatsapp://send?text=*Ayo bersama menginovasi bersama Nusantara Gloal Inovasi untuk menciptakan karya terbaik anak Bangsa*%0D%0AKlik untuk baca: http://127.0.0.1:8000/detailartikel/" target="_blank" data-action="share/whatsapp/share">
                    <i class="fa-brands fa-whatsapp icon"></i>
                </a>


                <a onclick="fbttn.onclick()" target="_blank" style="cursor: pointer;">
                    <div class="fb-share-button fb_iframe_widget" id="fbsb" data-href="http://127.0.0.1:8000/detailartikel/" data-layout="button_count" hidden="" style="cursor: pointer;">
                        <span><iframe name="f257c974ae9d88c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v3.0/plugins/share_button.php?app_id=" class="" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                    </div>
                    <script>
                        var fbttn = document.getElementById("fbsb");
                        fbttn.style.cursor = "pointer";
                        fbttn.onclick = function() {
                            window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(location.href) + "&t=" +
                                encodeURIComponent(document.title), '',
                                'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');
                            return false;
                        };
                    </script>
                    <i class="fa-brands fa-facebook-f icon"></i>

                    <span style="vertical-align: bottom; width: 0px; height: 0px;">
                        <iframe name="f257c974ae9d88c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v3.0/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df14901f95b33bb%26domain%3Dtranssemarang.semarangkota.go.id%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftranssemarang.semarangkota.go.id%252Ff14986498e422fc%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Ftranssemarang.semarangkota.go.id%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" class="" style="border: none; visibility: visible; width: 0px; height: 0px;">
                        </iframe></span>
                </a>


            </div>
        </div>
    </section>
    <article>
        <div class="container ar-s">
            <!-- Post content-->
            <section class="mb-5">
                <p class="fs-5 mb-4 align">{!!$item->artikellengkap!!}</p>

            </section>
            @endforeach
        </div>
    </article>
</body>
<!-- Page content-->
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
<!-- <div id="preloader"></div> -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/ne/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/ne/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/ne/vendor/php-email-form/validate.js"></script>
<script src="js/script.js"></script>

<!-- Template Main JS File -->
<script src="/ne/js/main-artikel.js"></script>

</html>
