<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    use HasFactory;
    protected $primaryKey = 'code_brand';
    protected $fillable = [
        'name',
        'manufacturer',
        'sticker'
    ];
}
