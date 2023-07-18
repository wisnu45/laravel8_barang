@extends('main.utama')
@section('isi')

    <h1>halaman utama</h1>
    <a href="/form">tambah baju</a>
    <table class="table table-striped">
        <thead>
            <th>no</th>
            <th>nama</th>
            <th>harga</th>
            <th>stok</th>
            <th>gambar</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($data as $dt)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->harga }}</td>
                    <td>{{ $dt->stok }}</td>
                    <td><img src="{{ url('img/' . $dt->gambar) }}" width="100"></td>
                    <td>
                        <form action="/hapus/data/{{ $dt->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <?php $no++; ?>
            @endforeach
        </tbody>
    </table>

@endsection
