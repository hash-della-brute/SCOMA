<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'serial_number',
        'asset_number',

    ];
}
