<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($productId)
 */
class Product extends Model
{
    public $table ='products';
}
