<?php

namespace App\Traits;

use App\Scopes\PharmacyScope;

trait AppendPharmacy
{

    public static function bootAppendPharmacy()
    {
        static::addGlobalScope(new PharmacyScope);
    }
}
