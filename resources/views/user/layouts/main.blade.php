<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>MPJ | @yield('title')</title>

    <!-- CSS FILES -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles" />
    <script src="https://kit.fontawesome.com/0fdd5e9bfc.js" crossorigin="anonymous"></script>
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>
<body id="section_1">
    <!-- Page Navbar -->
    <nav class="navbar navbar-expand-lg" data-spy="affix" data-offset-top="20" style="pos">
        <div class="container">
            <a class="logo" href="/">
                <img src="{{ asset('assets/images/navbar_logo.png') }}" style="height: 60px;" alt="">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">We Talk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">Madrasah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">Festival</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">Regional</a>
                </li>
                <li class="nav-item">
                    <div class="pt-2 gradient-button">
                        <a href="/form-mpj">Join Us!</a>
                    </div>
                </li>
                {{-- <li class="item">
                    <div class="dropdown">
                        <a class="link  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pesantren
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profil Pesantren</a>
                            <a class="dropdown-item" href="#">Profil Tokoh</a>
                            <a class="dropdown-item" href="#">Tanya Jawab</a>
                        </div>
                    </div>
                </li> --}}

            </ul>
          </div>
        </div>
      </nav>


@yield('content')
<!--Page Footer-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="assets/images/logo.png" class="logo img-fluid w-50" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                <p class="text-dark d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="https://wa.me/6285655600999?text=Assalamualaikum+cak+min" class="site-footer-link">
                        +6285655600999
                    </a>
                </p>

                <p class="text-dark d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        mediapondokjatim@gmail.com
                    </a>
                </p>

                <p class="text-dark d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    Malang
                </p>

                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">Copyright © <?php echo date('Y')?><a href="#"> MediaPondokJatim
                        {{-- Design: <a href="https://lexavaa.github.com/profilku" target="_blank">TemplateMo</a><br>Distribution:
                        <a href="https://themewagon.com">ThemeWagon</a> --}}
                    </p>
                </div>

                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-tiktok"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPT FILES -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/click-scroll.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/typed.min.js"></script>
<script>
    if ($('.text-slider').length == 1) {
var typed_strings = $('.text-slider-items').text();
    var typed = new Typed('.text-slider', {
        strings: typed_strings.split(','),
        typeSpeed: 40,
        loop: true,
        backDelay: 400,
        backSpeed: 30
    });
}
</script>
</body>

</html>
