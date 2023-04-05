@extends('app')
@section('isi')
<div class="row">
    <div class="col-md-12">
        <h2>Edit Kategori</h2>
        <br>
        <a href="{{ url('kategori') }}" class="btn btn-secondary"><--Kembali</a>
        <form action="/kategori/{{$data->id}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" class="form-control" value="{{$data->nama_kategori}}" name="nama_kategori" placeholder="Masukkan Nama Kategori">
            </div>
            <input type="submit" value="Simpan" class="btn btn-md btn-success">
        </form>
    </div>
</div>
@endsection
