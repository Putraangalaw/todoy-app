@extends('template')

@section('judul', 'About')

@section('content')
    <form action="/save" method="post">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama">
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori">
        </div>

        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga">
        </div>

        <div>
            <label for="ket">Keterangan</label>
            <input type="text" name="ket">
        </div>

        {{-- <input type="submit" value="simpan"> --}}
        <button type="submit">Simpan</button>
    </form>
@endsection