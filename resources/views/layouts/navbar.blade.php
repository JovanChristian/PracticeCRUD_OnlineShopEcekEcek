<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="w-10 ps-5">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/test.jpg') }}" style="max-width: 50px" alt="">
            </a>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.index') }}">Clients</a>
          </li>
        </ul>
        <span class="navbar-text">
          Welcome to Online Shop Ecek Ecek Data
        </span>
      </div>
    </div>
  </nav>
