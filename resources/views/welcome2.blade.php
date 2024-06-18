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
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/explore') }}" class="nav-item nav-link">Explore</a>
                        <a href="{{ url('/blog') }}" class="nav-item nav-link">Our Blog</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-inline-block rounded-pill">Login now</a>
                    <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 d-inline-block rounded-pill">Register now</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome
                        to TemanCater</small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Explore <span
                            class="text-primary">Teman</span>Cater For Your Dream Event</h1>
                    <a href="{{ url('/explore') }}"
                        class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Explore
                        Now</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('/templates/img/hero2.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="container-fluid service py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our
                    Services</small>
                <h1 class="display-5 mb-5">What We Offer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-utensils fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Diverse Home-Cooked Meals</h4>
                                <p class="mb-4 truncated">
                                    Our platform brings together a variety of home-cooked meals from
                                    talented homemakers. Whether you're craving
                                    traditional dishes or looking for something new, you'll find a wide range of
                                    delicious options to choose from.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-book-open fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Easy and Convenient Ordering</h4>
                                <p class="mb-4 truncated">
                                    With just a few clicks, you can browse through different catering
                                    options, view menus, and connect you with the caterer by whatsapp. It's simple,
                                    fast, and hassle-free.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-home fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Support for Local Homemakers</h4>
                                <p class="mb-4 truncated">
                                    By ordering through our platform, you are supporting local homemakers
                                    who are passionate about cooking and sharing their culinary creations.
                                    This helps them earn an income and gain recognition for their hard work.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-handshake fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Customizable Menus</h4>
                                <p class="mb-4 truncated">
                                    Each caterer offers customizable menus to suit your preferences and dietary needs.
                                    Whether you need vegetarian options, gluten-free meals, or kid-friendly dishes,
                                    our caterers can tailor their offerings to meet your requirementscus.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-dollar-sign fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Affordable Pricing</h4>
                                <p class="mb-4 truncated">
                                    We believe that everyone should have access to delicious home-cooked meals.
                                    Our caterers offer competitive and affordable pricing to ensure that you can
                                    enjoy great food without breaking the bank.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-snowflake fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Fresh and Quality Ingredients</h4>
                                <p class="mb-4 truncated">
                                    Our homemakers take pride in using fresh and high-quality ingredients
                                    to prepare their meals. You can trust that each dish is made with care
                                    and attention to detail, ensuring a delightful dining experience.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fab fa-whatsapp fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Direct Communication</h4>
                                <p class="mb-4 truncated">
                                    You can directly contact the caterers via WhatsApp to discuss your specific needs,
                                    ask questions,
                                    and make special requests. This personal touch ensures that your catering experience
                                    is smooth
                                    and personalized.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3">Catering for All Occasions</h4>
                                <p class="mb-4 truncated">
                                    Whether you need catering for a small family gathering,
                                    a special celebration, or a corporate event, our platform offers a
                                    variety of options to suit any occasion. From intimate dinners to large parties,
                                    we've got you covered.
                                </p>
                                <a class="btn btn-primary px-4 py-2 rounded-pill read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

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