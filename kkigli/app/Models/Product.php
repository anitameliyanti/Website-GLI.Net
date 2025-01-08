<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Daftar kolom yang diperbolehkan untuk mass assignment
    protected $fillable = [
        'nama',
        'tempat_tinggal',
        'layanan',
        'masa_berlaku',
        'masa_habis',
    ];
}
