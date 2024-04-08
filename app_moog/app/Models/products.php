<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $primaryKey = 'code_product';
    protected $fillable = [
        'name',
        'price',
        'slug',
        'stock',
        'description',
        'user_id',
        'code_city',
        'code_brand',
        'code_category',
        'images',
    ];
}
