<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BakeUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'reserved_product',
        'first_name',
        'last_name',
        'user_email',
        'place',
        'contact_number',
        'quantity',
        'amount',

    ];
}
