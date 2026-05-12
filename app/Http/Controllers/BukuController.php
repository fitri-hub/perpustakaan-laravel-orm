<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // tampil data
    public function index()
    {
        $dataBuku = Buku::all();

        return view('buku', compact('dataBuku'));
    }

    // form tambah
    public function create()
    {
        return view('tambah_buku');
    }

    // simpan tambah
    public function store(Request $request)
    {
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun
        ]);

        return redirect('/buku');
    }

    // form edit
    public function edit($id)
    {
        $buku = Buku::find($id);

        return view('edit_buku', compact('buku'));
    }

    // update data
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun
        ]);

        return redirect('/buku');
    }

    // hapus data
    public function destroy($id)
    {
        $buku = Buku::find($id);

        $buku->delete();

        return redirect('/buku');
    }
}