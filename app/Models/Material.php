<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    // Define fillable fields (optional but recommended)
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'sector',
        'serial_number',
        'asset_number',
    ];
}
