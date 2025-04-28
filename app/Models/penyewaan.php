<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penyewaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_penyewa',
        'nama_alat',
        'tanggal_sewa',
        'tanggal_kembali',
        'jumlah_unit',
        'harga_per_hari',
        'status',
    ];
    
}
