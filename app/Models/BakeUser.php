<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BakeUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'middle_name',
        'last_name',
        'place',
        'contact_number',
        'block',
        'lot',
    ];
}
