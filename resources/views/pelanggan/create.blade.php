@extends('layout.app')

@section('content')
<div class="container mt-5 py-4">
    <h2>Form Data Pelanggan</h2>
    <form action="{{ url('/pelanggan') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="paket" class="form-label">Paket</label>
        <input type="text" class="form-control" id="paket" name="paket" required>
    </div>
    <div class="mb-3">
        <label for="kampus" class="form-label">Kampus</label>
        <input type="text" class="form-control" id="kampus" name="kampus" required>
    </div>
    <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ url('/pelanggan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
