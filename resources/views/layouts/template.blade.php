<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title> @yield('title')  </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
      <div>
          <a class="navbar-brand" href="#">
          <img src="" alt="Paola" width="30" height="24">
          </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
              <a class="nav-link {{ $activateHome ?? '' }}" href="/home">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link {{ $activateProduct ?? '' }}" href="/products">Products</a>
              </li>
              <li class="nav-item">
              <a class="nav-link {{ $activateAboutUs ?? '' }}" href="/aboutUs">About Us</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container p-5">
    @yield('content')
  </div>

  <footer class="w-100 position-fixed bottom-0 start-50 translate-middle-x bg-primary">
    <div class="text-center p-3 text-light">
      Copyright Project Catalog @2023
    </div>
  </footer>
</body>
</html>


