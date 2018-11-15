<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformers extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param User $user
     */
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'nama_lengkap' => $user->nama_lengkap,
            'username' => $user->username,
            'alamat' => $user->alamat,
            'phone' => $user->phone,
            'role' => $user->role,
            'email' => $user->email,
        ];
    }
}