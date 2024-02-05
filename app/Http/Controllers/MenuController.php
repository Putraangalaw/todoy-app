<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Query Builder
use Illuminate\Support\Facades\DB;

// Use Eloquent
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        // Query Builder
        // $kategoris = DB::table('kategoris')->get();

        // Eloquent
        $menus = menu::all();

        return view('menu', [
            'data' => $menus,
        ]);
    }

    public function add()
    {
        return view('form_menu');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        
        return view('form_menu', [
            'data' => $menu,
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if ($old_kode) {

            // Mode Edit

            // Eloquent
            kategori::where('kode_makanans', $old_kode)->update([
                'kode_makanans' => $req->kode,
                'nama' => $req->nama,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);


        } else {

            // Mode Add
    
            // Query Builder
            // DB::table('menus')->insert([
            //     'kode_menu' => $req->kode,
            //     'nama' => $req->nama,
            //     'harga' => $req->harga
            //     'ket' => $req->ket,
            // ]);
    
            // Eloquent 1
            Menu::create([
                'kode_makanans' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);
    
            // Eloquent 2
            // $menu = new Menu;
            // $menu->kode_menu = $req->kode;
            // $menu->nama = $req->nama;
            // $harga->harga = $req->harga;
            // $menu->ket = $req->ket;
            // $menu->save();
            }
    
    
    
            return redirect('/menu');
        }

        public function delete($id)
    {
        // dd($id);

        // Query Builder
        // DB::table('menus')->where('kode_menu', $id)->delete();

        // Eloquent 1
        Menu::find($id)->delete();

        // Eloquent 2
        // Menu::where('kode_menu', $id)->delete();

        return redirect('/menu');
    }
}