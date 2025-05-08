@extends('layouts.app')

@section('content')
    <h2>Detail Santri</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $santri['id'] }}</li>
        <li class="list-group-item"><strong>Nama:</strong> {{ $santri['nama'] }}</li>
        <li class="list-group-item"><strong>Alamat:</strong> {{ $santri['alamat'] }}</li>
        <li class="list-group-item"><strong>Umur:</strong> {{ $santri['umur'] }}</li>
    </ul>

    <a href="{{ route('santri.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
