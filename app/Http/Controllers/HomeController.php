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
}
