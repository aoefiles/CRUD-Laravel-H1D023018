@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Wilayah</h2>
    <form action="{{ route('wilayah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Wilayah</label>
            <input type="text" name="nama_wilayah" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button class="btn btn-success mt-2">Simpan</button>
        <a href="{{ route('wilayah.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
