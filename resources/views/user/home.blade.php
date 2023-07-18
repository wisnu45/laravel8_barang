@extends('main.utama')
@section('isi')
    @if (session()->has('pesan'))
        <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
            <p> {{ session('pesan') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        @foreach ($data as $dt)
            <div class="col-md-4">
                <div class="card my-3">
                    <div class="position-absolute px-4 py-2" style="background-color:rgba(0,0,0,0.6)">
                        <a href="" class="text-white" style="text-decoration: none">Lorem, ipsum dolor.</a>
                    </div>
                    <img class="card-img-top" src="{{ url('img/' . $dt->gambar) }}" height="300">
                    <div class="card-body">
                        <h5 class="card-title">
                            <h5 style="text-decoration: none" class="text-dark" href="">{{ $dt->nama }}</h5>
                            <p class="card-text">harga:
                                {{ $dt->harga }}
                            </p>
                            <a href="/detail/{{ $dt->slug }}" class="btn btn-primary mt-3 col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    @include('sweetalert::alert')

@endsection
