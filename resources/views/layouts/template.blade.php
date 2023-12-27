<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    $(document).ready(function() {
        $('.autosearch').select2();
    });
  </script>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> @yield('title')  </title>

  <style>
    body {
      font-family: 'Playfair Display', serif;
      overflow-x: hidden;
    }

    .large {
      font-size: 34px;
    }

    .small {
      font-size: 18px;
    }

    .smaller {
      font-size: 18px;
    }

    .arrow{
      width: 24px;
    }

    .promos{
      width: 300px;
    }

    .bg-image {
      background: url('storage/images/Paola-BG-Dark.png');
      background-size: cover;
    }

    .bg-image-light {
      background-image: url("{{ asset('storage/images/Paola-BG-Light.png') }}");
      background-size: cover;
    }

    .bg-image-long {
      background-image: url("{{ asset('storage/images/Paola-BG-Dark-Long.png') }}");
      background-size: cover;
    }

    .about-us-bg {
      background: url("{{ asset('storage/images/Paola-Header.png') }}");
      background-size: cover;
    }

    .login-bg{
      background: url("{{ asset('storage/images/Paola-Header-3.jpg') }}");
      background-size: cover;
    }

    .register-bg{
      background: url("{{ asset('storage/images/Paola-Header-2.jpg') }}");
      background-size: cover;
    }

    .ps-all-products{
      padding-left: 60px;
      padding-right: 60px;
    }

    .reset-margin{
      margin: 0px;
    }

    .header-text{
      text-align: center;
    }

    .extra-width{
      width: 100%;
    }

    .carousel-container {
      height: 200px;
      width: 150px;
      display: flex;
    }

    .card {
      display: flex;
      background: transparent;
      height: 240px;
      width: 160px;
      background-color: #17141d;
      box-shadow: -1rem 0 3rem #000;
      transition: 0.4s ease-out;
      position: relative;

    }

    .card:not(:first-child) {
        margin-left: -10px;
    }

    .card:hover {
      transform: translateY(-10px);
      transition: 0.4s ease-out;
    }

    .card:hover ~ .card {
      position: relative;
      left: 50px;
      transition: 0.4s ease-out;
    }

    .card-size {
      height: 240px;
      width: 160px;
    }

    @media only screen and (min-width:1080px){
      .large {
        font-size: 64px;
      }

      .small {
        font-size: 20px;
      }

      .smaller {
        font-size: 18px;
      }

      .arrow{
        width: 30px;
      }

      .promos{
        width: 400px;
      }

      .bg-image {
        background: url('storage/images/Paola-BG-Dark.png');
        background-size: cover;
      }

      .bg-image-light {
        background-image: url("{{ asset('storage/images/Paola-BG-Light.png') }}");
        background-size: cover;
      }

      .bg-image-long {
        background-image: url("{{ asset('storage/images/Paola-BG-Dark-Long.png') }}");
        background-size: cover;
      }

      .about-us-bg {
        background: url("{{ asset('storage/images/Paola-Header.png') }}");
        background-size: cover;
      }

      .login-bg{
        background: url("{{ asset('storage/images/Paola-Header-3.jpg') }}");
        background-size: cover;
      }

      .register-bg{
        background: url("{{ asset('storage/images/Paola-Header-2.jpg') }}");
        background-size: cover;
      }

      .ps-all-products{
        padding-left: 100px;
        padding-right: 100px;
      }

      .ps-product {
        padding-left: 240px;
        padding-right: 240px;
      }

      .header-text{
        text-align: left;
      }

      .extra-width{
        width: 99.05%;
      }

      .carousel-container {
        height: 450px;
        width: 500px;
        display: flex;
      }

      .card {
        height: 420px;
        width: 280px;
        left: 0px;
      }

      .card:not(:first-child) {
          margin-left: -100px;
      }

      .card:hover {
        transform: translateY(-30px);
        transition: 0.4s ease-out;
      }

      .card:hover ~ .card {
        position: relative;
        left: 50px;
        transition: 0.4s ease-out;
      }

      .card-size {
        height: 420px;
        width: 280px;
      }
    }

    .extra {
      padding-left: 200px;
    }

    .ps-home {
      padding-left: 32px;
      padding-right: 32px;
    }

    .ps-product {
      padding-left: 32px;
      padding-right: 32px;
    }

    .padding-form {
      padding-left: 64px;
      padding-right: 64px;
      padding-top: 32px;
      padding-bottom: 32px;
    }

    .padding-start {
      padding-left: 64px;
    }

    .red{
      color: #C3110C;
    }

    .bg-red{
      background-color: #C3110C;
    }

    .scrollable {
      max-height: 450px;
      max-width: 450px;
      overflow-x: auto;
    }

    .scrollable::-webkit-scrollbar {
      width: 0;
    }

    .ps-detail {
      padding-left: 150px;
    }

    .ps-text {
      padding-left: 150px;
    }

    .my-div {
      transition: transform 0.3s ease-in-out;
    }

    .my-div:hover {
        transform: scale(0.95);
    }

    .relative-div {
      position: relative;
    }

    .absolute-div {
        position: absolute;
        right: -20px;
        top: 120px;
        scale: 0.9
    }

    .ps-like {
        padding-left: 250px;
    }

    .ps-delete {
        padding-left: 590px;
    }

    .absolute-div {
      position: absolute;
      right: 0px;
      top: 80px;
      scale: 1;
    }

    .img-home-1 {
      width: 340px;
      height: 510px;
    }

    .img-home-2 {
      width: 250px;
      height: 375px;
    }

    .home-product {
      padding-left: 0px;
    }

    .p-product {
      margin-left: 0px;
    }




  </style>
