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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/templates/css/animate/animate.min.css') }}" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('/templates/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/templates/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <a href="/" style=" font-size: 20px; padding: 15px; ">Kembali</a>
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{ asset('/templates/img/logo teman cater.png') }}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Welcome to TemanCater</h4>
                      </div>
      
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>Please login to your account</p>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror"
                            placeholder="Phone number or email address" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                          <label class="form-label" for="email">Username</label>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" />
                          @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                          <label class="form-label" for="password">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-button mb-3" type="submit">Log in</button>
                        </div>
                      </form>
      
                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <a href="{{ route('register') }}">
                          <button class="btn btn-outline-danger">Create new</button>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-background">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4 cardmini">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">"Dapatkan layanan catering berkualitas dengan TemanCater! Bantu ibu-ibu rumah tangga dalam memperluas bisnis mereka, dan nikmati hidangan lezat dengan kemudahan."</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
