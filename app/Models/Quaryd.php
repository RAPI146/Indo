<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Quaryd extends Model
{
  protected $table = "quaryd";

  protected $fillable = [
    'tanggal',
    'telur',
    'panen',
    'omset',
    'pengeluaran',
    'keuntungan',
  ];
}
