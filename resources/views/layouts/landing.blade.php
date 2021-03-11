<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="js/app.js"></script>
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
    <div id="preloader">

    </div>

    @include('layouts.IncludesLandingPage.landingTopbar')
    @include('layouts.IncludesLandingPage.landingNavbar')

    <section id="intro" class="wow fadeIn">

        <div class="intro-content">
            <h2>¡Monitorea tu <span>orden</span><br> desde tu hogar!</h2>
            <div>

                <form class="form-group" id="trackingModalForm">
                    <input type="text" id="trackingInput" class="form-control" placeholder="Número de rastreo"
                        name="trackingInput" />
                    <div class="invalid-feedback trackingInputInvalidFeedback">
                    </div>

                    <div>
                        <button type="submit" id="trackingModalClick" data-trackingNumber="test"
                            class="btn-get-started scrollTo">
                            Rastrear mi orden
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div id="intro-carousel">
            <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
        </div>

    </section><!-- #intro -->

    <main id="main">
        @section('content')
        @show


    </main>
    @include('layouts.IncludesLandingPage.landingFooter')
    @include('tracker.modal')

</body>

</html>
