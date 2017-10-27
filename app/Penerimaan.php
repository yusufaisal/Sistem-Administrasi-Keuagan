<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'jurnals';
    protected $fillable = [
        'keterangan','profit','tahun','bulan', 'user'
    ];

    public function user(){
        return $this ->belongsTo(User::class);
    }
}
