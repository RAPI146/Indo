<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class p4m extends Model
{
  protected $table = "p4m";

  protected $fillable = [
    'tanggal',
    'telur',
    'panen',
    'omset',
    'pengeluaran',
    'keuntungan',
  ];
}
