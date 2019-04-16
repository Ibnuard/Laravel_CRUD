<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    //
    protected $fillable = [
    'p_judul',
    'p_penerbit',
    'p_tahun',
    'p_pengarang'
  ];
}
