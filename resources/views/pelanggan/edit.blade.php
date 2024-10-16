@extends('layout.app')

@section('content')
<div class="container mt-5 py-4">
    <h2>Edit Pelanggan</h2>
    <form action="{{ url('/pelanggan/' . $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menggunakan method PUT untuk update data -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelanggan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="paket" class="form-label">Paket</label>
            <input type="text" class="form-control" id="paket" name="paket" value="{{ $pelanggan->paket }}" required>
        </div>
        <div class="mb-3">
            <label for="kampus" class="form-label">Kampus</label>
            <input type="text" class="form-control" id="kampus" name="kampus" value="{{ $pelanggan->kampus }}" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $pelanggan->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ url('/pelanggan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
