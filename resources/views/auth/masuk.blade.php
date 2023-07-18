@extends('main.utama')

@section('isi')
    <form action="/login" method="POST">
        @csrf
        {{-- @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show mt-4 " role="alert">
                <p> {{ session('pesan') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <p> {{ session('gagal') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif --}}
        <div class="card my-3 p-4">
            <div class="form-group row justify-content-center">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="ex@gmail.com"
                        name="email" id="email">
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
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary col-md-5 mb-3">login</button>
            </div>
            <p class="text-center">belum punya akun? <a href="/register">Registrasi sekarang!</a></p>
        </div>
    </form>
    @include('sweetalert::alert')
@endsection
