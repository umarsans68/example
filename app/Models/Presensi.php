<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';

    protected $fillable = [
        'nama',
        'nik',
        'datel',
        'jam_masuk',
        'jam_pulang',
        'foto',
    ];

    // Jika Anda memiliki atribut timestamp lainnya di tabel, tambahkan baris ini:
    // protected $dates = ['created_at', 'updated_at'];

    // Jika Anda ingin menyembunyikan atribut tertentu dari kumpulan data, tambahkan baris ini:
    // protected $hidden = ['password'];

    // Jika Anda ingin mengkustomisasi format timestamp, tambahkan baris ini:
    // protected $dateFormat = 'Y-m-d H:i:s';
}
