<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="users";
    protected $primaryKey="id";
    public $timestamps=true;
    protected $fillable=[
        'nama_lengkap','username','password','alamat','phone','role','email','verifikasi','code'
    ];

    public function rekomendasi(){
        return $this->hasMany('App\Rekomendasi','id_user');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi_temp::class, 'fk');
    }
}