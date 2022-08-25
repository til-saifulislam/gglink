<?php
namespace Alien\Gglink;

use Illuminate\Support\Str;

Trait Tokenable 
{
    public function generateAndSaveApiAuthToken($token)
    {
        $this->api_token = $token;
        $this->save();

        return $this;
    }
}
