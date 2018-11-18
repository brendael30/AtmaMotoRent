<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_temp extends Model
{
    protected $table="transaksi_temps";
    protected $primaryKey="id";
    public $timestamps=true;
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
