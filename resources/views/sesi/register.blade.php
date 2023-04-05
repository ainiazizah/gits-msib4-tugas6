@extends('app')
@section('isi')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>REGISTER</h1>
        <form action="/sesi/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <p>Sudah punya akun? <a href="/sesi">Login</a></p>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
