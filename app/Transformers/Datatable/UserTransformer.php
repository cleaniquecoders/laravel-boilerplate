<?php

namespace App\Transformers\Datatable;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\User $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'hashslug' => $user->hashslug,
            'name'     => $user->name,
            'email'    => $user->email,
        ];
    }
}
