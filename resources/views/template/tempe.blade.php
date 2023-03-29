<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>SPP | DATA SISWA</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://i.pinimg.com/564x/1d/dc/6b/1ddc6b322f82bf520fd4f150dbc87b27.jpg" alt="carousel" width="1518" height="425">
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/564x/5f/84/a0/5f84a020192361ce4235532f4e469f02.jpg" alt="carousel"width="1518" height="425">
        </div>
        <div class="carousel-item mx-auto">
          <img src="https://i.pinimg.com/564x/60/29/d4/6029d4635053c7d5c579c043e1d34edb.jpg" alt="carousel" width="1518" height="425">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  {{-- </div>
</div> --}}
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid mx-3">
    <a class="navbar-brand fw-semibold" href="/dashboard">Pembayaran SPP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('siswa.index') }}">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('petugas.index') }}">Petugas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pembayaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Riwayat Pembayaran</a></li>
          </ul>
        </li>
      </ul>
      <div data-bs-toggle="modal" data-bs-target="#exampleModal">
        @if (auth()->user()->level == 'admin')
           <img src="{{ 'img/admin.png' }}" alt="" width="50" data-bs-toggle="dropdown" aria-expanded="false">
          @endif
          @if (auth()->user()->level == 'petugas')
           <img src="{{ 'img/petugas.png' }}" alt="" width="50" data-bs-toggle="dropdown" aria-expanded="false">
          @endif
          @if (auth()->user()->level == 'siswa')
           <img src="{{ 'img/siswa.png' }}" alt="" width="50" data-bs-toggle="dropdown" aria-expanded="false">
          @endif
      </div>
    </div>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Ingin Keluar?</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <a class="btn btn-outline-danger" href="/logout" role="button">Keluar</a>
      </div>
    </div>
  </div>
</div>
 <br><br><br>
 @yield('content')
 <br><br><br>
 <div class="container">
  <div class="col mt-5 text-center">
   <div class="row justify-content-center">
    <div class="jumbotron">
     <p class="lead"><small>Livia's Project</small></p>
      <hr class="my-4">
     <p>&copy; Copyright 2023</p>
    </div>
   </div>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>