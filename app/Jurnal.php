<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $fillable = [
        'keterangan','profit','deposit','tahun','bulan'
    ];
}
