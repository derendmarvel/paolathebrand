<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  </style>
</head>
<body>
  <!-- === NAVBAR === -->
  <div class = "float-start w-100"> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle sticky-top py-3 px-5" data-bs-theme="dark">
        <div class="container-fluid">
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
        <div class="col-md-9 p-5">
          <img src="/images/Paola-Logo-3.png" alt="Paola" width="95" height="70">
          <p class="small fw-lighter">Serving you the chicest and timeless pieces for your wardrove. Made and built with love.</p>
          <img src="/images/instagram.png" alt="Paola" width="16" height="16">
        </div>  
        <div class="col-md p-5">
          <div class="row ps-2 pt-4 small">
            <div class="col">
              <a class="nav-link {{ $activateProduct ?? '' }}" href="/products"><p>Products</p></a>
              <a class="nav-link {{ $activateHome ?? '' }}" href="/"><p>Home</p></a>
              <p>Catalog</p>
            </div>
            <div class="col">
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
</body>
</html>


