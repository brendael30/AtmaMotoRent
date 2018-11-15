<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Motor;

class MotorTransformers extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param Motor $motor
     */
    public function transform(Motor $motor)
    {
        return [
            'id' => $motor->id,
            'plat' => $motor->plat,
            'nama_motor' => $motor->nama_motor,
            'status' => $motor->status,
            'deskripsi' => $motor->deskripsi,
            'harga' => $motor->harga,
            'gambar' => $motor->gambar,
        ];
    }
}