<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = User::Paginate(5);
        return view('admin.data_petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('admin.data_petugas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'      => 'required|max:25',
            'password'      => 'required|',
            'nama_petugas'  => 'required|max:35',
            'level'         => 'required|'
        ]);
        $petugas = User::create([
            'username'      => $request->username,
            'password'      => $request->password,
            'nama_petugas'  => $request->nama_petugas,
            'level'         => $request->level
        ]);
        
        if ($petugas) {
            return redirect()
                ->route('petugas.index')
                ->with([
                    'success' => 'Berhasil Menambahkan Data Petugas Baru!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }
    public function edit($id)
    {
        $petugas = User::findOrFail($id);
        return view('admin.data_petugas.edit', compact('petugas'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username'      => 'required|max:25',
            'password'      => 'required|',
            'nama_petugas'  => 'required|max:35',
            'level'         => 'required|'
        ]);

        $petugas = User::findOrFail($id);

        $petugas->update([
            'username'      => $request->username,
            'password'      => $request->password,
            'nama_petugas'  => $request->nama_petugas,
            'level'         => $request->level
        ]);

        if ($petugas) {
            return redirect()
                ->route('petugas.index')
                ->with([
                    'success' => 'Berhasil Memperbarui Data Petugas!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }
    public function destroy($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->delete();

        if ($petugas) {
            return redirect()
                ->route('petugas.index')
                ->with([
                    'success' => 'Berhasil Menghapus Data Petugas!'
                ]);
        } else {
            return redirect()
                ->route('petugas.index')
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }
}
