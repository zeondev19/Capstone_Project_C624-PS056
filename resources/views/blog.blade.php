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
                        <a href="{{ url('/blog') }}" class="nav-item nav-link active">Our Blog</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
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
            <h1 class="display-1 mb-4">Our Blog</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Our Blog</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our
                    Blog</small>
                <h1 class="display-5 mb-5">Be First Who Read News</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <a
                                href="https://bmmagazine.co.uk/business/5-reasons-to-choose-self-catering-for-your-next-trip/"><img
                                    src="{{ asset('/templates/img/blog-1.jpg') }}" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">7</p>
                                    <p class="fw-bold mb-0">Jun</p>
                                </div>
                            </div>
                            <a href="https://bmmagazine.co.uk/business/5-reasons-to-choose-self-catering-for-your-next-trip/"
                                class="h5 lh-base my-auto h-100 p-3">5 Reasons to Choose Self-Catering for Your Next
                                Trip</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <a
                                href="https://www.msn.com/en-us/travel/news/italian-catering-from-pasta-pomodoro-in-sewellwashington-township/ar-BB1nL9dq?ocid=BingNewsSearch"><img
                                    src="{{ asset('/templates/img/blog-2.jpg') }}" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">7</p>
                                    <p class="fw-bold mb-0">Jun</p>
                                </div>
                            </div>
                            <a href="https://www.msn.com/en-us/travel/news/italian-catering-from-pasta-pomodoro-in-sewellwashington-township/ar-BB1nL9dq?ocid=BingNewsSearch"
                                class="h5 lh-base my-auto h-100 p-3">Italian Catering from Pasta Pomodoro in
                                Sewell/Washington Township</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <a
                                href="https://www.msn.com/en-us/news/world/director-hajj-inspects-catering-kitchens-to-ensure-food-quality-hygiene/ar-BB1nBoty?ocid=BingNewsSearch">
                                <img src="{{ asset('/templates/img/blog-3.jpg') }}" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">3</p>
                                    <p class="fw-bold mb-0">Jun</p>
                                </div>
                            </div>
                            <a href="https://www.msn.com/en-us/news/world/director-hajj-inspects-catering-kitchens-to-ensure-food-quality-hygiene/ar-BB1nBoty?ocid=BingNewsSearch"
                                class="h5 lh-base my-auto h-100 p-3">Director Hajj inspects catering kitchens to ensure
                                food quality, hygiene</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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
    <script src="{{ asset('templates/js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('templates/js/easing/easing.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('/templates/js/main.js') }}"></script>
</body>

</html>