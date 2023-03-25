@extends('template.login')

@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-md-4">
       <div class="card">
        <div class="card-body">
          <form action="/registrasi" method="POST">
          @csrf
          <h3 class="text-center">Silahkan Daftar</h3>
          <hr>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="nisn" class="form-label">NISN</label>
           <input type="number" class="form-control" placeholder="Masukkan NISN Anda" autocomplete="off" autofocus="off" name="nisn">
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="nis" class="form-label">NIS</label>
           <input type="number" class="form-control" placeholder="Masukkan NIS Anda" autocomplete="off" autofocus="off" name="nis">
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="nama" class="form-label">Nama</label>
           <input type="text" class="form-control" placeholder="Masukkan Nama Anda" autocomplete="off" autofocus="off" name="nama">
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="id_kelas" class="form-label">Kelas</label>
           <input type="text" class="form-control" placeholder="Masukkan Kelas Anda" autocomplete="off" name="id_kelas">
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masukkan Alamat Anda" autocomplete="off" name="alamat"></textarea>
          </div>
          <div class="mb-3 d-grid gap-2 col-10 mx-auto">
           <label for="no_telp" class="form-label">No. Telepon</label>
           <input type="number" class="form-control" placeholder="Masukkan No. Telepon Anda" autocomplete="off" name="no_telp">
          <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-outline-primary" type="submit">Daftar</button>
          </div>
          <div class="mb-3 d-grip gap-2 col-10 mx-auto">
            Sudah punya akun? <a href="/registrasi">Masuk disini!</a>
          </div>
          </form>
        </div>
      </div>
      </div>
     </div>
    </div>
@endsection