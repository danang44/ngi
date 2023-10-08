<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Anda Terkirim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.css" integrity="sha384-riGksuuOgYqG/wOcKhpq1iHu+FxWecsn4oCVrAC1PfCIr4m2t0CNTlQAct2x5s0P" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" integrity="sha384-No+VI8Wwi7LzQn9F3FVzBXMxHH2DQpi1C2B8xrgG/EcPXRuAv1gUo8zA92+F+sEz" crossorigin="anonymous">
    <link rel="stylesheet" href="ne/css/sett.css">

    <!--VENDOR-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/fb703282bd.js" crossorigin="anonymous"></script>

    <!--GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Overpass:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<!--=================================CONTENT=====================================-->

<body>
    <div class="position-absolute top-0 start-0 m-4">
        <a href="welcome" class="d-flex">
            <img class="d-flex mx-2 my-1" src="ne/img/Logo NGI.png" style="height: 30px;">
            <img class="d-none d-sm-block mx-2 my-1" src="ne/img/Text ngi.png" style="height: 30px;">
        </a>
    </div>
    <main class="cd__main">

        <div class="content-page text-center container-fluid main_container">
            <div class="justify-content-center">
                <div class="title-page d-flex justify-content-center">
                    <h1>Terimakasih Pesan anda <span class="f-s">sudah terkirim!</span></h1>
                </div>
                <p class="lead">Kami akan tingkatkan layanan kami untuk bersama untuk kedepannya.</p>
                <div>
                    <p>
                        Ada kendala lain? <a href="{{route('contact-detail')}}" class="no-at">Hubungi Kami!</a>
                    </p>
                    <p class="lead">
                        <a class="btn btn-new" href="{{route('webngi')}}" role="button">Kembali ke halaman utama</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="copyright d-flex justify-content-between">
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
    <script src="ne/js/sett.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
