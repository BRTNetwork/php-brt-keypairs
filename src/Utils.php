<?php

namespace BRTNetwork\BRTKeypairs;

use BRTNetwork\Buffer\Buffer;

class Utils
{
    public static function computePublicKeyHash(Buffer $publicKeyBytes)
    {
        $hash160 = hash('ripemd160', hash('sha256', $publicKeyBytes->getBinary(), true));
        return Buffer::hex($hash160);
    }
}
