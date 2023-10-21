<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GunungPutri extends Model
{
    protected $table = "gunungputri";

    protected $fillable = [
      'tanggal',
      'telur',
      'panen',
      'omset',
      'pengeluaran',
      'keuntungan',
    ];
}
