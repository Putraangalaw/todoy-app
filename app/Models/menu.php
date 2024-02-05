<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kode_makanans';

    protected $keyType = 'string';
    
    protected $fillable = [
        'kode_makanans',
        'nama',
        'kategori',
        'harga',
        'ket',
    ];
}
