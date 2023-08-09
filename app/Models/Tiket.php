<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    // menambahkan variabel untuk manipulasi data
    protected $fillable = [
        'nama',
        'nomer_identitas',
        'no_hp',
        'tempat_wisata',
        'tanggal_kunjungan',
        'pengunjung_dewasa',
        'pengunjung_anakanak',
        'harga_tiket',
        'total_bayar'
    ];
}
