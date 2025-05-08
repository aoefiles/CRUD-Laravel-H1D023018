@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Wilayah</h2>
    <form action="{{ route('wilayah.update', $wilayah->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Nama Wilayah</label>
            <input type="text" name="nama_wilayah" value="{{ $wilayah->nama_wilayah }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="text" name="kode_pos" value="{{ $wilayah->kode_pos }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $wilayah->keterangan }}</textarea>
        </div>
        <button class="btn btn-success mt-2">Update</button>
        <a href="{{ route('wilayah.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
