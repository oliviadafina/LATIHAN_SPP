@extends('template.temad')
@section('content')
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-md-12">
       <div class="card">
        <div class="card-body">
         <h3 class="fw-bold text-center pb-2">Data Siswa</h3>
         <hr>
         <a href="{{ route('siswa.create') }}" class="btn btn-outline-primary mb-3"><img src="{{ 'img/icon_add.png' }}" style="width: 30px"> TAMBAH DATA</a>
         <table class="table table-bordered">
          <thead>
           <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">NISN</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">SPP</th>
            <th scope="col">Aksi</th>
           </tr>
          </thead>
          <tbody>
           @forelse ($siswa as $index => $item)
            <tr class="text-center">
             <th scope="row"class="text-center">{{ $index + $siswa->firstItem() }}</th>
             <td>{{ $item->nisn }}</td>
             <td>{{ $item->nis }}</td>
             <td>{{ $item->nama }}</td>
             <td>{{ $item->kelas->nama_kelas }}</td>
             <td>{{ $item->alamat }}</td>
             <td>{{ $item->no_telp }}</td>
             <td>{{ $item->spp->nominal }}</td>
             <td class="text-center">
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('siswa.destroy', $item->nisn) }}" method="POST">                         
               <a href="{{ route('siswa.edit', $item->nisn) }}" class="btn"><img src="{{ "img/icon_edit.png" }}" style="width: 30px"></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn"><img src="{{ 'img/icon_trash.png' }}" style="width: 30px"></button>
              </form>
             </td>
            </tr>
           @empty
            <tr>
             <td class="text-center text-mute" colspan="10">Data Siswa Belum Tersedia</td>
            </tr>
           @endforelse
         </tbody>
        </table>
        <div>
         <div>
          Showing Page
          {{ $siswa->currentPage() }}
          of
          {{ $siswa->lastPage() }}
         </div>
         <div class="pull-right">
          {{ $siswa->links() }}
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
@endsection