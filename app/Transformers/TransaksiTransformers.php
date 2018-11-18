<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Transaksi;

class TransaksiTransformers extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param Transaksi $transaksi
     */
    public function transform(Transaksi $transaksi)
    {
        return [
            'id' => $transaksi->id,
            'id_motor' => $transaksi->id_motor,
            'tanggal' => $transaksi->tanggal,
            'jumlah' => $transaksi->jumlah,
            'total_harga' => $transaksi->total_harga,
            'fk' => $transaksi->fk,
        ];
    }
}