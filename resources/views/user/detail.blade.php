@extends('main.utama')

@section('isi')
    <h1>detail barang</h1>
    <div class="card mt-4 ">
        <div class="row no-gutters">
            <div class="col-auto">
                <img src="{{ url('img/' . $detail->gambar) }}" class="img-fluid ml-3 mt-3" width="200">
            </div>
            <div class="col">
                <div class="card-block px-4 pt-2">
                    <h4 class="card-title">{{ $detail->nama }}</h4>
                    <p class="card-text">{{ $detail->deskripsi }}</p>
                    <p class="text">harga : Rp. {{ number_format($detail->harga) }} </p>
                    @auth
                        @if (auth()->user()->level == 'user')
                            <form action="/beli/{{ $detail->id }}" method="post">
                                @csrf
                                <input type="number" value="1" hidden name="jumlah">
                                <button class="btn btn-success col-md-7 mb-3">masukan keranjang</button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        <div class="card-footer w-100 text-muted">
            <p class="card-text">Tersisa : {{ $detail->stok }} </p>
        </div>
    </div>
    @include('sweetalert::alert')

@endsection
