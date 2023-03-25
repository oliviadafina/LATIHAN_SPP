@extends('template.login')

@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-md-4">
       <div class="card">
        <div class="card-body">
          <form action="actionlogin" method="POST">
          @csrf
          <h3 class="text-center">Silahkan Masuk</h3>
          <hr>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="exampleInputEmail1" class="form-label">Nama</label>
           <input type="username" class="form-control" placeholder="Masukkan Nama Anda" autocomplete="off" autofocus="off" name="username" id="username">
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
           <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Anda" autocomplete="off" name="password" id="password">
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
@endsection