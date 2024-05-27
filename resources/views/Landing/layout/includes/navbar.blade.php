<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container-fluid mx-auto"> <!-- Menggunakan mx-auto untuk menempatkan navbar di tengah -->
      <img src="/assets/img/logo.svg" alt="" width="100" height="80" class="d-inline-block align-text-top me-2">
      <span class="ms-2 brand-text">Protech Solutions</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto"> <!-- Menggunakan mx-auto untuk menempatkan navbar di tengah -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#protech-description">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tools Scanning
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('ip') }}">Ip Scanning</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          </li>
        </ul>
      </div>
  </nav>