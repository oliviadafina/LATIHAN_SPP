@extends('template.utama')

@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-10">
        <div class="card">
          <div class="card-body mx-auto mt-2">
            <h4>Selamat Datang <b>{{ Auth::user()->nama_petugas }}</b> anda masuk sebagai <b>{{ Auth::user()->level }}</b></h4>
            <hr>
          </div>
        </div>
      </div>
     </div>
    </div>
@endsection