@extends('main.utama')
@section('isi')
    <a class="btn btn-info my-3" href="/">belanja</a>
    <div class="row">
        <div class="col-md-12">
            @if ($beli->count())
                <table class="table table-striped">
                    <thead>
                        <th>no</th>
                        <th>nama</th>
                        <th>gambar</th>
                        <th>jumlah beli</th>
                        <th>harga satuan</th>
                        <th>sub total</th>
                        <th>tanggal</th>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($beli as $buy)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $buy->barang->nama }}</td>
                                <td><img src="{{ url('img/' . $buy->barang->gambar) }}" width="100"></td>
                                <td>{{ $buy->jumlah_barang }}</td>
                                <td>{{ $buy->barang->harga }}</td>
                                <td>{{ $buy->total_barang }}</td>
                                <td> {{ $buy->barang->created_at }} </td>
                                <?php $no++; ?>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                belum melakukan pembelian
            @endif
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
