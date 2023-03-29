<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>SPP | CREATE PETUGAS</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 <!-- include summernote css -->
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
 <div class="container mt-5">
  <div class="row justify-content-center">
   <div class="col-md-6">
    <!-- Notifikasi menggunakan flash session data -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif
    <div class="card">
     <div class="card-body">
      <h3 class="fw-bold text-center pb-2">Tambah Data Petugas</h3>
      <hr>
      <form action="{{ route('petugas.store') }}" method="POST">
       @csrf
       <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username Petugas" required>
       </div>
       <br>
       <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password" placeholder="Masukkan Password Petugas" required>
       </div>
       <br>
       <div class="form-group">
        <label for="nama_petugas">Nama Petugas:</label>
        <input type="text" class="form-control" name="nama_petugas" placeholder="Masukkan Nama Petugas" required>
       </div>
       <br>
       <div class="form-group">
        <label for="level">Level:</label>
        <select name="level" class="form-control" required>
            <option selected>Pilih Level Petugas</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
       </div>
        <br>
       <button type="submit" class="btn btn-outline-primary">SIMPAN</button>
       <a href="{{ route('petugas.index') }}" class="btn btn-outline-dark">KEMBALI</a>
      </form>
     </div>
   </div>
   </div>
  </div>
 </div>
 <br><br><br>
 @yield('content')
 <br><br><br>
 <div class="container">
  <div class="col text-center">
   <div class="row justify-content-center">
    <div class="jumbotron">
     <p class="lead"><small>Livia's Project</small></p>
      <hr class="my-2">
     <p>&copy; Copyright 2023</p>
    </div>
   </div>
  </div>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
 integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script><script>
</body>
</html>