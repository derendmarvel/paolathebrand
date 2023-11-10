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
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle sticky-top py-2 px-5" data-bs-theme="dark">
      <div class="container-fluid">
      <div>
          <a class="navbar-brand" href="#">
          <img src="/images/Paola-Logo-2.png" alt="Paola" width="80" height="80">
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

  <footer class="w-100 position-fixed bottom-0 start-50 translate-middle-x bg-dark">
    <div class="text-center p-3 text-light">
      Copyright Project Catalog @2023
    </div>
  </footer>
</body>
</html>


