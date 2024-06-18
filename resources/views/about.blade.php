<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TemanCater</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('templates/css/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/templates/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/templates/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('/templates/img/logo teman cater.png') }}" style="width: 55px; height: 55px;" alt="Logo">
                    <h1 class="text-primary fw-bold mb-0">Teman<span class="text-dark">Cater</span> </h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('/explore') }}" class="nav-item nav-link">Explore</a>
                        <a href="{{ url('/blog') }}" class="nav-item nav-link">Our Blog</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link active">About</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Login now</a>
                    <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Register now</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('/templates/img/logo teman cater.png') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About
                        Us</small>
                    <h1 class="display-5 mb-0">TemanCater</h1>
                    <h1 class="display-3 pt-0 mb-4" style="color: #D4A762;">Team Project</h1>
                    <p class="mb-4">Our passionate developers are united by a common goal: to revolutionize the catering
                        experience. We reach beyond the ordinary website, crafting a platform
                        that empowers caterers and delights customers.</p>
                    <a href="#our-team" class="btn btn-primary py-3 px-5 rounded-pill">Our team<i
                            class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <section id="our-team">
        <!-- Team Start -->
        <div class="container-fluid team py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our
                        Team</small>
                    <h3 class="display-7 mb-5 p-2 bg-warning rounded-pill">As the developers behind TemanCater, we want
                        to express our deep gratitude for being a part of this journey toward a healthier and happier
                        you. Say Hi!</h3>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top" src="{{ asset('/templates/img/team-3.jpg') }}" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <br>
                                <h4 class="text-primary">Catrin Monica</h4>
                                <p class="text-white mb-0">Project Manager</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" 
                                href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                href="https://www.linkedin.com/in/catrin-monica-5338b0293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                href="https://github.com/catrinmonica/Catrinmonica"><i class="fab fa-github"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                href="https://www.instagram.com/catrinmonicaa_?igsh=N2JuMG1wZ3UzcTMy"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top" src="{{ asset('/templates/img/team-1.jpg') }}" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Farid Akbar Ishaq Maulana</h4>
                                <p class="text-white mb-0">Back-End</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                        class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                    href="https://www.linkedin.com/in/farid-akbar-ishaq-maulana"><i class="fab fa-linkedin-in"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                    href="https://github.com/mesir998"><i class="fab fa-github"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" 
                                    href="https://www.instagram.com/fariidakbr_?igsh=MTd0OHRodnd1ZWN3ZA=="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top" src="{{ asset('/templates/img/team-2.jpg') }}" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Tengku Bintang Zaky Irmaysa</h4>
                                <p class="text-white mb-0">Front-End</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                        class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                                    href="https://www.linkedin.com/in/tengku-bintang-zaky-irmaysa/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                                    href="https://github.com/zeondev19"><i class="fab fa-github"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                                    href="https://www.instagram.com/bintang__.19/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team End -->
    </section>


    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-6">
                    <div class="footer-item">
                        <h1 class="text-primary">Teman<span class="text-dark">Cater</span></h1>
                        <p class="lh-lg mb-4">Teman Cater adalah platform catering online untuk ibu rumah tangga.
                            Pengguna dapat mencari, memesan,
                            dan berkomunikasi langsung dengan penyedia layanan. Tujuannya adalah mendukung pengusaha
                            kecil dan memudahkan akses makanan berkualitas.</p>
                        <div class="footer-icon d-flex">
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle"
                                href="https://web.facebook.com/login.php?_rdc=1&_rdr"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle"
                                href="https://github.com/mesir998/Capstone"><i class="fab fa-github"></i></a>
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle"
                                href="https://x.com/?lang=en-id"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"
                                class="btn btn-primary btn-sm-square me-2 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" class="btn btn-primary btn-sm-square rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-end">
                    <div class="footer-item text-end">
                        <h4 class="mb-4 text-end">Contact Us</h4>
                        <div class="d-flex flex-column align-items-end">
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i> Dicoding Indonesia</p>
                            <p><i class="fa fa-phone-alt text-primary me-2"></i> (+62) 851 5712 1900</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> TemanCater@gmail.com</p>
                            <p><i class="fa fa-clock text-primary me-2"></i> 24/7 Hours Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>TemanCater</a>,
                        All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


   
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/templates/js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/templates/js/easing/easing.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('/templates/js/main.js') }}"></script>
</body>

</html>