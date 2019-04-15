<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    //
    protected $fillable = [
    'datasiswa_name',
    'datasiswa_nomor',
    'datasiswa_kelas'
  ];
}
