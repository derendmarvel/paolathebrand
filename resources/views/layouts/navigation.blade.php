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
