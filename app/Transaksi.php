<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=[
        'id_motor','tanggal','jumlah','total_harga','fk'
    ];
}
