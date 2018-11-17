<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=[
        'id_motor','tanggal','jumlah','total_harga','fk'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function motor()
    {
        return $this->hasOne(Motor::class);
    }
}