<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_name',
        'product_price',
        'product_quantity',
        'product_image',
        'product_description',
    ];
}
