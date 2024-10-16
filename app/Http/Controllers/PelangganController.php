<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{

    public function index()
    {
        $pelanggans = Pelanggan::all(); // Ambil semua data pelanggan
        return view('pelanggan.index', compact('pelanggans'));
    }
    public function create()
    {
        return view('pelanggan.create');
    }

    public function edit($id)
    {
        // Temukan pelanggan berdasarkan ID
        $pelanggan = Pelanggan::find($id);

        // Jika pelanggan tidak ditemukan, redirect ke halaman index
        if (!$pelanggan) {
            return redirect('/pelanggan')->with('error', 'Pelanggan tidak ditemukan');
        }

        // Kirim data pelanggan ke view edit
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'paket' => 'required|string|max:255',
            'kampus' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ]);

        Pelanggan::create($request->all());

        return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'paket' => 'required|string|max:255',
            'kampus' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ]);

        // Temukan pelanggan berdasarkan ID
        $pelanggan = Pelanggan::find($id);

        // Jika pelanggan tidak ditemukan, redirect ke halaman index
        if (!$pelanggan) {
            return redirect('/pelanggan')->with('error', 'Pelanggan tidak ditemukan');
        }

        // Update data pelanggan dengan data yang baru
        $pelanggan->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil diperbarui');
    }
    public function destroy($id)
    {
        // Temukan pelanggan berdasarkan ID
        $pelanggan = Pelanggan::find($id);

        // Jika pelanggan tidak ditemukan, redirect ke halaman index
        if (!$pelanggan) {
            return redirect('/pelanggan')->with('error', 'Pelanggan tidak ditemukan');
        }

        // Hapus pelanggan
        $pelanggan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pelanggan')->with('success', 'Pelanggan berhasil dihapus');
    }

}