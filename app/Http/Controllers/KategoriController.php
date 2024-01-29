<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Query Builder
use Illuminate\Support\Facades\DB;

// Use Eloquent
use App\Models\kategori;

class KategoriController extends Controller
{
    public function index()
    {
        // Query Builder
        // $kategoris = DB::table('kategoris')->get();

        // Eloquent
        $kategoris = kategori::all();

        return view('kategori', [
            'data' => $kategoris,
        ]);
    }

    public function add()
    {
        return view('form_kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('form_kategori', [
            'data' => $kategori,
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if ($old_kode) {

            // Mode Edit

            // Eloquent
            kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);


    } else {

        // Mode Add

        // Query Builder
        // DB::table('kategoris')->insert([
        //     'kode_kategori' => $req->kode,
        //     'nama' => $req->nama,
        //     'ket' => $req->ket,
        // ]);

        // Eloquent 1
        Kategori::create([
            'kode_kategori' => $req->kode,
            'nama' => $req->nama,
            'ket' => $req->ket,
        ]);

        // Eloquent 2
        // $kategori = new Kategori;
        // $kategori->kode_kategori = $req->kode;
        // $kategori->nama = $req->nama;
        // $kategori->ket = $req->ket;
        // $kategori->save();
        }



        return redirect('/kategori');
    }

    public function delete($id)
    {
        // dd($id);

        // Query Builder
        // DB::table('kategoris')->where('kode_kategori', $id)->delete();

        // Eloquent 1
        Kategori::find($id)->delete();

        // Eloquent 2
        // Kategori::where('kode_kategori', $id)->delete();

        return redirect('/kategori');
    }
}