<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function tambah()
    {
        return view('input');
    }

    public function simpan(request $request)
    {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result',[
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }

    public function view_makanan()
    {
        // query builder
        // @makanans = DB::table('makanans')->get();

        // eloquent
        $makanans = Makanan::all();

        // dd($makanans);

        return view('makanan', [
            'foods' => $makanans,
        ]);
    }

    public function test_query_builder()
    {
        // Query Builder untuk insert 1 data kedalam table makanans
        // DB::table('makanans')->insert([
        //     'nama' => 'Nasgor',
        //     'kategori' => 'Makanan',
        //     'harga' => '15.000',
        //     'ket' => 'dijual',
        // ]);

        // Query Builder untuk insert banyak data kedalam table makanans
        // DB::table('makanans')->insert([
        //     [
        //          'nama' => 'Batagor',
        //          'kategori' => 'Makanan',
        //          'harga' => '10.000',
        //          'ket' => 'dijual',
        //     ],
        //     [
        //          'nama' => 'Pempek',
        //          'kategori' => 'Makanan',
        //          'harga' => '5.000',
        //          'ket' => 'dijual',
        //     ],
        //     [
        //          'nama' => 'Mieayam',
        //          'kategori' => 'Makanan',
        //          'harga' => '15.000',
        //          'ket' => 'dijual',
        //     ],
        //     [
        //         'nama' => 'Bakso',
        //         'kategori' => 'Makanan',
        //         'harga' => '20.000',
        //         'ket' => 'dijual',
        //     ],
        // ]);

        // Query untuk Select data dari table makanans
        // $result = DB::table('makanans')->where('id', 1)->get();
        // dd($result);

        // Query umtuk delete data dari table makanans
        // DB::table('makanans')->where('id', 1)->delete();

        // Query umtuk Update data dari table makanans
        // DB::table('makanans')->where('kode_makanan', 1)->update();
        //    'nama' => 'onde-onde',
        //    'kategori' => 'snack',
        //    'harga' => 'harga',
        //    'ket' => 'ket',
        // ]);

        return 'masuk test';
    }

    public function test_eloquent()
    {
        // SELECT DATA
        $makanans = Makanan::all();

        dd($makanans);

        // INSERT DATA CARA 1
        // Makanan::create([
        //         'kode_makanan' => 'm001',
        //         'nama' => 'Nasgor',
        //         'kategori' => 'makanan',
        //         'harga' => '15.000',
        //         'ket' => 'dijual',
        // ]);

        // INSERT DATA CARA 2
        // makanan = new Makanan;
        // $makanan->kode_makanan = 'm100';
        // $makanan->nama = 'kuaci';
        // $makanan->kategori = 'makanan';
        // $makanan->harga = 1000;
        // $makanan->ket = 'tersedia';
        // $makanan->save();

        //HAPUS DATA CARA 1
        //Makanan::find('m001')->delete();

        //HAPUS DATA CARA 2
        // $makanan = Makanan::find('m001');
        // $makanan->delete();

        //Update data
        // $makanan = Makanan::find('m100');
        // $makanan->nama = 'telur puyuh';
        // $makanan->kategori = 'makanan';
        // $makanan->harga = 5000;
        // $makanan->ket = 'tersedia';
        // $makanan->save();




        return 'masuk test';
    }
}
