<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory, HasFactory;

    protected $fillable = [
        'name',
        'product_id',
    ];
}
