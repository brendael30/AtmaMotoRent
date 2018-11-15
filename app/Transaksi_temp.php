<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_temp extends Model
{
    protected $fillable=[
        'id_motor','tanggal','jumlah','total_harga','fk'
    ];
}
