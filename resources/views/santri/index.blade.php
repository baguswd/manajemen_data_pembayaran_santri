@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Santri</h2>
        <a href="{{ route('santri.create') }}" class="btn btn-primary">Tambah Santri</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($santris as $santri)
                <tr>
                    <td>{{ $santri['id'] }}</td>
                    <td>{{ $santri['nama'] }}</td>
                    <td>{{ $santri['alamat'] }}</td>
                    <td>{{ $santri['umur'] }}</td>
                    <td>
                        <a href="{{ route('santri.show', $santri['id']) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('santri.edit', $santri['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('santri.destroy', $santri['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
