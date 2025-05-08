@extends('layouts.app')

@section('content')
    <h2>Tambah Data Santri</h2>

    <form action="{{ route('santri.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection
