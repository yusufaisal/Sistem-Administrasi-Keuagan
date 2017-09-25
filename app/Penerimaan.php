<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $fillable = [
        'keterangan','profit','tahun','bulan', 'user'
    ];
}
