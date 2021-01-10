<?php

namespace App\Encryption;

use Throwable;
use Illuminate\Contracts\Encryption\Encrypter;

class Signature
{
    protected $crypt;

    public function __construct(Encrypter $crypt)
    {
        $this->crypt = $crypt;
    }

    public function make($payload)
    {
        return $this->crypt->encrypt($payload);
    }

    public function check($signature, $expect)
    {
        try {
            return $this->crypt->decrypt($signature) === $expect;
        } catch (Throwable $th) {
            return false;
        }
    }
}
