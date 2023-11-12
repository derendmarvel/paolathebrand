<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title> @yield('title')  </title>

  <style>
    body {
      font-family: 'Fira Sans', sans-serif;
    }

    .large {
      font-size: 64px;
    }

    .small {
      font-size: 12px;
    }

    .extra {
      padding-left: 200px;
    }

    .ps-home {
      padding-left: 54px;
    }

    .padding-start {
      padding-left: 64px;
    }

    .ps-all-products{
      padding-left: 100px;
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
    
    .bg-image {
      background: url('/images/Paola-BG-Dark.png');
      background-size: cover;
    }

    .bg-image-light {
      background-image: url('/images/Paola-BG-Light.png');
      background-size: cover;
    }

    .w-footer {
      width: 100.98%;
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

    @media screen and (min-width: 794px) {
      .absolute-div {
        position: absolute;
        right: 0px;
        top: 80px;
        scale: 1;
      }
    }
    .carousel-container {
      height: 450px;
      width: 500px;
      display: flex;
    }

    .card {
      display: flex;
      background: transparent;
      height: 420px;
      width: 280px;
      background-color: #17141d;
      box-shadow: -1rem 0 3rem #000;
      transition: 0.4s ease-out;
      position: relative;
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

    .about-us-bg {
      background: url('/images/Paola-Header.png');
      background-size: cover;
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

    .card-size {
      height: 420px;
      width: 280px;
    }

    @media only screen and (max-width:1183px){
      .img-home-1 {
        width: 200px;
        height: 300px;
        padding-top: 16px;
      }

      .img-home-2 {
        width: 140px;
        height: 210px;
      }

      .card {
        height: 320px;
        width: 220px;
        margin-top: 50px;
      }

      .card-size {
        height: 320px;
        width: 220px;
      }

      .ps-text {
        padding-left: 180px;
      }
    }

    @media only screen and (max-width:900px){
      .img-home-1 {
        width: 200px;
        height: 300px;
        padding-top: 16px;
      }

      .img-home-2 {
        width: 140px;
        height: 270px;
        padding-top: 60px;
      }

      .ps-home {
        padding-left: 24px;
      }

      .ps-detail {
        padding-left: 50px;
      }

      .card {
        height: 300px;
        width: 200px;
        margin-top: 50px;
      }

      .card-size {
        height: 300px;
        width: 200px;
      }
    }

    @media only screen and (max-width:800px){
      .img-home-1 {
        width: 290px;
        height: 370px;
        padding-top: 16px;
        padding-left: 50px;
      }

      .img-home-2 {
        width: 190px;
        height: 330px;
        margin-right: 80px;
        margin-top: -30px;
      }

      .ps-home {
        padding-left: 24px;
      }

      .card {
        height: 295px;
        width: 200px;
        margin-top: 50px;
        margin-left: 50px;
      }

      .card-size {
        height: 295px;
        width: 200px;
      }

      .p-product {
        margin-left: 100px;
      }
    }

    @media only screen and (max-width:700px){
      .img-home-1 {
        width: 220px;
        height: 316px;
        padding-top: 16px;
        padding-left: 20px;
      }

      .img-home-2 {
        width: 175px;
        height: 295px;
        margin-right: 70px;
        margin-top: -50px;
      }

      .home-product {
        margin-left: 100px;
      }

      .ps-detail {
        padding-left: 60px;
      }

      .card {
        height: 285px;
        width: 190px;
        margin-top: 50px;
        margin-left: 20px;
      }

      .card-size {
        height: 285px;
        width: 190px;
      }

      .p-product {
        margin-left: 0px;
      }

      .ps-detail {
        padding-left: 100px;
      }

      .ps-text {
        padding-left: 100px;
      }
    }

  </style>
</head>
<body>
  <!-- === NAVBAR === -->
  <div class = "float-start w-100"> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle sticky-top py-3 px-5" data-bs-theme="dark">
        <div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
        <div>
            <a class="navbar-brand" href="#">
            <img src="/images/Paola-Logo-2.png" alt="Paola" width="80" height="45">
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                <a class="nav-link {{ $activateHome ?? '' }}" href="/">Home</a>
                </li>
                <li class="nav-item mx-5">
                <a class="nav-link {{ $activateProduct ?? '' }}" href="/products">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $activateAboutUs ?? '' }}" href="/aboutUs">About Us</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>

    <div>
      @yield('content')
    </div>

    <!-- === FOOTER === -->
    <footer class="w-100">
      <div class="row w-footer align-items-center bg-red text-light pb-5 ps-5">
        <div class="col-md-9 p-5" data-aos="fade-up">
          <img src="/images/Paola-Logo-3.png" alt="Paola" width="95" height="70">
          <p class="small fw-lighter">Serving you the chicest and timeless pieces for your wardrove. Made and built with love.</p>
          <a href ="https://www.instagram.com/paola.thebrand/"><img src="/images/instagram.png" alt="Paola" width="16" height="16"> </a>
        </div>  
        <div class="col-md p-5">
          <div class="row ps-2 pt-4 small">
            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link {{ $activateProduct ?? '' }}" href="/products"><p>Products</p></a>
              <a class="nav-link {{ $activateHome ?? '' }}" href="/"><p>Home</p></a>
              <p>Catalog</p>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="200">
              <p>Company</p>
              <a class="nav-link {{ $activateAboutUs ?? '' }}" href="/aboutUs"><p>About Us</p></a>
              <p>Contact</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-3 text-light text-center bg-body-tertiary bg-dark-subtle" data-bs-theme="dark">
        Copyright © 2023 Paola The Brand
      </div>
    </footer>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>


