<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Rekomendasi;

class RekomendasiTransformers extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param Rekomendasi $rekomendasi
     */
    public function transform(Rekomendasi $rekomendasi)
    {
        return [
            'id' => $rekomendasi->id,
            'id_user' => $rekomendasi->id_user,
            'message' => $rekomendasi->message,
        ];
    }
}