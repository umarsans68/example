<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alker extends Model
{
    use HasFactory;
    protected $table = 'alker';

    protected $fillable = [
        'merk', 'sn', 'kondisi', 'foto', 'status',
    ];
}
