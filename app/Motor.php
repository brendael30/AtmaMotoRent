<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table="motors";
    protected $primaryKey="id";
    public $timestamps=true;
    protected $fillable=[
        'plat','nama_motor','status','deskripsi','harga','gambar'
    ];
}
