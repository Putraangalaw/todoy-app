@extends('template.index')

@section('judul', 'Add')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/menu/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kd_makanan }}">
                    @endisset
                    <div class="mb3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" name="kode" value="{{ @$data->kd_makanan }}">
                    </div>
                    <div class="mb3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ @$data->nama }}">
                    </div>
                    <div class="mb3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="{{ @$data->kategori }}">
                    </div>
                    <div class="mb3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{ @$data->harga }}">
                    </div>
                    <div class="mb3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="ket" value="{{ @$data->ket }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
