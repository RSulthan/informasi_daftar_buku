<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPenulis extends Model
{
    use HasFactory;

    protected $fillable = ['nama_penulis', 'waktu_buat'];
}
