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
                        <th>aksi</th>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php $total = 0; ?>
                        @foreach ($beli as $buy)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $buy->barang->nama }}</td>
                                <td><img src="{{ url('img/' . $buy->barang->gambar) }}" width="100"></td>
                                <td>{{ $buy->jumlah_beli }}</td>
                                <td>{{ $buy->barang->harga }}</td>
                                <td>{{ $subtotal = $buy->barang->harga * $buy->jumlah_beli }}</td>
                                <td>
                                    <form action="/hapus/{{ $buy->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <br>
                                    <form action="/checkout/{{ $buy->id }}" method="post">
                                        @csrf
                                        <input hidden name="jumlah_barang" value="{{ $buy->jumlah_beli }}">
                                        <input hidden name="subtotal" value="{{ $subtotal }}">
                                        <button class="btn btn-success" type="submit"><i class="bi bi-cart-fill"></i> bayar
                                        </button>
                                    </form>
                                </td>
                                <?php $no++; ?>
                            </tr>
                            <?php $total += $subtotal; ?>
                        @endforeach
                        <tr class="bg-light" style="font-family: sans-serif; font-weight:bold;">
                            <td colspan="4" align="right">Total yang ada di keranjang :</td>
                            <td></td>
                            <td>{{ $total }}</td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                keranjang masih kosong
            @endif
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
