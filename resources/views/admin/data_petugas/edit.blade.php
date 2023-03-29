<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>SPP | EDIT PETUGAS</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
 <div class="container mt-5">
  <div class="row justify-content-center">
   <div class="col-md-6">
    <!-- Notifikasi menggunakan flash session data -->
    @if (session()->has('success'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-success alert-dismissible fade show mb-3" style="width: 18rem;" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger alert-dismissible fade show mb-3" style="width: 18rem;" role="alert">
            {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif 
    <div class="card">
     <div class="card-body">
      <h3 class="fw-bold text-center pb-2">Perbarui Data Petugas</h3>
      <hr>
       <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
         <label for="username">Username:</label>
         <input type="text" class="form-control" name="username" value="{{ old('username', $petugas->username) }}" required>
        </div>
        <br>
        <div class="form-group">
         <label for="password">Password:</label>
         <input type="text" class="form-control" name="password" value="{{ old('password', $petugas->password) }}" required>
        </div>
        <br>
        <div class="form-group">
         <label for="nama_petugas">Nama Petugas:</label>
         <input type="text" class="form-control" name="nama_petugas" value="{{ old('nama_petugas', $petugas->nama_petugas) }}" required>
        </div>
        <br>
        <div class="form-group">
         <label for="level">Level:</label>
         <select name="level" class="form-control" value="{{ old('level', $petugas->level) }}" disabled required>
             <option value="admin" {{ $petugas->level == 'admin' ? 'selected':'' }}>Admin</option>
             <option value="petugas" {{ $petugas->level == 2 ? 'selected':'' }}>Petugas</option>
         </select>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">PERBARUI</button>
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
</body>
</html>