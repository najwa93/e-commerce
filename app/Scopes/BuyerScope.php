<?php
/**
 * Created by PhpStorm.
 * User: Najwa
 * Date: 25/04/2020
 * Time: 12:57 AM
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BuyerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // TODO: Implement apply() method.
        $builder->has('transactions');
    }

}