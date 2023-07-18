@extends('main.utama')

@section('isi')

    <h2>Form barang</h2>
    <a href="/admin" class="badge badge-info">data admin</a>
    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center mt-3 ml-5">
            <div class="col-md-4">
                <div class="form group row">
                    <label for="nama" class="col-form-label">nama barang</label>
                    <div class="col-sm-8 mt-2">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <div class="form group row">
                    <label for="harga" class="col-form-label">harga barang</label>
                    <div class="col-sm-8 mt-2">
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                </div>
                <div class="form group row">
                    <label for="stok" class="col-form-label">stok barang</label>
                    <div class="col-sm-8 mt-2 ml-2">
                        <input type="text" class="form-control" name="stok" id="stok">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form group row">
                    <label for="deskripsi" class="col-form-label">deskripsi barang</label>
                    <div class="col-sm-7 mt-2">
                        <textarea type="text" class="form-control" name="deskripsi" rows="4" id="deskripsi"></textarea>
                    </div>
                </div>
                <div class="form group row">
                    <label for="gambar" class="col-form-label">gambar barang</label>
                    <div class="col-sm-7 mt-2 ml-2">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-success mt-4  col-md-6">
        </div>
    </form>

@endsection
