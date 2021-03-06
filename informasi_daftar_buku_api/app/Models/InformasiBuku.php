<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiBuku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'isi', 'gambar', 'halaman', 'waktu_buat', 'id_penulis'];
}
