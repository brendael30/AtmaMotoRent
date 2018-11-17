<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $table="rekomendasis";
    protected $primaryKey="id";
    public $timestamps=true;
    protected $fillable=[
        'id_user','message'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
