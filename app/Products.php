<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $fillable = array('product_name', 'product_image', 'product_price');
}
