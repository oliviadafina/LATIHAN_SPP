<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>{{ $title }}</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
 <div class="container mt-5">
  <div class="row justify-content-center">
   <div class="col-md-4">
    <div class="card">
     <div class="card-body">
      <form action="actionloguser" method="POST">
       @csrf
       <h3 class="text-center">Silahkan Masuk</h3>
       <hr>
       <div class="mb-3 d-grid gap-2 col-10 mx-auto">
         <label for="exampleInputEmail1" class="form-label">Nama:</label>
         <input type="username" class="form-control" placeholder="Masukkan Nama Anda" autocomplete="off" autofocus="off" name="username" id="username">
       </div>
       <div class="mb-3 d-grid gap-2 col-10 mx-auto">
        <label for="exampleInputPassword1" class="form-label">Kata Sandi:</label>
        <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Anda" autocomplete="off" name="nisn" id="nisn">
       </div>
       <div class="d-grid gap-2 col-10 mx-auto">
         <button class="btn btn-outline-primary" type="submit">Masuk</button>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <br>
 @yield('content')
 <br>
 <div class="container">
  <div class="col mt-5 text-center">
   <div class="row justify-content-center">
    <div class="jumbotron">
     <p class="lead"><small>Livia's Project</small></p>
      <hr class="my-3">
     <p>&copy; Copyright 2023</p>
    </div>
   </div>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>