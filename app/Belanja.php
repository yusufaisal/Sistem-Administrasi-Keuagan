<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    protected $table = 'jurnals';
    protected $fillable = [
        'keterangan','deposit','tahun','bulan', 'user'
    ];

    public function user(){
        return $this ->belongsTo(User::class);
    }
}
