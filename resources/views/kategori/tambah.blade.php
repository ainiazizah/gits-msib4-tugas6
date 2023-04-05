@extends('app')
@section('isi')
<div class="row">
    <div class="col-md-12">
        <h2>Tambah Kategori</h2>
        <br>
        <a href="{{ url('kategori') }}" class="btn btn-secondary"><--Kembali</a>
        <form action="/kategori" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan Nama Kategori">
            </div>
            <input type="submit" value="Simpan" class="btn btn-md btn-success">
        </form>
    </div>
</div>
@endsection
