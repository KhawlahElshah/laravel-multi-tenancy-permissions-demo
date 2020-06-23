<?php

namespace App\Scopes;

// Scope
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PharmacyScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder;
    }
}
