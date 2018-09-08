<?php

namespace App\Transformers;

use Laravel\Passport\PersonalAccessTokenResult;
use League\Fractal\TransformerAbstract;

class ApiTokenTransformer extends TransformerAbstract
{
    /**
     * @param \Laravel\Passport\PersonalAccessTokenResult $pat
     *
     * @return array
     */
    public function transform(PersonalAccessTokenResult $pat)
    {
        return [
            'access_token' => $pat->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => \Carbon\Carbon::parse(
                $pat->token->expires_at
            )->toDateTimeString(),
        ];
    }
}
