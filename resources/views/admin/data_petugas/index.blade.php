@extends('template.utama')
@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-md-12">
       <div class="card">
        <div class="card-body">
         <h3 class="fw-bold text-center pb-2">Data Petugas</h3>
         <hr>
         <a href="{{ route('petugas.create') }}" class="btn btn-outline-primary mb-3"><img src="{{ 'img/icon_add.png' }}" style="width: 30px"> TAMBAH DATA</a>
         <table class="table table-bordered">
          <thead>
           <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
           </tr>
          </thead>
          <tbody>
           @forelse ($petugas as $index => $item)
            <tr class="text-center">
             <th scope="row"class="text-center">{{ $index + $petugas->firstItem() }}</th>
             <td>{{ $item->username }}</td>
             <td>{{ $item->password }}</td>
             <td>{{ $item->nama_petugas }}</td>
             <td>{{ $item->level }}</td>
             <td class="text-center">
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('petugas.destroy', $item->id) }}" method="POST">                         
               <a href="{{ route('petugas.edit', $item->id) }}" class="btn"><img src="{{ "img/icon_edit.png" }}" style="width: 30px"></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn"><img src="{{ 'img/icon_trash.png' }}" style="width: 30px"></button>
              </form>
             </td>
            </tr>
           @empty
            <tr>
             <td class="text-center text-mute" colspan="10">Data Petugas Belum Tersedia</td>
            </tr>
           @endforelse
         </tbody>
        </table>
        <div>
          <div>
            <div class="pull-left">
             Showing Page
             {{ $petugas->currentPage() }}
             of
             {{ $petugas->lastPage() }}
            </div>
          </div>
          <div class="pull-center">
            {{ $petugas->links() }}
          </div>
        </div>
       </div>
      </div>
     </div>
    </div>
@endsection