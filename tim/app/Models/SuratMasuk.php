<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    // Tambahkan baris ini supaya kolom-kolomnya diizinkan untuk diisi
    protected $fillable = [
        'nomor',
        'tanggal',
        'perihal',
        'sumber',
        'keterangan',
        'berkas'
    ];
}