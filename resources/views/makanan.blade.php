@extends('template')

@section('judul', 'Home')

@section('content')

    <table border="1">
        <thead>
            <tr>
               <td>Kode</td>
               <td>Nama</td>
               <td>Kategori</td>
               <td>Harga</td>
               <td>Keterangan</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->kode_makanan }}</td>
                    <td>{{ $food->nama }}</td>
                    <td>{{ $food->kategori }}</td>
                    <td>{{ $food->harga }}</td>
                    <td>{{ $food->ket }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
              