<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table ="products";

    protected $fillable = 
    [
         'p_name',
         'category', 
         'price', 
         'stock', 
         'image', 
         'description'
    ];
}
