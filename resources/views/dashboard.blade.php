@extends('template.index')

@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col mt-0">
        <h4>Selamat Datang <b>{{ Auth::user()->nama_petugas }}</b> anda masuk sebagai <b>{{ Auth::user()->level }}</b></h4>
      </div>
     </div>
    </div>
@endsection