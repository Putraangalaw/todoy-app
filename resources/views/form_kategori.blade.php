@extends('template.index')

@section('title', 'Home')

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12"></div>

                <form action="/kategori/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kode_kategori }}">
                    @endisset
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" value={{ @$data->kode_kategori}}>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="kode" name="nama" value={{ @$data->nama}}>
                    </div>

                    <div class="mb-3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="kode" name="ket" value={{ @$data->ket}}>
                    </div>
                    <button type="submit" classs="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
    
@endsection