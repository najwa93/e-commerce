<?php
/**
 * Created by PhpStorm.
 * User: Najwa
 * Date: 25/04/2020
 * Time: 1:27 AM
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class SellerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // TODO: Implement apply() method.
        $builder->has('products');
    }
}