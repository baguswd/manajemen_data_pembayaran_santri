@extends('layouts.app')

@section('content')
    <h2>Edit Data Santri</h2>

    <form action="{{ route('santri.update', $santri['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $santri['nama'] }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $santri['alamat'] }}</textarea>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" value="{{ $santri['umur'] }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
