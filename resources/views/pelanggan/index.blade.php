@extends('layout.app')

@section('content')
<div class="container mt-5 py-4">
    <h2>Daftar Pelanggan</h2>
    
    <!-- Button Tambah Pelanggan -->
    <div class="mb-3">
        <a href="{{ url('/pelanggan/create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Paket</th>
                <th>Kampus</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $pelanggan)
            <tr>
                <td>{{ $pelanggan->id }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->paket }}</td>
                <td>{{ $pelanggan->kampus }}</td>
                <td>{{ $pelanggan->telepon }}</td>
                <td>
                    <a href="{{ url('/pelanggan/' . $pelanggan->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/pelanggan/' . $pelanggan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
