
@extends('app')
@section('isi')
<div class="row">
    <div class="col-md-12">
        <h2>Halaman Daftar Produk</h2>
        <br>
        <a href="produk/create" class="btn btn-md btn-success">Tambah Produk</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Foto Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga Produk</th>
                <th scope="col">Jumlah Produk</th>
                <th scope="col">Kategori</th> 
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $nomor = 1;
                @endphp
                @foreach ($data as $dt)
                    <tr>
                      <th scope="row">{{$nomor++}}</th>
                      <td>
                        <img src="{{ asset('storage/'.$dt->foto_produk)}}" style="max-height: 50px" alt="">
                        </td>
                        <td>
                            {{$dt->harga_produk}}
                        </td>
                        <td>
                            {{$dt->jumlah_produk}}
                        </td>
                        <td>
                            {{$dt->kategori->nama_kategori}}
                        </td>
                        <td>
                            {{$dt->nama_produk}} 
                        </td>
                      <td>
                        <form action="/produk/{{$dt->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="produk/{{$dt->id}}/edit" class="btn btn-md btn-warning mr-2">Edit</a>
                            <input class="btn btn-md btn-danger" type="submit" value="Hapus">
                        </form>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
