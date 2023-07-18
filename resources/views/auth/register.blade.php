@extends('main.utama')
@section('isi')
    <form action="/register" method="POST">
        @csrf
        <div class="card my-3 p-4">
            <div class="form-group row justify-content-center">
                <label for="name" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="exexex"
                        name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            <p> {{ $message }} </p>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="ex@gmail.com"
                        name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            <p> {{ $message }} </p>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password">
                    @error('password')
                        <div class="invalid-feedback">
                            <p> {{ $message }} </p>
                        </div>
                    @enderror
                </div>
            </div>
            <input type="text" hidden value="user" name="level">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary col-md-5 mb-3">Mendaftar</button>
            </div>
            <p class="text-center">sudah punya akun? <a href="/login">login sekarang!</a></p>
        </div>
    </form>
    @include('sweetalert::alert')

@endsection
