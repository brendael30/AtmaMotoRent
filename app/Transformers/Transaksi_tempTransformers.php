<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Transaksi_temp;

class Transaksi_tempTransformers extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param Transaksi_temp $transaksi_temp
     */
    public function transform(Transaksi_temp $transaksi_temp)
    {
        return [
            'id' => $transaksi_temp->id,
            'id_motor' => $transaksi_temp->id_motor,
            'tanggal' => $transaksi_temp->tanggal,
            'jumlah' => $transaksi_temp->jumlah,
            'total_harga' => $transaksi_temp->total_harga,
            'fk' => $transaksi_temp->fk,
        ];
    }
}