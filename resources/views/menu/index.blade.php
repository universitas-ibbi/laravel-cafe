@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route("menu.simpan") }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div>
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="">
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