</head>
<body>
  <div class ="float-start w-100">
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle sticky-top p-4" data-bs-theme="dark">
    <div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
        <div>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/images/Paola-Logo-2.png') }}" alt="Paola" width="80" height="45">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-md-8 ps-3 ps-md-5 pb-3 pb-md-0" id="navbarNav">
            <ul class="navbar-nav mx-auto ps-3 ps-md-5 gap-3">
                  <li class="nav-item">
                    <a class="nav-link {{ $activateHome ?? '' }}" href="/"> Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ $activateProduct ?? '' }}" href="/products">Products</a>
                  </li>
                @auth
                  @if (Auth::user()->isVisitor())
                  <li class="nav-item">
                      <a class="nav-link {{ $activateWishlist ?? '' }}" href="/wishlists">Wishlist</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $activateCart ?? '' }}" href="/cart">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ $activateOrders ?? '' }}" href="/history"> Orders </a>
                  </li>
                  @elseif (Auth::user()->isAdmin())
                  <li class="nav-item">
                      <a class="nav-link {{ $activateAddProduct ?? '' }}" href="/produk/create"> Add Product </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $activateAddPromo ?? '' }}" href="/promo/create"> Add Promo </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $activateAddCategory ?? '' }}" href="/category/create"> Add Category </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $activateOrders ?? '' }}" href="/orders"> Orders </a>
                  </li>
                  @else
                  @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link {{ $activateAboutUs ?? '' }}" href="/aboutUs">About Us</a>
                </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end ps-3 ps-md-5" id="navbarNav">
            <ul class="navbar-nav justify-content-end ps-3 ps-md-5 gap-3">
              @guest
              @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @endif

              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
            </ul>
        </div>
    </div>
</nav>


    <div>
      @yield('content')
    </div>

    <footer class="extra-width">
    <div class="row align-items-center bg-red text-light p-4">
        <div class="col-md-8 p-5" data-aos="fade-up">
            <img src="{{ asset('storage/images/Paola-Logo-3.png') }}" alt="Paola" width="95" height="70">
            <p class="smaller fw-lighter">Serving you the chicest and timeless pieces for your wardrobe. Made and built with love.</p>
            <a href="https://www.instagram.com/paola.thebrand/"><img src="{{ asset('storage/images/instagram.png') }}" alt="Paola" width="16" height="16"> </a>
        </div>
        <div class="col-md-4 p-5">
            <div class="row ps-2 pe-4 pt-4">
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <a class="nav-link {{ $activateHome ?? '' }}" href="/"><p>Home</p></a>
                    <a class="nav-link {{ $activateProduct ?? '' }}" href="/products"><p>Products</p></a>
                    <a class="nav-link {{ $activateAboutUs ?? '' }}" href="/aboutUs"><p>About Us</p></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <a class="nav-link" href="https://shopee.co.id/paola_thebrand?originalCategoryId=11042750&page=0"> <p>Shop Now</p> </a>
                    <a class="nav-link" href="https://linktr.ee/paola.thebrand"> <p>Linktree</p> </a>
                    <a class="nav-link" href="https://api.whatsapp.com/send/?phone=6287880159046&text&type=phone_number&app_absent=0"> <p>Whatsapp</p> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center pt-3 text-light bg-body-tertiary bg-dark-subtle" data-bs-theme="dark">
        <p class = "text-center"> Copyright © 2023 Paola The Brand </p>
    </div>
    </footer>

  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>


