<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $primaryKey = 'kode_kategori';

    protected $fillable = [
        'kode_kategori',
        'nama',
        'ket',
    ];
}