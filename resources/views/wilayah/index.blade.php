@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Wilayah</h2>
    <a href="{{ route('wilayah.create') }}" class="btn btn-primary mb-3">Tambah Wilayah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Wilayah</th>
            <th>Kode Pos</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @foreach($wilayah as $w)
        <tr>
            <td>{{ $w->id }}</td>
            <td>{{ $w->nama_wilayah }}</td>
            <td>{{ $w->kode_pos }}</td>
            <td>{{ $w->keterangan }}</td>
            <td>
                <a href="{{ route('wilayah.edit', $w->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('wilayah.destroy', $w->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
